<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login_register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <title>Login</title>
</head>
<body>
    <!-- wrapper -->
    <div class="wrapper"> 

        <span class="icon-close">
            <a href="../home_view.php"><i class="fa-solid fa-xmark" style="color: #fff"></i></a>
        </span> 

        <!-- login -->
        <div class="form-box login">
            <form action="#">
                <img src="../img/logo.png" alt="logo">
                <h1>WELCOME TO OUR PAGE</h1>         
                <!-- input -->
                <div class="input-box">
                    <input type="text" placeholder="Username or Email" required>
                    <i class='bx bx-user' ></i>
                </div>
    
                <div class="input-box">
                    <input type="password" placeholder="Password" required>
                    <i class='bx bx-lock-alt' ></i>
                </div>
    
                <!-- forgot pwd -->
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot password?</a>
                </div>
    
                <!-- submit -->
                <button type="submit" class="btn">Login</button>
                
                <!-- auto login -->
                <div class="authentication-social">
                    <div class="separator">
                        <span></span>
                        <span class="paragraph">OR</span>
                        <span></span>
                    </div>
                    <!-- Google -->
                    <a href="#" class="google" rel="nofollow">
                        <i class='bx bxl-google'></i>
                        <span>Login with Google</span>
                    </a>
                    <br>
                    <!-- Facebook -->
                    <a href="#" class="fb" rel="nofollow">
                        <i class='bx bxl-facebook-circle' ></i>
                        <span>Login with Facebook</span>
                    </a>    
                </div>
    
                <!-- register link -->
                <div class="register-link">
                    <p>Don't have an account? <a href="#">Register</a></p>
                </div>
            </form>
        </div>

        <!-- registration -->
        <div class="form-box register">
            <form action="#">
                <img src="../img/logo.png" alt="logo">
                <h1>WELCOME TO OUR PAGE</h1>         
                <!-- input -->
                <div class="input-box">
                    <input type="text" placeholder="Username" required>
                    <i class='bx bx-user' ></i>
                </div>
    
                <div class="input-box">
                    <input type="text" placeholder="Email" required>
                    <i class='bx bx-envelope'></i>
                </div>
    
                <div class="input-box">
                    <input type="password" placeholder="Password" required>
                    <i class='bx bx-lock-alt' ></i>
                </div>
    
                <!-- forgot pwd -->
                <div class="agree">
                    <label><input type="checkbox">I agree to the <a href="#">Service</a> and <a href="#">Conditions</a></label>
                </div>
    
                <!-- submit -->
                <button type="submit" class="btn">Register</button>
                
                <!-- auto login -->
                <div class="authentication-social">
                    <div class="separator">
                        <span></span>
                        <span class="paragraph">OR</span>
                        <span></span>
                    </div>
                    <!-- Google -->
                    <a href="#" class="google" rel="nofollow">
                        <i class='bx bxl-google'></i>
                        <span>Register with Google</span>
                    </a>
                    <br>
                    <!-- Facebook -->
                    <a href="#" class="fb" rel="nofollow">
                        <i class='bx bxl-facebook-circle' ></i>
                        <span>Register with Facebook</span>
                    </a>    
                </div>
    
                <!-- register link -->
                <div class="loginLink">
                    <p>Already have an account? <a href="#">Login</a></p>
                </div>
            </form>
        </div>
    </div>
        
</body>
<script src="../js/login_register.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
</div>
</html>