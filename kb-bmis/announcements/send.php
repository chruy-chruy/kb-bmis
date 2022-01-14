
<?php
include "../../db_conn.php";
$receipients = $_POST['receipients'];
$message = $_POST['message'];


//  $variabele = array();
// $squery = mysqli_query($conn, "select phone_number from residents");
// while ($row = mysqli_fetch_array($squery)) {

//     if($row['phone_number'] != '')
//     $variabele[] = $row['phone_number'];
// }
//  
//  <!-- phone numbers separated by "," -->
//  <?php $contacts = implode(', ', $variabele); 




$sql = "INSERT INTO `announcements`(
`message`,
`receipients`)
VALUES (
    '$message',
 '$receipients'
)";
mysqli_query($conn, $sql);
header("location:index.php");


?>



