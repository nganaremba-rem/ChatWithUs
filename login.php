<?php
    if(isset($_COOKIE['Username'])){
        header('Location:homepage.php');
    }
    session_start();
    include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="form.css">
    <script defer src="validate.js"></script>
</head>

<body>
    <div class="container">
        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0099ff" fill-opacity="1"
                d="M0,96L48,117.3C96,139,192,181,288,213.3C384,245,480,267,576,234.7C672,203,768,117,864,101.3C960,85,1056,139,1152,165.3C1248,192,1344,192,1392,192L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
        <div class="card-wrapper">
            <div class="card">
                <div class="card-header">Login</div>
                <div class="msg">
                    <?php
            
                        if(isset($_SESSION['msg'])){
                            $msg = $_SESSION['msg'];
                            echo $msg;
                            session_destroy();
                        }
                    ?>
                </div>
                <div class="card-body">
                    <form action="login_db.php" method="POST" class="form-group">
                        <div class="input-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username">
                        </div>
                        <div class="input-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password">
                        </div>
                        <input type="submit" value="Login" name="loginbtn">
                    </form>
                    <div class="others"><a href="signup.php">Signup</a></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>