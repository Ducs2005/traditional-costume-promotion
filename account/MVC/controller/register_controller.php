<?php 
    session_start();
    include "../model/dbconnect.php";
    $name = $email = $password = "";
    $name_err = $email_err = $password_err = "";
    $succ_msg = $err_msg = "";

    $error = false;

    if (isset($_POST['submit'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        //validate input
        if ($name == "") {
            $name_err = "Please enter name";
            $error = true;
        }
        if ($email == "") {
            $email_err = "Please enter email";
            $error = true;
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_err = "Invalid email format";
            $error = true;
        }
        else {
            $sql = "select * from users where email = ?";
            $stmt = $connect->prepare($sql);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows>0) {
                $email_err = "Email already registered";
                $error = true;
            }
        }
        if ($password == "") {
            $password_err = "Please enter password";
            $error = true;
        }

        if (!$error) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $sql = "insert into users (name, email, password) values (?, ?, ?)";

            try {
                $stmt = $connect->prepare($sql);
                $stmt->bind_param("sss", $name, $email, $hashed_password);
                $stmt->execute();
                $succ_msg = "Registration successful. Please login <a href = 'login.php' >here</a>";
            } catch (Exception $e) {
                $err_msg = $e->getMessage();
            }
        }
    }

?>