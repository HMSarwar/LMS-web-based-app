<?php
include('dbcon.php');
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $type = $_POST['type'];
    $year_level = $_POST['year_level'];

    $conn->query("insert into member(firstname,lastname,gender,address,contact,type,year_level, status) values('$firstname','$lastname','$gender','$address','$contact','$type','$year_level', 'Active')");
    if($conn->connect_error) {
        die("Connection problem". $conn->connect_error);
    }
    header('location:member.php');
}
?>	