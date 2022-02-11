<?php
include "../../../db_conn.php";

session_start();
$user_log = $_SESSION['role'];

$res_id = $_POST['res_id'];
$name = $_POST['name'];
$address = $_POST['address'];
$purpose = $_POST['purpose'];
$date_issued = $_POST['date_issued'];
$cedula_number = $_POST['cedula_number'];
$cedula_issued_at = $_POST['cedula_issued_at'];
$cedula_date = $_POST['cedula_date'];
$sex = $_POST['sex'];
$civil_status = $_POST['civil_status'];
$new_date_issued_day = date("jS", strtotime($date_issued));
$new_date_issued_month_year = date("F Y", strtotime($date_issued));
$new_cedula_date = date("F j, Y", strtotime($cedula_date));
$price = $_POST['price'];
$pic = $_POST['pic'];

$sql = "INSERT INTO `barangay_clearance`
( 
    `resident_id`, 
    `name`, 
    `address`, 
    `purpose`, 
    `date_issued`, 
    `cedula_number`, 
    `cedula_place`, 
    `cedula_date`, 
    `img_url`, 
    `price`, 
    `user_log`) 
VALUES 
(
    '$res_id',
    '$name',
    '$address',
    '$purpose',
    '$date_issued',
    '$cedula_number',
    '$cedula_issued_at',
    '$cedula_date',
    '$pic',
    '$price',
    '$user_log' 
)
";
mysqli_query($conn, $sql);
header("location:../index.php");
