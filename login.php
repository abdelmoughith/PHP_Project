<?php
include("config_connection.php");
if (isUserConnected()){
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MClub Login</title>
    <style>
        .mbody {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        header {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 1rem;
        margin: 0;
    }
    
    </style>
    <link rel="stylesheet" href="loginandcreate.css">
    </style>
</head>
<body>
<header>
        <h1>MClub</h1>
    </header>
    <div class="mbody">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Login for Form 1</h3>
                    <form method="post">
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd">Forget Password?</a>
                        </div>
                        <div class="form-group">
                            <a href="/Project/create.php" class="ForgetPwd">Create account</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Login for Form 2</h3>
                    
                </div>
            </div>
        </div>
    </div>
    </div>


</body>
</html>

<?php
if (isset($_POST["submit"])){
    connectUser($conn, $_POST["email"], $_POST["password"]);
}
?>