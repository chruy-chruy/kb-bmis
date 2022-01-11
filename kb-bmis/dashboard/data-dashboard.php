<?php


// number of population
$populationSql = "SELECT * FROM residents";
$populationQuery = $conn->query($populationSql);
$countPopulation = $populationQuery->num_rows;

// number of voters
$voterQuery = mysqli_query($conn, "SELECT COUNT(id) as voters FROM `residents` WHERE `voter_status` =  'Registered Voter'");
$countVoters = mysqli_fetch_array($voterQuery);

// total barangay clearance sales
$salesQuery = mysqli_query($conn, "SELECT SUM(price) as brgySales FROM `barangay_clearance`");
$total_sales = mysqli_fetch_array($salesQuery);

// total bs clearance sales
$bsSalesQuery = mysqli_query($conn, "SELECT SUM(price) as businessSales FROM `business_clearance`");
$total_bs_sales = mysqli_fetch_array($bsSalesQuery);




// SQL FOR AGE GROUP// 
$age_group =  mysqli_query(
    $conn,
    "SELECT COUNT(id) AS child FROM residents where TIMESTAMPDIFF(YEAR, date_of_birth, CURDATE()) <= 12"
);

$age_group_count = mysqli_fetch_array($age_group);


$age_group2 =  mysqli_query(
    $conn,
    "SELECT COUNT(id) AS adolescent FROM residents where TIMESTAMPDIFF(YEAR, date_of_birth, CURDATE()) BETWEEN 13 and 18"
);

$age_group_count2 = mysqli_fetch_array($age_group2);


$age_group3 =  mysqli_query(
    $conn,
    "SELECT COUNT(id) AS adult FROM residents where TIMESTAMPDIFF(YEAR, date_of_birth, CURDATE()) BETWEEN 19 and 59"
);

$age_group_count3 = mysqli_fetch_array($age_group3);


$age_group4 =  mysqli_query(
    $conn,
    "SELECT COUNT(id) AS senior FROM residents where TIMESTAMPDIFF(YEAR, date_of_birth, CURDATE()) >= 60"
);

$age_group_count4 = mysqli_fetch_array($age_group4);


// SQL (Barangay Population Count by Purok)//

$prk1Chart =  mysqli_query($conn, "SELECT COUNT(id) as prk1Count from residents where purok ='Purok 1' ");
$prk1_count = mysqli_fetch_array($prk1Chart);


$prk2Chart =  mysqli_query($conn, "SELECT COUNT(id) as prk2Count from residents where purok = 'Purok 2'");
$prk2_count = mysqli_fetch_array($prk2Chart);


$prk3Chart =  mysqli_query($conn, "SELECT COUNT(id) as prk3Count from residents where purok = 'Purok 3'");
$prk3_count = mysqli_fetch_array($prk3Chart);

$prk4Chart =  mysqli_query($conn, "SELECT COUNT(id) as prk4Count from residents where purok = 'Purok 4' ");
$prk4_count = mysqli_fetch_array($prk4Chart);

$prk5Chart =  mysqli_query($conn, "SELECT COUNT(id) as prk5Count from residents where purok = 'Purok 5'");
$prk5_count = mysqli_fetch_array($prk5Chart);


$prk6Chart =  mysqli_query($conn, "SELECT COUNT(id) as prk6Count from residents where purok = 'Purok 6'");
$prk6_count = mysqli_fetch_array($prk6Chart);

$prk7Chart =  mysqli_query($conn, "SELECT COUNT(id) as prk7Count from residents where purok = 'Purok 7'");
$prk7_count = mysqli_fetch_array($prk7Chart);

$prk8Chart =  mysqli_query($conn, "SELECT COUNT(id) as prk8Count from residents where purok = 'Purok 8'");
$prk8_count = mysqli_fetch_array($prk8Chart);

$prk9Chart =  mysqli_query($conn, "SELECT COUNT(id) as prk9Count from residents where purok = 'Purok 9'");
$prk9_count = mysqli_fetch_array($prk9Chart);

$prk10Chart =  mysqli_query($conn, "SELECT COUNT(id) as prk10Count from residents where purok = 'Purok 10'");
$prk10_count = mysqli_fetch_array($prk10Chart);

$prk11Chart =  mysqli_query($conn, "SELECT COUNT(id) as prk11Count from residents where purok = 'Purok 11'");
$prk11_count = mysqli_fetch_array($prk11Chart);

$prk12Chart =  mysqli_query($conn, "SELECT COUNT(id) as prk12Count from residents where purok = 'Purok 12'");
$prk12_count = mysqli_fetch_array($prk12Chart);

$prk13Chart =  mysqli_query($conn, "SELECT COUNT(id) as prk13Count from residents where purok = 'Purok 13'");
$prk13_count = mysqli_fetch_array($prk13Chart);