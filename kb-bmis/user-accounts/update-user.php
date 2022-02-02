<?php

if (isset($_POST['btn_update'])) {

    include "../../db_conn.php";
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];

    $sql = "UPDATE `users` SET
    `user_name`='$user',
    `password`='$pass' 
    where `role` = '$role'";

    mysqli_query($conn, $sql);
    header("location:view-user.php?role=$role");
}
