<?php


// Monthly Sales for brgy clearance//
$janBrgyClearance = mysqli_query($conn, "SELECT SUM(price) as total ,MONTHNAME(date_issued) as 'Month Name'
FROM barangay_clearance WHERE YEAR(date_issued) = YEAR(CURDATE()) AND MONTHNAME(date_issued) ='January'
GROUP BY YEAR(date_issued),MONTH(date_issued);");
$janBrgy = mysqli_fetch_array($janBrgyClearance);


$febBrgyClearance = mysqli_query($conn, "SELECT SUM(price) as total2 ,MONTHNAME(date_issued) as 'Month Name'
FROM barangay_clearance WHERE YEAR(date_issued) = YEAR(CURDATE()) AND MONTHNAME(date_issued) ='February'
GROUP BY YEAR(date_issued),MONTH(date_issued);");
$febBrgy = mysqli_fetch_array($febBrgyClearance);

$marBrgyClearance = mysqli_query($conn, "SELECT SUM(price) as total3 ,MONTHNAME(date_issued) as 'Month Name'
FROM barangay_clearance WHERE YEAR(date_issued) = YEAR(CURDATE()) AND MONTHNAME(date_issued) ='March'
GROUP BY YEAR(date_issued),MONTH(date_issued);");
$marBrgy = mysqli_fetch_array($marBrgyClearance);

$aprBrgyClearance = mysqli_query($conn, "SELECT SUM(price) as total4 ,MONTHNAME(date_issued) as 'Month Name'
FROM barangay_clearance WHERE YEAR(date_issued) = YEAR(CURDATE()) AND MONTHNAME(date_issued) ='April'
GROUP BY YEAR(date_issued),MONTH(date_issued);");
$aprBrgy = mysqli_fetch_array($aprBrgyClearance);

$mayBrgyClearance = mysqli_query($conn, "SELECT SUM(price) as total5 ,MONTHNAME(date_issued) as 'Month Name'
FROM barangay_clearance WHERE YEAR(date_issued) = YEAR(CURDATE()) AND MONTHNAME(date_issued) ='May'
GROUP BY YEAR(date_issued),MONTH(date_issued);");
$mayBrgy = mysqli_fetch_array($mayBrgyClearance);

$junBrgyClearance = mysqli_query($conn, "SELECT SUM(price) as total6 ,MONTHNAME(date_issued) as 'Month Name'
FROM barangay_clearance WHERE YEAR(date_issued) = YEAR(CURDATE()) AND MONTHNAME(date_issued) ='June'
GROUP BY YEAR(date_issued),MONTH(date_issued);");
$junBrgy = mysqli_fetch_array($junBrgyClearance);

$julBrgyClearance = mysqli_query($conn, "SELECT SUM(price) as total7 ,MONTHNAME(date_issued) as 'Month Name'
FROM barangay_clearance WHERE YEAR(date_issued) = YEAR(CURDATE()) AND MONTHNAME(date_issued) ='July'
GROUP BY YEAR(date_issued),MONTH(date_issued);");
$julBrgy = mysqli_fetch_array($julBrgyClearance);

$augBrgyClearance = mysqli_query($conn, "SELECT SUM(price) as total8 ,MONTHNAME(date_issued) as 'Month Name'
FROM barangay_clearance WHERE YEAR(date_issued) = YEAR(CURDATE()) AND MONTHNAME(date_issued) ='August'
GROUP BY YEAR(date_issued),MONTH(date_issued);");
$augBrgy = mysqli_fetch_array($augBrgyClearance);

$sepBrgyClearance = mysqli_query($conn, "SELECT SUM(price) as total9 ,MONTHNAME(date_issued) as 'Month Name'
FROM barangay_clearance WHERE YEAR(date_issued) = YEAR(CURDATE()) AND MONTHNAME(date_issued) ='September'
GROUP BY YEAR(date_issued),MONTH(date_issued);");
$sepBrgy = mysqli_fetch_array($sepBrgyClearance);

$octBrgyClearance = mysqli_query($conn, "SELECT SUM(price) as total10 ,MONTHNAME(date_issued) as 'Month Name'
FROM barangay_clearance WHERE YEAR(date_issued) = YEAR(CURDATE()) AND MONTHNAME(date_issued) ='October'
GROUP BY YEAR(date_issued),MONTH(date_issued);");
$octBrgy = mysqli_fetch_array($octBrgyClearance);

$novBrgyClearance = mysqli_query($conn, "SELECT SUM(price) as total11 ,MONTHNAME(date_issued) as 'Month Name'
FROM barangay_clearance WHERE YEAR(date_issued) = YEAR(CURDATE()) AND MONTHNAME(date_issued) ='November'
GROUP BY YEAR(date_issued),MONTH(date_issued);");
$novBrgy = mysqli_fetch_array($novBrgyClearance);

$decBrgyClearance = mysqli_query($conn, "SELECT SUM(price) as total12 ,MONTHNAME(date_issued) as 'Month Name'
FROM barangay_clearance WHERE YEAR(date_issued) = YEAR(CURDATE()) AND MONTHNAME(date_issued) ='December'
GROUP BY YEAR(date_issued),MONTH(date_issued);");
$decBrgy = mysqli_fetch_array($decBrgyClearance);







// Monthly Sales for bs clearance//
$janBsClearance = mysqli_query($conn, "SELECT SUM(price) as bstotal ,MONTHNAME(date_issued) as 'Month Name'
FROM business_clearance WHERE YEAR(date_issued) = YEAR(CURDATE()) AND MONTHNAME(date_issued) ='January'
GROUP BY YEAR(date_issued),MONTH(date_issued);");
$janBs = mysqli_fetch_array($janBsClearance);


$febBsClearance = mysqli_query($conn, "SELECT SUM(price) as bstotal2 ,MONTHNAME(date_issued) as 'Month Name'
FROM business_clearance WHERE YEAR(date_issued) = YEAR(CURDATE()) AND MONTHNAME(date_issued) ='February'
GROUP BY YEAR(date_issued),MONTH(date_issued);");
$febBs = mysqli_fetch_array($febBsClearance);

$marBsClearance = mysqli_query($conn, "SELECT SUM(price) as bstotal3 ,MONTHNAME(date_issued) as 'Month Name'
FROM business_clearance WHERE YEAR(date_issued) = YEAR(CURDATE()) AND MONTHNAME(date_issued) ='March'
GROUP BY YEAR(date_issued),MONTH(date_issued);");
$marBs = mysqli_fetch_array($marBsClearance);

$aprBsClearance = mysqli_query($conn, "SELECT SUM(price) as bstotal4 ,MONTHNAME(date_issued) as 'Month Name'
FROM business_clearance WHERE YEAR(date_issued) = YEAR(CURDATE()) AND MONTHNAME(date_issued) ='April'
GROUP BY YEAR(date_issued),MONTH(date_issued);");
$aprBs = mysqli_fetch_array($aprBsClearance);

$mayBsClearance = mysqli_query($conn, "SELECT SUM(price) as bstotal5 ,MONTHNAME(date_issued) as 'Month Name'
FROM business_clearance WHERE YEAR(date_issued) = YEAR(CURDATE()) AND MONTHNAME(date_issued) ='May'
GROUP BY YEAR(date_issued),MONTH(date_issued);");
$mayBs = mysqli_fetch_array($mayBsClearance);

$junBsClearance = mysqli_query($conn, "SELECT SUM(price) as bstotal6 ,MONTHNAME(date_issued) as 'Month Name'
FROM business_clearance WHERE YEAR(date_issued) = YEAR(CURDATE()) AND MONTHNAME(date_issued) ='June'
GROUP BY YEAR(date_issued),MONTH(date_issued);");
$junBs = mysqli_fetch_array($junBsClearance);

$julBsClearance = mysqli_query($conn, "SELECT SUM(price) as bstotal7 ,MONTHNAME(date_issued) as 'Month Name'
FROM business_clearance WHERE YEAR(date_issued) = YEAR(CURDATE()) AND MONTHNAME(date_issued) ='July'
GROUP BY YEAR(date_issued),MONTH(date_issued);");
$julBs = mysqli_fetch_array($julBsClearance);

$augBsClearance = mysqli_query($conn, "SELECT SUM(price) as bstotal8 ,MONTHNAME(date_issued) as 'Month Name'
FROM business_clearance WHERE YEAR(date_issued) = YEAR(CURDATE()) AND MONTHNAME(date_issued) ='August'
GROUP BY YEAR(date_issued),MONTH(date_issued);");
$augBs = mysqli_fetch_array($augBsClearance);

$sepBsClearance = mysqli_query($conn, "SELECT SUM(price) as bstotal9 ,MONTHNAME(date_issued) as 'Month Name'
FROM business_clearance WHERE YEAR(date_issued) = YEAR(CURDATE()) AND MONTHNAME(date_issued) ='September'
GROUP BY YEAR(date_issued),MONTH(date_issued);");
$sepBs = mysqli_fetch_array($sepBsClearance);

$octBsClearance = mysqli_query($conn, "SELECT SUM(price) as bstotal10 ,MONTHNAME(date_issued) as 'Month Name'
FROM business_clearance WHERE YEAR(date_issued) = YEAR(CURDATE()) AND MONTHNAME(date_issued) ='October'
GROUP BY YEAR(date_issued),MONTH(date_issued);");
$octBs = mysqli_fetch_array($octBsClearance);

$novBsClearance = mysqli_query($conn, "SELECT SUM(price) as bstotal11 ,MONTHNAME(date_issued) as 'Month Name'
FROM business_clearance WHERE YEAR(date_issued) = YEAR(CURDATE()) AND MONTHNAME(date_issued) ='November'
GROUP BY YEAR(date_issued),MONTH(date_issued);");
$novBs = mysqli_fetch_array($novBsClearance);

$decBsClearance = mysqli_query($conn, "SELECT SUM(price) as bstotal12 ,MONTHNAME(date_issued) as 'Month Name'
FROM business_clearance WHERE YEAR(date_issued) = YEAR(CURDATE()) AND MONTHNAME(date_issued) ='December'
GROUP BY YEAR(date_issued),MONTH(date_issued);");
$decBs = mysqli_fetch_array($decBsClearance);