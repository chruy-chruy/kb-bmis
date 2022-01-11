<?php

$decBrgyClearance = mysqli_query($conn, "SELECT SUM(price) as total12 ,MONTHNAME(date_issued) as 'Month Name'
FROM barangay_clearance WHERE YEAR(date_issued) = YEAR(CURDATE()) AND MONTHNAME(date_issued) ='December'
GROUP BY YEAR(date_issued),MONTH(date_issued);");
$decBrgy = mysqli_fetch_array($decBrgyClearance);