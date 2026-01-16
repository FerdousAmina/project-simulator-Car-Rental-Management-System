<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="../Stylesheets/registration.css">
</head>

<body>
    <form action="../Controller logic/regcontroller.php" method="POST" onsubmit= "return handleSubmit()">
    <h2>Register</h2>
    Full Name: <input type="text" name="fullname" id="fullname"><br><br>
    User Name: <input type="text" name="username" id="username"><br><br>
    Email Address: <input type="text" name="email" id="email"><br><br>
    Password: <input type="text" name="password" id="password"><br><br>
    Confirm Password: <input type="text" id="confirm_password"><br><br>
    <input type="submit" name="register" value="Register"><br>

    <div id="error"></div>
    <div id="output"></div>

    <p>Already have an account? <a href="login.php">Log In</a></p>
</form>
<script src="../JavaScript Files/regvalidation.js"></script>
</body>
</html>