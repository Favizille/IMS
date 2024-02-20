<?php
    if($_POST){
        $username = $_POST['username'];
        $password = $_POST['password'];

        include('database/connection.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IMS Login - Inventory Management System</title>
        <link rel="stylesheet" href="css/login.css">
    </head>
    
    <body id="loginbody">
        <div>
            <div class="loginHeader">
                <h1>IMS</h1>
                <p> <span class="home-title">Inventory Management System</span></p>
            </div>
            <div class="loginBody">
                <form action="login.php" method="POST">
                    <div class="loginInput">
                        <label for="">Username</label>
                        <input type="text" placeholder="username" name="username" />
                    </div>
                    <div class="loginInput">
                        <label for="">Password</label>
                        <input type="password" placeholder="password" name="password"/>
                    </div>
                    <div class="loginButtonContainer">
                        <button type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>