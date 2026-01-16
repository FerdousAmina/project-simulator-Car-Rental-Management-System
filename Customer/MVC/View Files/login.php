<?php
session_start();
$error = "";
if(!empty($_SESSION['login_error'])){
    $error = $_SESSION['login_error'];
    unset($_SESSION['login_error']);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../Stylesheets/loginpage.css">
</head>
<body>
    <form action="../Controller logic/logincontroller.php" method="POST" onsubmit="return handleSubmit()">
    <h2>Login</h2>
    User Name: <input type="text" name="username" id="username"><br><br>
    Password: <input type="text" name="password" id="password"><br><br>
    <input type ="submit" name="login" value="Login">

    <div id="error"></div>
    <?php if(!empty($error)): ?>
        <div id="output">
            <?php echo $error; ?>
    </div>
    <?php endif; ?>

    <p>Not registred? <a href="registration.php">Register Here</a></p>
    </form>
    <script src="../JavaScript Files/loginvalidation.js"></script>
</body>
<html>

