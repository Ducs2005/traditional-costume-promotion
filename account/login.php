<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
</head>
<body>
    <!-- wrapper -->
    <div class="wrapper">
        <form action="login.html">
            <img src="../img/image.png" alt="logo">
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

            <!-- connect -->
            <a href="#"><i class='bx bxl-facebook-square' style='color:#0095ff'  ></i></span></a>
            <a href="#"><i class='bx bxl-instagram-alt' style='color:#ee1266'  ></i></a>
            <a href="#"><i class='bx bxl-tiktok'></i></a>
            <a href="#"><i class='bx bxl-youtube' style='color:#fd0a15'  ></i></a>
        </form>
    </div>
</body>
</html>