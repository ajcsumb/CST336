<?php

    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>OtterMart - Admin Site</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <h1>OtterMart - Admin Site</h1>
        
        <form method='POST' action='loginProcess.php'>
            <div class="form-group">
                Username: <input type="text" name="username" class="form-control"/><br />
                Password: <input type="password" name="password" class="form-control"/><br />
                
                <input type="submit" name='submitForm' class="btn btn-primary" value="Login!"/>
                
                <?php
                    if($_SESSION['incorrect']) {
                        echo "<p class='lead text-danger' id='error'>";
                        echo "<strong>Incorrect Username or Password!</strong></p>";
                    }
                ?>
            </div>
        </form>

        
        
    </body>
</html>