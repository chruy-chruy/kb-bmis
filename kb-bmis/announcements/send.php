<?php
include "../../db_conn.php";
$recipients = $_POST['recipients'];
$message = $_POST['message'];

// residents
$residents = array();
$squery = mysqli_query($conn, "select phone_number from residents");
while ($row = mysqli_fetch_array($squery)) {

    if ($row['phone_number'] != '')
        $residents[] = $row['phone_number'];
}

// officials
$officials = array();
$squery = mysqli_query($conn, "select phone_number from residents,officials where residents.occupation = officials.off_position");
while ($row = mysqli_fetch_array($squery)) {

    if ($row['phone_number'] != '')
        $officials[] = $row['phone_number'];
}


// Senior Citizen
$senior = array();
$squery = mysqli_query($conn, "select phone_number from residents WHERE residents.senior_status = 'Senior Citizen'");
while ($row = mysqli_fetch_array($squery)) {

    if ($row['phone_number'] != '')
        $senior[] = $row['phone_number'];
}

// Person with Disability
$disability = array();
$squery = mysqli_query($conn, "select phone_number from residents WHERE residents.disability_status = 'Person with Disability'");
while ($row = mysqli_fetch_array($squery)) {

    if ($row['phone_number'] != '')
        $disability[] = $row['phone_number'];
}

// Registered Voters
$voters = array();
$squery = mysqli_query($conn, "select phone_number from residents WHERE residents.voter_status = 'Registered Voter'");
while ($row = mysqli_fetch_array($squery)) {

    if ($row['phone_number'] != '')
        $voters[] = $row['phone_number'];
}

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
if ($recipients == 'All Residents') {

    $ch = curl_init();
    $parameters = array(
        'apikey' => '96d6238852e5a8483c56a1dcd12f17f5', //API KEY 
        'number' => $contacts = implode(', ', $residents),
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

if ($recipients == 'Barangay Officials') {

    $ch = curl_init();
    $parameters = array(
        'apikey' => '96d6238852e5a8483c56a1dcd12f17f5', //API KEY 
        'number' => $contacts = implode(', ', $officials),
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

if ($recipients == 'Senior Citizens') {

    $ch = curl_init();
    $parameters = array(
        'apikey' => '96d6238852e5a8483c56a1dcd12f17f5', //API KEY 
        'number' => $contacts = implode(', ', $senior),
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