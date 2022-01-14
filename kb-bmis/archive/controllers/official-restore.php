<?php

include "../../../db_conn.php";



$id = $_GET['official_id'];
$postion = $_GET['position'];
$resident_id = $_GET['resident_id'];


// if (isset($_REQUEST['officials_archive_id'])) {
$officials_archive_id = $_GET['officials_archive_id'];


$query = mysqli_query($conn, "SELECT * FROM `officials_archive` WHERE `officials_archive_id` = '$officials_archive_id'");
$fetch = mysqli_fetch_array($query);

$off_id = $fetch['id'];
$res_id = $fetch['resident_id'];
$off_pos = $fetch['off_position'];
$off_name = $fetch['off_name'];
$off_contact = $fetch['off_contact'];
$term = $fetch['term'];
$img_url = $fetch['img_url'];
$batch = $fetch['batch_id'];

mysqli_query($conn, "INSERT INTO `officials`
 VALUES 
(
    '$off_id',
    '$res_id',
    '$off_pos',
    '$off_name',
    '$off_contact',
    '$term',
    '$img_url',
    '$batch'
)");


mysqli_query($conn, "UPDATE `residents` SET `occupation`='$off_pos' WHERE `id` = '$res_id'");


if ($off_pos == 'Barangay Secretary') {
    $sql3 = "UPDATE `users` SET `name`='$off_name' WHERE `role` = '$off_pos'";
}
mysqli_query($conn, $sql3);

mysqli_query($conn, "DELETE FROM `officials_archive` WHERE `officials_archive_id` = '$officials_archive_id'");
header('location:../official-archive.php');
// }