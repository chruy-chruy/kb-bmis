<!-- delete database -->

<?php
include "../../db_conn.php";

$resident_id = $_GET['resident_id'];
$id = $_GET['id'];
$role = $_GET['role'];

$sql2 = "UPDATE `residents` SET `occupation`=' ' WHERE `id` = '$resident_id'";
mysqli_query($conn, $sql2);

// Delete function() without archive 
// mysqli_query($conn, "DELETE FROM `officials` WHERE `id` = '$id'");
mysqli_query($conn, "DELETE FROM `users` WHERE id = $id");


header("location:index.php");

// add pa ug archive
?>