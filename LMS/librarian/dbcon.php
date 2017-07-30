<?php

$conn = new mysqli('localhost', 'root', '', 'eb_lms');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>