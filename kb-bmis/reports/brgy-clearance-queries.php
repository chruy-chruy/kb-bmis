<?php

// Monthly Sales for brgy clearance//
$janBrgyClearance =  mysqli_query($conn, "SELECT sum(price) AS total FROM barangay_clearance WHERE month(date_issued) = '01'");
$janBrgy = mysqli_fetch_array($janBrgyClearance);

$febBrgyClearance =  mysqli_query($conn, "SELECT sum(price) AS total2 FROM barangay_clearance WHERE month(date_issued) = '02'");
$febBrgy = mysqli_fetch_array($febBrgyClearance);

$marBrgyClearance =  mysqli_query($conn, "SELECT sum(price) AS total3 FROM barangay_clearance WHERE month(date_issued) = '03'");
$marBrgy = mysqli_fetch_array($marBrgyClearance);

$aprBrgyClearance =  mysqli_query($conn, "SELECT sum(price) AS total4 FROM barangay_clearance WHERE month(date_issued) = '04'");
$aprBrgy = mysqli_fetch_array($aprBrgyClearance);

$mayBrgyClearance =  mysqli_query($conn, "SELECT sum(price) AS total5 FROM barangay_clearance WHERE month(date_issued) = '05'");
$mayBrgy = mysqli_fetch_array($mayBrgyClearance);

$junBrgyClearance =  mysqli_query($conn, "SELECT sum(price) AS total6 FROM barangay_clearance WHERE month(date_issued) = '06'");
$junBrgy = mysqli_fetch_array($junBrgyClearance);

$julBrgyClearance =  mysqli_query($conn, "SELECT sum(price) AS total7 FROM barangay_clearance WHERE month(date_issued) = '07'");
$julBrgy = mysqli_fetch_array($julBrgyClearance);

$augBrgyClearance =  mysqli_query($conn, "SELECT sum(price) AS total8 FROM barangay_clearance WHERE month(date_issued) = '08'");
$augBrgy = mysqli_fetch_array($augBrgyClearance);

$sepBrgyClearance =  mysqli_query($conn, "SELECT sum(price) AS total9 FROM barangay_clearance WHERE month(date_issued) = '09'");
$sepBrgy = mysqli_fetch_array($sepBrgyClearance);

$octBrgyClearance =  mysqli_query($conn, "SELECT sum(price) AS total10 FROM barangay_clearance WHERE month(date_issued) = '10'");
$octBrgy = mysqli_fetch_array($octBrgyClearance);

$novBrgyClearance =  mysqli_query($conn, "SELECT sum(price) AS total11 FROM barangay_clearance WHERE month(date_issued) = '11'");
$novBrgy = mysqli_fetch_array($novBrgyClearance);

$decBrgyClearance =  mysqli_query($conn, "SELECT sum(price) AS total12 FROM barangay_clearance WHERE month(date_issued) = '12'");
$decBrgy = mysqli_fetch_array($decBrgyClearance);