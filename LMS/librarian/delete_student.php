<?php
include('dbcon.php');
$id=$_GET['id'];
$conn->query("delete from member where member_id='$id'");
header('location:member.php');
?>