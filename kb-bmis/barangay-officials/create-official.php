<?php

include "../../db_conn.php";

$id = $_POST['id'];
$off_position = $_POST['off_position'];
$off_name = $_POST['off_name'];
$off_contact = $_POST['off_contact'];

if ($off_position == "Barangay Chairman") {
    $squery =  mysqli_query($conn, "SELECT COUNT(occupation) AS 'count' FROM residents where occupation = '$off_position';");
    while ($row = mysqli_fetch_array($squery)) {
        if ($row['count'] == 1) {
            header("Location: index.php?error=$off_position is already taken.");
        } else {
            $sql = "INSERT INTO `officials`
( `resident_id`,
    `off_position`,
    `off_name`
    )
 VALUES 
(
    '$id',
    '$off_position',
    '$off_name'
)";

            mysqli_query($conn, $sql);

            $sql2 = "UPDATE `residents` SET `occupation`='$off_position' WHERE `id` = '$id'";
            mysqli_query($conn, $sql2);

            if ($off_position == 'Barangay Secretary') {
                $sql3 = "UPDATE `users` SET `name`='$off_name' WHERE `role` = '$off_position'";
                mysqli_query($conn, $sql3);
            }


            header("location:index.php");
        }
    }
} else if ($off_position == "Barangay Secretary") {
    $squery =  mysqli_query($conn, "SELECT COUNT(occupation) AS 'count' FROM residents where occupation = '$off_position';");
    while ($row = mysqli_fetch_array($squery)) {
        if ($row['count'] == 1) {
            header("Location: index.php?error=$off_position is already taken.");
        } else {
            $sql = "INSERT INTO `officials`
( `resident_id`,
    `off_position`,
    `off_name`
    )
 VALUES 
(
    '$id',
    '$off_position',
    '$off_name'
)";

            mysqli_query($conn, $sql);

            $sql2 = "UPDATE `residents` SET `occupation`='$off_position' WHERE `id` = '$id'";
            mysqli_query($conn, $sql2);

            if ($off_position == 'Barangay Secretary') {
                $sql3 = "UPDATE `users` SET `name`='$off_name' WHERE `role` = '$off_position'";
                mysqli_query($conn, $sql3);
            }


            header("location:index.php");
        }
    }
} else if ($off_position == "Barangay Treasurer") {
    $squery =  mysqli_query($conn, "SELECT COUNT(occupation) AS 'count' FROM residents where occupation = '$off_position';");
    while ($row = mysqli_fetch_array($squery)) {
        if ($row['count'] == 1) {
            header("Location: index.php?error=$off_position is already taken.");
        } else {
            $sql = "INSERT INTO `officials`
( `resident_id`,
    `off_position`,
    `off_name`
    )
 VALUES 
(
    '$id',
    '$off_position',
    '$off_name'
)";

            mysqli_query($conn, $sql);

            $sql2 = "UPDATE `residents` SET `occupation`='$off_position' WHERE `id` = '$id'";
            mysqli_query($conn, $sql2);

            if ($off_position == 'Barangay Secretary') {
                $sql3 = "UPDATE `users` SET `name`='$off_name' WHERE `role` = '$off_position'";
                mysqli_query($conn, $sql3);
            }


            header("location:index.php");
        }
    }
} else {
    $sql = "INSERT INTO `officials`
( `resident_id`,
    `off_position`,
    `off_name`
    )
 VALUES 
(
    '$id',
    '$off_position',
    '$off_name'
)";

    mysqli_query($conn, $sql);

    $sql2 = "UPDATE `residents` SET `occupation`='$off_position' WHERE `id` = '$id'";
    mysqli_query($conn, $sql2);

    if ($off_position == 'Barangay Secretary') {
        $sql3 = "UPDATE `users` SET `name`='$off_name' WHERE `role` = '$off_position'";
        mysqli_query($conn, $sql3);
    }


    header("location:index.php");
}
