<?php
include "../../../db_conn.php";
if (isset($_POST['btn_save'])) {

  $name = $_POST['name'];
  $bus_location = $_POST['bus_location'];
  $bus_name = $_POST['bus_name'];
  $date_issued = $_POST['date_issued'];
  $clearance_number = $_POST['clearance_number'];
  $bus_type = $_POST['bus_type'];
  $date = date("F j, Y", strtotime($date_issued));
  $price = $_POST['price'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../../../assets/img/north-logo.ico" type="image/x-icon" />

  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="../../../assets/css/certificates.css" />

  <!--=============== MAIN JS ===============-->
  <script src="../../../assets/js/main.js" defer></script>

  <title>Barangay Management System</title>
</head>
<form id="" action="save-bus-clearance.php" method="post">
  <input type="text" hidden name="name" value="<?php echo $name ?>">
  <input type="text" hidden name="price" value="<?php echo $price ?>">
  <input type="text" hidden name="bus_location" value="<?php echo $bus_location ?>">
  <input type="text" hidden name="bus_name" value="<?php echo $bus_name ?>">
  <input type="text" hidden name="date_issued" value="<?php echo $date_issued ?>">
  <input type="text" hidden name="clearance_number" value="<?php echo $clearance_number ?>">
  <input type="text" hidden name="bus_type" value="<?php echo $bus_type ?>">


  <body>
    <div class="certificate__canvas">
      <img class="certificate__header" src="../../../assets/img/cert-header.png" alt="" />

      <div class="certificate__text certificate__text--businessclearance">
        <h1 class="certificate__title">BARANGAY BUSINESS CLEARANCE</h1>
        <p>
          Date Issued
          <span class="indent"> <b>: <?php echo $date ?></b></span>
          <br />
          Clearance No<b> : <?php echo $clearance_number ?></b>
          <span class="br br--lg"></span>

          <b>TO WHOM IT MAY CONCERN:</b>
          <span class="br br--lg"></span>
        </p>

        <p class="certificate__text-center">
          This Business Clearance is hereby granted to:
          <br />
        </p>

        <div class="certificate__pink-block">
          <p><?php echo $name  ?></p>
        </div>

        <p class="certificate__text-center">
          Owner/proprietor of
          <br />
        </p>

        <div class="certificate__pink-block">
          <p><?php echo $bus_name  ?></p>
        </div>

        <p class="certificate__text-center">
          located at
          <span class="br br--sm"></span>

          <span class="certificate__purok">
            <?php echo $bus_location  ?>, BARANGAY DADIANGAS NORTH
            <br />
            GENERAL SANTOS CITY</span>
          <span class="br br--sm"></span>

          to operate and engage in the business of
          <br />
        </p>

        <div class="certificate__pink-block">
          <p>
            <?php echo $bus_type  ?>
          </p>
        </div>

        <p class="certificate__text-justify">
          Further, this clearance is being issued to the abovementioned person
          provided that the provisions of Laws, Rules and Regulations which are
          in force and other ordinances of this Barangay pertaining to the
          abovementioned business shall be complied with.
          <span class="br br--sm"></span>

          <span class="certificates__text-pink">Note: However, that this certification is subject for CANCELLATION
            for any cause violative of existing rules and regulations and
            ordinances of this Barangay. This Barangay Clearance is VALID UPON
            PAYMENT OF THE CORRESPONDING FEES.</span>
        </p>

        <p class="certificate__text-justify">
          <span class="br br--lg"></span>

          <b><i>Records Verified by:</i></b>
          <span class="br br--md"></span>
          <?php
          $squery =  mysqli_query($conn, "SELECT * FROM `officials` WHERE off_position = 'Barangay Secretary'");
          while ($row = mysqli_fetch_array($squery)) {
          ?>
            <b><?php echo strtoupper($row['off_name']);
              } ?></b>
            <br />
            <span>Barangay Secretary</span>
            <span class="br br--lg"></span>

            <b><i>Approved by:</i></b>
            <span class="br br--md"></span>

            <?php
            $squery =  mysqli_query($conn, "SELECT * FROM `officials` WHERE off_position = 'Barangay Chairman'");
            while ($row = mysqli_fetch_array($squery)) {
            ?>
              <b>HON. <?php echo strtoupper($row['off_name']);
                    } ?></b>

              <br />
              <span>Punong Barangay</span>
        </p>

        <div class="certificate__thumbmark">
          <div class="certificate__thumbmark-box">
            <p>LEFT</p>
          </div>

          <div class="certificate__thumbmark-box">
            <p>RIGHT</p>
          </div>
        </div>

        <div class="certificate__signature">
          <p>Signature of Applicant over Printed Name</p>
        </div>

        <div class="certificate__buttons certificate__buttons--business-clearance">
          <button class="button button--sm button--primary" id="print-btn" onclick="printPage()">
            Print
          </button>
          <button class="button button--sm button--dark" id="back-btn" type="button">
            <a style="color: #fdfdfd;" onclick="history.back();">Back</a>
          </button>
        </div>
      </div>
    </div>
  </body>
</form>

</html>