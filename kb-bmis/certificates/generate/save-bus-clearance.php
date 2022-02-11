<?php
include "../../../db_conn.php";

session_start();
$user_log = $_SESSION['role'];


$name = $_POST['name'];
$bus_location = $_POST['bus_location'];
$bus_name = $_POST['bus_name'];
$date_issued = $_POST['date_issued'];
$clearance_number = $_POST['clearance_number'];
$bus_type = $_POST['bus_type'];
$date = date("F j, Y", strtotime($date_issued));
$price = $_POST['price'];

$sql = "INSERT INTO business_clearance
(
  `name`, 
  `location`, 
  `bus_name`, 
  `date_issued`, 
  `clearance_number`, 
  `bus_type`, 
  `price`, 
  `user_log`) 
VALUES 
(
  '$name',
  '$bus_location',
  '$bus_name',
  '$date_issued',
  '$clearance_number',
  '$bus_type',
  '$price',
  '$user_log'
)";

mysqli_query($conn, $sql);
header("location:../index.php");
