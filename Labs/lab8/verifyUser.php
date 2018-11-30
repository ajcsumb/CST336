<?php
session_start();

$message = "";

include 'connect.php';
$connect = getDBConnection();

//Checking credentials in database
$sql = "SELECT * FROM users WHERE username = :username AND password = :password";
$stmt = $connect->prepare($sql);
$data = array(":username" => $_POST['username'], ":password" => sha1($_POST['password']));
$stmt->execute($data);
$user = $stmt->fetch(PDO::FETCH_ASSOC);


//redirecting user to quiz if credentials are valid
if(isset($user['username'])){
    $_SESSION['username'] = $user['username'];
    header("Location: index.php");
} else {
    $message = "The values you entered were incorrect. <a id='retryLink' href='login.php'><br />Retry</a>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Invalid Login</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1 id="invalidCreds">Invalid Credentials</h1>
        <?= $message; ?>
    </body>
</html>