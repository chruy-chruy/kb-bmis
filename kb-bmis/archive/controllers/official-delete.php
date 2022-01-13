<?php

include "../../../db_conn.php";

$id = $_GET['officials_archive_id'];

$squery = mysqli_query($conn, "DELETE FROM `officials_archive` WHERE `officials_archive_id` = $id");

header("location:../official-archive.php");