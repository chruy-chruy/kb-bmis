<?php


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
header("location:index.php");

?>