<?php

include "../../../db_conn.php";

$id = $_GET['residents_archive_id'];

$querySelect = "select * from residents_archive where `residents_archive_id` = $id";
$ResultSelect = mysqli_query($conn, $querySelect);
$fetchRecords = mysqli_fetch_assoc($resultSelect);

$fetchImage = $fetchRecords["img_url"];

$deletePath = "../../residents/images/" . $fetchImage;
if (unlink($deletePath)) {
    $squery = mysqli_query($conn, "DELETE FROM `residents_archive` WHERE `residents_archive_id` = $id");
    header("location: ../resident-archive.php");
}
