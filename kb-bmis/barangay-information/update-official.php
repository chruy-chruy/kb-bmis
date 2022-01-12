<?php
include "../../db_conn.php";
$off_position = $_POST['off_position'];
$id = $_POST['id'];

$sql = "UPDATE `residents`,officials SET residents.occupation = '$off_position' , officials.off_position='$off_position' WHERE residents.id = '$id ' AND officials.resident_id='$id ';
";


mysqli_query($conn, $sql);


header("location:view-official.php?resident_id=$id");
