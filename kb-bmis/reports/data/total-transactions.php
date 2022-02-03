<?php

// total barangay clearance per week
$totalWeekBrgyClrQuery = mysqli_query($conn, "SELECT COUNT(id) as weeklyBrgyTotal FROM `barangay_clearance` WHERE date(date_issued) > DATE_SUB(NOW(), INTERVAL 1 WEEK)");
$total_WeekBrgyClr = mysqli_fetch_array($totalWeekBrgyClrQuery);

// total business clearance per week
$totalWeekBusinessClrQuery = mysqli_query($conn, "SELECT COUNT(id) as weeklyBusTotal FROM `business_clearance` WHERE date(date_issued) > DATE_SUB(NOW(), INTERVAL 1 WEEK)");
$total_WeekBusinessClr = mysqli_fetch_array($totalWeekBusinessClrQuery);




// total barangay clearance per month
$totalMonthBrgyClrQuery = mysqli_query($conn, "SELECT COUNT(ID) as monthlyBrgyTotal FROM `barangay_clearance` WHERE MONTHNAME(date_issued) = MONTHNAME(CURRENT_DATE)");
$total_MonthBrgyClr = mysqli_fetch_array($totalMonthBrgyClrQuery);

// total business clearance per month
$totalMonthBusinessClrQuery = mysqli_query($conn, "SELECT COUNT(ID) as monthlyBusTotal FROM `business_clearance` WHERE MONTHNAME(date_issued) = MONTHNAME(CURRENT_DATE)");
$total_MonthBusinessClr  = mysqli_fetch_array($totalMonthBusinessClrQuery);




// total barangay clearance per year
$totalYearBrgyClrQuery = mysqli_query($conn, "SELECT COUNT(id) as yearlyBrgyTotal FROM `barangay_clearance` WHERE YEAR(date_issued) = YEAR(CURRENT_DATE)");
$total_YearBrgyClr  = mysqli_fetch_array($totalYearBrgyClrQuery);

// total business clearance per year
$totalYearBusinessClrQuery = mysqli_query($conn, "SELECT COUNT(id) as yearlyBusTotal FROM `business_clearance` WHERE YEAR(date_issued) = YEAR(CURRENT_DATE)");
$total_YearBusinessClr = mysqli_fetch_array($totalYearBusinessClrQuery);
