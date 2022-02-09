<?php
include "../../db_conn.php";
$off_position = $_POST['off_position'];
$id = $_POST['id'];

//check if barangay chairman is already taken
if ($off_position == "Barangay Chairman") {
    $squery =  mysqli_query($conn, "SELECT COUNT(occupation) AS 'count' FROM residents where occupation = '$off_position';");
    while ($row = mysqli_fetch_array($squery)) {
        if ($row['count'] == 1) {
            header("Location: index.php?error=$off_position is already taken.");
        } else {
            $sql = "UPDATE `residents`,officials SET residents.occupation = '$off_position' , officials.off_position='$off_position' WHERE residents.id = '$id ' AND officials.resident_id='$id ';
            ";

            mysqli_query($conn, $sql);

            $sql2 = "UPDATE `residents` SET `occupation`='$off_position' WHERE `id` = '$id'";
            mysqli_query($conn, $sql2);

            if ($off_position == 'Barangay Chairman') {
                $sql3 = "UPDATE `users` SET `name`='$off_name',`resident_id`='$id' WHERE `role` = '$off_position'";
                mysqli_query($conn, $sql3);
            }


            header("location:index.php");
        }
    }
} //check if barangay Secretary is already taken
else if ($off_position == "Barangay Secretary") {
    $squery =  mysqli_query($conn, "SELECT COUNT(occupation) AS 'count' FROM residents where occupation = '$off_position';");
    while ($row = mysqli_fetch_array($squery)) {
        if ($row['count'] == 1) {
            header("Location: index.php?error=$off_position is already taken.");
        } else {
            $sql =  "UPDATE `residents`,officials SET residents.occupation = '$off_position' , officials.off_position='$off_position' WHERE residents.id = '$id ' AND officials.resident_id='$id ';
            ";

            mysqli_query($conn, $sql);

            $sql2 = "UPDATE `residents` SET `occupation`='$off_position' WHERE `id` = '$id'";
            mysqli_query($conn, $sql2);

            if ($off_position == 'Barangay Secretary') {
                $sql3 = "UPDATE `users` SET `name`='$off_name',`resident_id`='$id' WHERE `role` = '$off_position'";
                mysqli_query($conn, $sql3);
            }


            header("location:index.php");
        }
    }
} //check if barangay Treasyrer is already taken
else if ($off_position == "Barangay Treasurer") {
    $squery =  mysqli_query($conn, "SELECT COUNT(occupation) AS 'count' FROM residents where occupation = '$off_position';");
    while ($row = mysqli_fetch_array($squery)) {
        if ($row['count'] == 1) {
            header("Location: index.php?error=$off_position is already taken.");
        } else {
            $sql = "UPDATE `residents`,officials SET residents.occupation = '$off_position' , officials.off_position='$off_position' WHERE residents.id = '$id ' AND officials.resident_id='$id ';
            ";

            mysqli_query($conn, $sql);

            $sql2 = "UPDATE `residents` SET `occupation`='$off_position' WHERE `id` = '$id'";
            mysqli_query($conn, $sql2);


            header("location:index.php");
        }
    }
} else {
    $sql =  "UPDATE `residents`,officials SET residents.occupation = '$off_position' , officials.off_position='$off_position' WHERE residents.id = '$id ' AND officials.resident_id='$id ';
    ";

    mysqli_query($conn, $sql);

    $sql2 = "UPDATE `residents` SET `occupation`='$off_position' WHERE `id` = '$id'";
    mysqli_query($conn, $sql2);

    header("location:index.php");
}
