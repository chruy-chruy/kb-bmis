<?php

include "../../db_conn.php";

$id = $_POST['id'];
$batch = $_POST['batch'];
$off_position = $_POST['off_position'];
$off_name = $_POST['off_name'];
$off_contact = $_POST['off_contact'];
$batch = $_POST['batch'];
$img_url = $_POST['img_url'];


$sql = "INSERT INTO `officials`
( `resident_id`,
    `off_position`,
    `off_name`,
    `off_contact`,
    `img_url`)
 VALUES 
(
    '$id',
    '$off_position',
    '$off_name',
    '$off_contact',
    '$img_url'
)";

mysqli_query($conn, $sql);

$sql2 = "UPDATE `residents` SET `occupation`='$off_position' WHERE `id` = '$id'";
mysqli_query($conn, $sql2);

if ($off_position == 'Barangay Secretary') {
    $sql3 = "UPDATE `users` SET `name`='$off_name' WHERE `role` = '$off_position'";
}
mysqli_query($conn, $sql3);

header("location:index.php");
