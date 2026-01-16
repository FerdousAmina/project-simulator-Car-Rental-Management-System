<?php
include('../Database/registrationinfo.php');

$success = $error = "";

if (isset($_POST['register'])){
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check = "SELECT * FROM users WHERE username='$username' OR email='$email'";
    $result = mysqli_query($conn, $check);

    if (mysqli_num_rows($result) > 0) {
        $error = "Username or email already exists!";
    } 
    else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (fullname, username, email, password)
                VALUES ('$fullname', '$username', '$email', '$hashed_password')";
    

            if (mysqli_query($conn, $sql)) {
                $success = "Registered successfully!";
            } else {
                $error = mysqli_error($conn);
            }
    }
}
?>
