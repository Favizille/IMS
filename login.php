<?php

    session_start();
    
    $error_message = '';

    if($_POST){
        include('database/connection.php');
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $query = 'SELECT * FROM users WHERE users.email="'.$username .'"AND users.password="'.$password.'"';
        $stmt = $conn->prepare($query);
        $stmt->execute();

        if($stmt->rowCount() > 0){

        }
        else $error_message = 'Please make sure the password and email are correct.';
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
        <?php if(!empty($error_message)){ ?>
            <div id="errorMessage" style="background: #fff; text-align: center; color: red; font-size: 20px; padding: 11px;">
                <p> <strong>Error:</strong><p></p>  <?= $error_message ?></p>
            </div>
        <?php } ?>
        <div class="container">
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