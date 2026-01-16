<?php
session_start();
include('../Database/registrationinfo.php');

if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    $error = "";

    if(mysqli_num_rows($result)== 1){
        $row = mysqli_fetch_assoc($result);

        if(password_verify($password, $row['password'])){
            $_SESSION['username'] = $row['username'];
            header("Location: ../View Files/customerdashboard.php");
            exit;
        }
        else{
            $error = "Incorrect Password!";
        }
    }
    else{
            $error = "User Not Found";
    }
    if(!empty($error)){
        $_SESSION['login_error'] = $error;
        header("Location: ../View Files/login.php");
        exit;
    }  
}
?>