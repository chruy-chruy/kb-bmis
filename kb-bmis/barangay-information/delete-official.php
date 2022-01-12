<!-- delete database -->

<?php
include "../../db_conn.php";

$resident_id = $_GET['resident_id'];
$id = $_GET['id'];
$postion = $_GET['position'];


$sql2 = "UPDATE `residents` SET `occupation`=' ' WHERE `id` = '$resident_id'";
mysqli_query($conn, $sql2);

mysqli_query($conn, "DELETE FROM `officials` WHERE `id` = '$id'");

if ($postion == 'Barangay Secretary') {
    $sql3 = "UPDATE `users` SET `name`=' ' WHERE `role` = '$postion'";
}
mysqli_query($conn, $sql3);
header("location:index.php");

// add pa ug archive
?>