<?php

// BRGY CLEARANCE (YEARLY)
$year2021Brgy = mysqli_query($conn, "SELECT SUM(price) as brgyAmount2021,YEAR(date_issued) as Year
FROM barangay_clearance WHERE Year(date_issued) = '2021'
GROUP BY YEAR(date_issued);");
$year2021BrgySales = mysqli_fetch_array($year2021Brgy);

$year2022Brgy = mysqli_query($conn, "SELECT SUM(price) as brgyAmount2022,YEAR(date_issued) as Year
FROM barangay_clearance WHERE Year(date_issued) = '2022'
GROUP BY YEAR(date_issued);");
$year2022BrgySales = mysqli_fetch_array($year2022Brgy);

$year2023Brgy = mysqli_query($conn, "SELECT SUM(price) as brgyAmount2023,YEAR(date_issued) as Year
FROM barangay_clearance WHERE Year(date_issued) = '2023'
GROUP BY YEAR(date_issued);");
$year2023BrgySales = mysqli_fetch_array($year2023Brgy);

$year2024Brgy = mysqli_query($conn, "SELECT SUM(price) as brgyAmount2024,YEAR(date_issued) as Year
FROM barangay_clearance WHERE Year(date_issued) = '2024'
GROUP BY YEAR(date_issued);");
$year2024BrgySales = mysqli_fetch_array($year2024Brgy);

// BS CLEARANCE (YEARLY)

$year2021Bs = mysqli_query($conn, "SELECT SUM(price) as bsAmount2021,YEAR(date_issued) as Year
FROM business_clearance WHERE Year(date_issued) = '2021'
GROUP BY YEAR(date_issued)");
$year2021BsSales = mysqli_fetch_array($year2021Bs);

$year2022Bs = mysqli_query($conn, "SELECT SUM(price) as bsAmount2022,YEAR(date_issued) as Year
FROM business_clearance WHERE Year(date_issued) = '2022'
GROUP BY YEAR(date_issued);");
$year2022BsSales = mysqli_fetch_array($year2022Bs);

$year2023Bs = mysqli_query($conn, "SELECT SUM(price) as bsAmount2023,YEAR(date_issued) as Year
FROM business_clearance WHERE Year(date_issued) = '2023'
GROUP BY YEAR(date_issued);");
$year2023BsSales = mysqli_fetch_array($year2023Bs);

$year2024Bs = mysqli_query($conn, "SELECT SUM(price) as bsAmount2024,YEAR(date_issued) as Year
FROM business_clearance WHERE Year(date_issued) = '2024'
GROUP BY YEAR(date_issued);");
$year2024BsSales = mysqli_fetch_array($year2024Bs);