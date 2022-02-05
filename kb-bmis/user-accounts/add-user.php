<?php

include "../../db_conn.php";

$resident_id = $_GET['id'];

$squery =  mysqli_query($conn, "select * from residents where id = $resident_id");
while ($row = mysqli_fetch_array($squery)) {

    $user = 'clerk' . $resident_id;
    $password =  date("Y") . $resident_id;
    $name = $row['first_name'] . " " . $row['mid_name'] . " " . $row['last_name'] . " " . $row['suffix'];
    $role = 'Barangay Clerk';

    $sql = "INSERT INTO `users`(
    `resident_id`, 
    `user_name`, 
    `password`, 
    `name`, 
    `role`) 
    VALUES (
    '$resident_id',
    '$user',
    '$password',
    '$name',
    '$role')";

    mysqli_query($conn, $sql);

    $sql2 = "UPDATE `residents` SET `occupation`='$role' WHERE `id` = '$resident_id'";
    mysqli_query($conn, $sql2);

    header("location:index.php");
}
