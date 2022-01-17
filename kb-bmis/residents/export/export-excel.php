<?php 
// Load the database configuration file 
include "../../../db_conn.php";
 
// Filter the excel data 
function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 
 
// Excel file name for download 
$fileName = "Residents_" . date('Y-m-d') . ".xls"; 
 
// Column names 
$fields = array('ID', 'FIRST NAME', 'MIDDLE NAME','LAST NAME', 'SUFFIX','GENDER','DATE OF BIRTH', 'HOUSE NUMBER', 'STREET', 'PUROK', 'PHONE NUMBER', 'EMAIL',  'OCCUPATION'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 
 
// Fetch records from database 
$query = $conn->query("SELECT * FROM residents ORDER BY id ASC"); 
if($query->num_rows > 0){ 
    // Output each row of the data 
    while($row = $query->fetch_assoc()){ 
       
        $lineData = array($row['id'], $row['first_name'], $row['mid_name'], $row['last_name'], $row['suffix'], $row['sex'] , $row['date_of_birth'],  $row['house_number'], $row['street'], $row['purok'], $row['phone_number'], $row['email'], $row['occupation']); 
        array_walk($lineData, 'filterData'); 
        $excelData .= implode("\t", array_values($lineData)) . "\n"; 
    } 
}else{ 
    $excelData .= 'No records found...'. "\n"; 
} 
 
// Headers for download 
header("Pragma: no-cache");
header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 

// Render excel data 
echo $excelData; 
 
exit;