<?php

session_start();
include_once '../../backend/user/dbs.php';  // Include your database connection file


$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT password FROM users WHERE email='$email'AND password='$password';";

$result = mysqli_query($connect, $sql);
$count =mysqli_num_rows($result);


if($count>0){
    $_SESSION['isLogedIn'] = 'true';
    $_SESSION['userName']=$_POST['email'];
    echo "<script>alert('Login successful!'); window.location.href = '../../frontend/user/index.php';</script>";
    
}
else {
    echo "<script>alert('Login failed. Please try again.'); window.location.href = '../../frontend/user/login.php';</script>";
}

$connect->close();

?>