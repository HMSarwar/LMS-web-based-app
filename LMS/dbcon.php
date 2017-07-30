<?php
$conn = new mysqli('localhost', 'root', '', 'eb_lms');

if($conn->connect_error) {
    die("Connection Failed: ". $conn->connect_error);
}
?>