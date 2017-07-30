<?php
include('dbcon.php');
$id=$_GET['id'];
$conn->query("update book set status = 'Archive' where book_id='$id'");
header('location:books.php');
?>