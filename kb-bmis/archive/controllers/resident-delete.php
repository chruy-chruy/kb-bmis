<?php

include "../../../db_conn.php";

$id = $_GET['residents_archive_id'];
$squery = mysqli_query($conn, "DELETE FROM `residents_archive` WHERE `residents_archive_id` = $id");

header("location:resident-archive.php");