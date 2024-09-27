<?php
    session_start();  
    include "../model/dbconnect.php";

    $email = $password = "";
    $email_err = $password_err = "";
    $err_msg = "";
    $error = false;

 if (isset($_POST['submit'])) {
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        if ($email == "") {
            $email_err = "Please enter email";
            $error = true;
        }
        
        if ($password == "") {
            $password_err = "Please enter password";
            $error = true;
        }

        if (!$error) {
            $sql = "select * from users where email = ?";
            $stmt = $connect->prepare($sql);
            $stmt->bind_param('s',$email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();      
                if (isset($row['password'])) {
                    
                    $stored_pwd = $row['password'];
                    if (password_verify($password,$stored_pwd)) {
                        $_SESSION['name'] = $row['name'];
                        header("location:home.php");
                    }
                } else {
                    $err_msg = "Incorrect password.";
                }
            }
            else {
                $err_msg = "Email is not registered";
            }
        }
    }

    require "./account/MVC/view/login.php";
?>
