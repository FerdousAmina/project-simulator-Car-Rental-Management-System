<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../Stylesheets/loginpage.css">
</head>
<body>
    <form onsubmit="return handleSubmit()">
    <h2>Login</h2>
    User Name: <input type="text" id="username"><br><br>
    Password: <input type="text" id="password"><br><br>
    <input type="checkbox" name="remember">Remember me <br><br>
    <input type ="submit" value="Login">

    <div id="error"></div>
    <div id="output"></div>

    <p>Not registred? <a href="registration.php">Register Here</a></p>
    </form>
    <script src="../JavaScript Files/loginvalidation.js"></script>
</body>
<html>

