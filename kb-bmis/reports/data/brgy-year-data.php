<?php
header('Content-Type: application/json');

$sname = "localhost";
$unmae = "root";
$password = "";
$db_name = "northdb";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}


//query to get data from the table
$query = sprintf("SELECT SUM(price) as brgyyearsales,YEAR(date_issued) as brgyyear
FROM barangay_clearance
GROUP BY YEAR(date_issued) ORDER BY (date_issued)");

//execute query
$result = $conn->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
    $data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$conn->close();

//now print the data
print json_encode($data);