<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../Stylesheets/loginpage.css">
</head>
<body>
    <form action ="../Controller logic/LoginController.php" method="POST" onsubmit="return handleSubmit()">
    <h2>Login</h2>
    User Name: <input type="text" name="username" id="username"><br><br>
    Password: <input type="text" name="password" id="password"><br><br>
    <input type ="submit" value="Login">

    <div id="error" style="color:red;">
    
    <php if (isset($_GET['error'])) echo htmlspecialchars($_GET['error']); ?>
    
    </div>

    <div id="output"></div>

    <p>Not registred? <a href="registration.php">Register Here</a></p>
    </form>
    <script src="../JavaScript Files/loginvalidation.js"></script>
</body>
<html>

