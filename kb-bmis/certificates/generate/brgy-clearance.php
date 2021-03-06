<?php
include "../../../db_conn.php";

session_start();
$user_log = $_SESSION['role'];
if (isset($_POST['btn_save'])) {

    $res_id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $purpose = $_POST['purpose'];
    $date_issued = $_POST['date_issued'];
    $cedula_number = $_POST['cedula_number'];
    $cedula_issued_at = $_POST['cedula_address'];
    $cedula_date = $_POST['cedula_date'];
    $sex = $_POST['sex'];
    $civil_status = $_POST['civil_status'];
    $new_date_issued_day = date("jS", strtotime($date_issued));
    $new_date_issued_month_year = date("F Y", strtotime($date_issued));
    $new_cedula_date = date("F j, Y", strtotime($cedula_date));
    $price = $_POST['price'];
    $pic = $_POST['pic'];

    // $img = $_POST['image'];
    // $folderPath = "images/";
    // $owner_pic = $name;
    // $image_parts = explode(";base64,", $img);
    // $image_type_aux = explode("image/", $image_parts[0]);
    // $image_type = $image_type_aux[1];
    // $image_base64 = base64_decode($image_parts[1]);
    // $fileName =  $owner_pic . '_' . time() .  '.png';
    // $file = $folderPath . $fileName;
    // file_put_contents($file, $image_base64);
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
    <form id="" action="save-brgy-clearance.php" method="post">
        <input type="text" hidden name="res_id" value="<?php echo $res_id ?>">
        <input type="text" hidden name="name" value="<?php echo $name ?>">
        <input type="text" hidden name="address" value="<?php echo $address ?>">
        <input type="text" hidden name="purpose" value="<?php echo $purpose ?>">
        <input type="text" hidden name="date_issued" value="<?php echo $date_issued ?>">
        <input type="text" hidden name="cedula_number" value="<?php echo $cedula_number ?>">
        <input type="text" hidden name="cedula_issued_at" value="<?php echo $cedula_issued_at ?>">
        <input type="text" hidden name="cedula_date" value="<?php echo $cedula_date ?>">
        <input type="text" hidden name="pic" value="<?php echo $pic ?>">
        <input type="text" hidden name="price" value="<?php echo $price ?>">
        <input type="text" hidden name="user_log" value="<?php echo $user_log ?>">

        <body>

            <div class="certificate__canvas">
                <img class="certificate__header" src="../../../assets/img/cert-header.png" alt="" />
                <div class="certificate__text certificate__text--brgyclearance">
                    <h1 class="certificate__title">BARANGAY CLEARANCE</h1>
                    <p>
                        <b>TO WHOM IT MAY CONCERN:</b>

                        <span class="br br--md"></span>

                        This is to <b><u>CERTIFY</u></b> that
                        <b><?php echo $sex ?>
                            <?php echo $name ?></b>,
                        <?php echo $civil_status ?>, and with a Resident Certificate No.
                        <b><?php echo $cedula_number ?></b>
                        issued at <b><?php echo $cedula_issued_at ?></b> on
                        <b><?php echo $new_cedula_date ?></b> is a resident of
                        <b><?php echo $address ?>, Barangay Dadiangas North, General Santos City.</b>

                        <span class="br br--sm"></span>

                        This is to certify further that the said person has
                        <b><u>NO DEROGATORY RECORD</u></b> filed in this office. This
                        <b><u>CERTIFICATION</u></b> is upon being issued the request of the
                        above named person in connection with
                        <?php
                        if ($sex == "Ms.") {
                            echo "her";
                        } else if ($sex == "Mrs.") {
                            echo "her";
                        } else if ($sex == "Mr.") {
                            echo "him";
                        }
                        ?>
                        application for <b><?php echo $purpose ?></b> and for whatever legal
                        purposes it may serve
                        <?php
                        if ($sex == "Ms.") {
                            echo "her";
                        } else if ($sex == "Mrs.") {
                            echo "her";
                        } else if ($sex == "Mr.") {
                            echo "him";
                        }
                        ?>
                        best.

                        <span class="br br--sm"></span>

                        Issued this <b><?php echo $new_date_issued_day ?></b> day of
                        <b><?php echo $new_date_issued_month_year ?></b> at Barangay Dadiangas
                        North, General Santos City.
                    </p>


                    <div class="row row--flex">
                        <div class="certificate__img">
                            <img src="../../residents/images/<?php echo $pic ?>" alt="" />
                        </div>

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

                    <div class="row row--space-between">
                        <div class="certificate__official">
                            <?php
                            $squery =  mysqli_query($conn, "SELECT * FROM `officials` WHERE off_position = 'Barangay Chairman'");
                            while ($row = mysqli_fetch_array($squery)) {
                            ?>


                                <p class="certificate__official-name">HON. <?php echo strtoupper($row['off_name']);
                                                                        } ?></p>

                                <p>Punong Barangay</p>
                                <p>Barangay Dadiangas North</p>
                                <p>General Santos City</p>
                        </div>

                        <p class="certificate__seal">Not valid without dry seal</p>
                    </div>

                    <!-- hide print button when print -->
                    <div class="certificate__buttons">
                        <button class="button button--sm button--primary" id="print-btn" name="bnt_save" onclick="printPage()">
                            Print
                        </button>
                        <button class="button button--sm button--dark" id="back-btn" type="button">
                            <a style="color: #fdfdfd;" onclick="history.back()">Back</a>
                        </button>
                    </div>

                </div>
            </div>
        </body>
    </form>

    </html>
<?php
}
?>