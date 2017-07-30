<?php
include('dbcon.php');
$id=$_GET['id'];
$conn->query("delete from users where user_id='$id'");
header('location:users.php');
?>