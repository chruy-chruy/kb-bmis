<?php
include "../../../db_conn.php";

$id = $_GET['residents_archive_id'];
$squery = mysqli_query($conn, "TRUNCATE TABLE residents_archive");

header("location:../resident-archive.php");