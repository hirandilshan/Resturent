<?php
session_start();
include_once'../../backend/user/dbs.php'; 


$revId = $_POST['revId'];


$sql = "DELETE FROM review WHERE revId=$revId;";

$result = mysqli_query($connect, $sql);
echo "<script>alert('removed successful!'); window.location.href = '../../frontend/admin/manageReview.php';</script>";

if (isset($_POST['edit'])) {
    $sql = "DELETE FROM review WHERE revId=$revId;";

    $result = mysqli_query($connect, $sql);
    echo "<script>alert('removed successful!'); window.location.href = '../../frontend/admin/manageReview.php';</script>";

} elseif (isset($_POST['remove'])) {
    $sql = "DELETE FROM review WHERE revId=$revId;";

    $result = mysqli_query($connect, $sql);
    echo "<script>alert('removed successful!'); window.location.href = '../../frontend/admin/manageReview.php';</script>";
} else {

}


?>