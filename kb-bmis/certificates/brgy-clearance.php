<?php
$page = 'Certificates';
$headerTitle = 'Barangay Clearance';
include "../../db_conn.php";
require_once "../../includes/header.php";

?>



<main>

    <div class="content" id="content-certificates">

        <section class="certificates__info">

            <div class="card">
                <button class="button button--md back-btn modal-trigger" data-modal-id="modal-cancel">
                    <i class='bx bx-left-arrow-circle'></i>
                    Back
                </button>
                <?php $id = $_GET["id"];

                $squery = mysqli_query($conn, "select * from residents where id = $id");
                while ($row = mysqli_fetch_array($squery)) {
                    $sex = $row['sex'];
                    $civil_status = $row['civil_status'];
                ?>

                    <div class="card__body">
                        <form id="" action="generate/brgy-clearance.php" method="post">
                            <div class="card__body-content">

                                <div class="profile__img profile__img--change">
                                    <img src="../residents/images/<?php echo $row['img_url'] ?>" name="default" alt="">

                                    <input type="hidden" name="pic" value="<?php echo $row['img_url'] ?>" />


                                </div>

                            </div>
                            <!-- <a href="#" class="button button--icon-sm modal-trigger" data-modal-id="modal-camera" onclick="open_cam()">
                                    <i class='bx bx-camera' data-modal-id="modal-camera"></i>
                                </a> -->

                            <div class="center">
                                <div class="profile__name" style="margin: 20px 0px 30px 0px;">
                                    <?php echo $row['first_name'] ?> <?php echo $row['mid_name'] ?>
                                    <?php echo $row['last_name'] ?> <?php echo $row['suffix'] ?>
                                </div>
                            </div>

                            <div class="certificates-info__content">


                                <section class="certificates-info">
                                    <div class="certificates-info__container">

                                        <!-- hidden -->
                                        <div class="cert-info">
                                            <input id="id" type="hidden" name="id" value="<?php echo $row['id'] ?>" />
                                        </div>
                                        <div class="cert-info">
                                            <input id="id" type="hidden" name="civil_status" value="<?php echo $civil_status ?>" />
                                        </div>

                                        <div class="cert-info">
                                            <input id="id" type="hidden" name="sex" required="" value="<?php
                                                                                                        if ($sex == "female" && $civil_status == "Single") {
                                                                                                            echo "Ms.";
                                                                                                        } else if ($sex == "Female" && $civil_status == "Married") {
                                                                                                            echo "Mrs.";
                                                                                                        } else if ($sex == "Female" && $civil_status == "Widowed") {
                                                                                                            echo "Mrs.";
                                                                                                        } else if ($sex == "Male") {
                                                                                                            echo "Mr.";
                                                                                                        }; ?>" />
                                        </div>
                                        <!-- hidden -->

                                        <div class="input__wrapper">
                                            <label>Name</label>
                                            <div class="input__inner">
                                                <input name="name" type="text" required="" class="input--light300 input-viewprofile" value="<?php echo $row['first_name'] ?>  <?php echo $row['mid_name'] ?>  <?php echo $row['last_name'] ?> <?php echo $row['suffix'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="certificates-info__container">
                                        <div class="input__wrapper">
                                            <label>Address</label>
                                            <div class="input__inner">
                                                <input name="address" type="text" required="" class="input--light300 input-viewprofile" value="<?php echo $row['purok'] ?> <?php echo $row['street'] ?> <?php echo $row['house_number'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="certificates-info__container">
                                        <div class="input__wrapper">
                                            <label>Date Issued</label>
                                            <div class="input__inner">
                                                <input name="date_issued" type="date" class="input--light300 input-viewprofile" value="<?php echo date('Y-m-d'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="certificates-info__container">
                                    <div class="input__wrapper">
                                        <label>Purpose <strong style="color:red;" ;>*</strong></label>
                                        <div class="input__inner">
                                            <input name="purpose" type="text" class="input--light300 input-viewprofile" value="" required="">
                                        </div>
                                    </div>
                                </div>



                                <?php
                                $squery =  mysqli_query($conn, "SELECT * FROM `settings`");
                                while ($row = mysqli_fetch_array($squery)) {
                                ?>
                                    <div class="certificates-info__container">
                                        <div class="input__wrapper">
                                            <label>Amount <strong style="color:red;" ;>*</strong></label>
                                            <div class="input__inner">
                                                <input name="price" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['barangay_clearance_fee'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                </section>

                                <!-- <hr style="margin-top: 12px;"> -->

                                <section class="certificates-info" style="margin-top: 10px;">
                                    <div class="certificates-info__container">
                                        <div class="input__wrapper">
                                            <label>Cedula No. <strong style="color:red;" ;>*</strong></label>
                                            <div class="input__inner">
                                                <input name="cedula_number" type="number" class="input--light300 input-viewprofile" value="" required="" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="certificates-info__container">
                                        <div class="input__wrapper">
                                            <label>Cedula Issued at <strong style="color:red;" ;>*</strong></label>
                                            <div class="input__inner">
                                                <input name="cedula_address" type="text" class="input--light300 input-viewprofile" value="" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="certificates-info__container">
                                        <div class="input__wrapper">
                                            <label>Cedula Issued on <strong style="color:red;" ;>*</strong></label>
                                            <div class="input__inner">
                                                <input name="cedula_date" type="date" class="input--light300 input-viewprofile" value="" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="certificates-info__container">
                      <div class="input__wrapper">
                        <label>Valid Picture</label>
                        <div class="input__inner">
                          <a href="#" class="button button--sm button--dark-outline camera-btn modal-trigger input--light300 input-viewprofile" data-modal-id="modal-camera" onclick="open_cam()">
                            <i class='bx bx-camera' data-modal-id="modal-camera"></i>
                            Open Camera
                          </a>
                        </div>
                      </div>
                    </div> -->

                                </section>


                                <div class="card__footer">

                                    <div class="card__footer-content">
                                        <div class="card__footer-content--right">
                                            <button class="button button--primary button--md" name="btn_save">GENERATE</button>
                                            <a class="button button--dark button--md modal-trigger" data-modal-id="modal-cancel">CANCEL</a>
                                        </div>
                                    </div>

                                </div>



        </section>


    </div>


    <!-- card end -->
    </div>


    </section>

    </div>



    </div>

</main>

<!--=============== MODALS ===============-->
<?php
include "../../includes/modal-cancel.php";
?>

</body>

</html>