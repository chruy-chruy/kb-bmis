<?php

include "../../../db_conn.php";

$id = $_GET['residents_archive_id'];

$querySelect = "select * from residents_archive where `residents_archive_id` = $id";
$resultSelect = mysqli_query($conn, $querySelect);
$fetchRecords = mysqli_fetch_array($resultSelect);

$fetchImage = $fetchRecords["img_url"];

$deletePath = "../images/" . $fetchImage;
if (unlink($deletePath)) {
    $squery = mysqli_query($conn, "DELETE FROM `residents_archive` WHERE `residents_archive_id` = $id");
    header("location: ../resident-archive.php");
}
