<?php
include "../../db_conn.php";
$barangay_clearance_fee = $_POST['barangay_clearance_fee'];
$small_scale_fee = $_POST['small_scale_fee'];
$medium_scale_fee = $_POST['medium_scale_fee'];
$large_scale_fee = $_POST['large_scale_fee'];


$sql = "UPDATE `settings` SET 
    `barangay_clearance_fee`='$barangay_clearance_fee',
    `small_scale_fee`='$small_scale_fee',
    `medium_scale_fee`='$medium_scale_fee',
    `large_scale_fee`='$large_scale_fee'";


mysqli_query($conn, $sql);


header("location:./?msg= Save Changes Succesful");
