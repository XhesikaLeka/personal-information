<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank";
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
else{
    echo "connected";
}

if (isset($_POST["name"])) {
    $name = $_POST["name"];
}
if (isset($_POST["surname"])) {
    $surname = $_POST["surname"];
}
if (isset($_POST["nat_id"])) {
    $national_id = $_POST["nat_id"];
}

if (isset($_POST["gjinia"])) {
    $sex = $_POST["gjinia"];
}
if (isset($_POST["nation"])) {
    $nation = $_POST["nation"];
}
if (isset($_POST["city"])) {
    $city = $_POST["city"];
}
if (isset($_POST["job"])) {
    $job_position = $_POST["job"];
}

if (isset($_POST["civil"])) {
    $civil_status = $_POST["civil"];
}
if (isset($_POST["dep"])) {
    $dep = $_POST["dep"];
}
if (isset($_POST["sname"])) {
$sname = $_POST["sname"];
}



$sql = "INSERT INTO bank (name, surname, departament, direct_supervisor_id, national_id, sex, city, nation, job_position, civil_status)VALUES ('$name', '$surname', '$dep', '$sname', '$national_id', '$sex','$city','$nation', '$job_position', '$civil_status')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>