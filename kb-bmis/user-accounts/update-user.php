<?php

if (isset($_POST['btn_update'])) {

    include "../../db_conn.php";
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];
    $res_id = $_POST['res_id'];

    $sql = "UPDATE `users` SET
    `user_name`='$user',
    `password`='$pass' 
    where `resident_id` = '$res_id'";

    mysqli_query($conn, $sql);
    header("location:view-user.php?role=$role&res_id=$res_id&msg=update");
}
