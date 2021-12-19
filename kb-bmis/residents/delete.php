<!-- delete database -->

<?php
include "../../db_conn.php";

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM `residents` WHERE id = $id");
header("location:index.php");

// add pa ug archive
?>
