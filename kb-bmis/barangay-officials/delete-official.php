<!-- delete database -->

<?php
include "../../db_conn.php";

$resident_id = $_GET['resident_id'];
$id = $_GET['id'];
$postion = $_GET['position'];

$squary = mysqli_query($conn, "SELECT * FROM `officials` WHERE `id` = $id");
$fetch = mysqli_fetch_array($squary);

$sql2 = "UPDATE `residents` SET `occupation`=' ' WHERE `id` = '$resident_id'";
mysqli_query($conn, $sql2);

// Delete function() without archive 
// mysqli_query($conn, "DELETE FROM `officials` WHERE `id` = '$id'");

mysqli_query($conn, "INSERT INTO `officials_archive`
( `official_id`,
    `resident_id`,
    `off_position`,
    `off_name`,
    `off_contact`,
    `img_url`)
 VALUES 
(
    '$fetch[id]',
    '$fetch[resident_id]',
    '$fetch[off_position]',
    '$fetch[off_name]',
    '$fetch[off_contact]',
    '$fetch[img_url]'
)");


if ($postion == 'Barangay Secretary') {
    $sql3 = "UPDATE `users` SET `name`=' ' WHERE `role` = '$postion'";
}

mysqli_query($conn, $sql3);
mysqli_query($conn, "DELETE FROM `officials` WHERE id = $id");




header("location:index.php");

// add pa ug archive
?>