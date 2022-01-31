<?php
include "../../db_conn.php";
$recipients = $_POST['recipients'];
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
    `recipients`)
    VALUES (
        '$message',
     '$recipients'
    )";
mysqli_query($conn, $sql);
header("location:index.php");


// SEMAPHORE SMS API

if (isset($_POST['btn_save'])) {

    $ch = curl_init();
    $parameters = array(
        'apikey' => '96d6238852e5a8483c56a1dcd12f17f5', //API KEY 
        'number' => $_POST['recipients'],
        'message' => $_POST['message'],
        'sendername' => 'SEMAPHORE'
    );
    curl_setopt($ch, CURLOPT_URL, 'https://api.semaphore.co/api/v4/messages');
    curl_setopt($ch, CURLOPT_POST, 1);

    //Send the parameters set above with the request
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($parameters));

    // Receive response from server
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);

    //Show the server response
    if (!$result) {
?>
        <script>
            alert('Message not sent!')
        </script>
    <?php
    } else {
        // echo $result;

    ?>
        <script>
            alert('Message sent!')
        </script>
<?php
    }
}
?>