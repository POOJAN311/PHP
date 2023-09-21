<?php

$server = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($server, $username, $password);
if (!$conn) {
    die("connection to this database failed due to " . mysqli_connect_error());
}
// echo "Success connecting to DB";
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$desc = $_POST['desc'];

$sql = "INSERT INTO `travel`.`trip` (`name`, `age`, `gender`, `phone`, `email`, `date`, `other`) VALUES ('$name', '$age', '$gender', '$phone', '$email', current_timestamp(), '$desc');";
echo $sql;

if ($conn->query($sql) == true) {
    echo "successfully inserted";
} else {
    echo "ERROR . $sql <br> $conn->error";
}
$conn->close();
