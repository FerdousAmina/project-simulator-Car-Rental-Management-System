<?php
session_start();

if (isset($_SESSION["username"])){
    header("Location:../View files/Manager dashboard.php");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    $pass =$_POST["password"];

 if ($user == "tahabi" && $pass="12345")
    {
        $_SESSION["username"] =$user;
        $_SESSION["role"]="Manager";
        header("Location:../View files/Manager dashboard.php");
        exit();
    }
 else{
    $error = "Invalid Username or Password";
    header("Location:../View files/login.php?error=" .urlencode($error));
    exit();

 }

}
?>