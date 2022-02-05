<?php

$page = 'Settings';
$headerTitle = 'Settings';
include "../../db_conn.php";
require_once "../../includes/header.php";
include "../../includes/preloader.php";
?>

<main>


    <div class="content">

        <div class="card">


            <div class="card__body" style="padding-top: 80px;">
                <div class="card__body-content">


                    <h3 style="position: absolute; top: 40px; left: 40px;">Clearance Price Settings</h3>
                    <?php if (isset($_GET['msg'])) { ?>
                        <p class="error-message" style="margin-bottom: 15px;"><?php echo $_GET['msg']; ?></p>
                    <?php } ?>


                    <div class="certificates-info__content">

                        <form id="" action="update-settings.php" method="post">

                            <section class="certificates-info">
                                <?php
                                $squery =  mysqli_query($conn, "SELECT * FROM `settings`");
                                while ($row = mysqli_fetch_array($squery)) {
                                ?>
                                    <div class="certificates-info__container">
                                        <div class="input__wrapper">
                                            <label>Barangay Clearance Fee: <span class="settings__cert-price"></span></label>
                                            <div class="input__inner">
                                                <input name="barangay_clearance_fee" type="number" class="input--light300 input-viewprofile" value="<?php echo $row['barangay_clearance_fee'] ?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="certificates-info__container">
                                        <div class="input__wrapper">
                                            <label>Small Scale Business Fee: <span class="settings__cert-price"></span></label>
                                            <div class="input__inner">
                                                <input name="small_scale_fee" type="number" class="input--light300 input-viewprofile" value="<?php echo $row['small_scale_fee'] ?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="certificates-info__container">
                                        <div class="input__wrapper">
                                            <label>Medium Scale Business Fee: <span class="settings__cert-price"></span></label>
                                            <div class="input__inner">
                                                <input name="medium_scale_fee" type="number" class="input--light300 input-viewprofile" value="<?php echo $row['medium_scale_fee'] ?>" required>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="certificates-info__container">
                                        <div class="input__wrapper">
                                            <label>Large Scale Business Fee: <span class="settings__cert-price"></span></label>
                                            <div class="input__inner">
                                                <input name="large_scale_fee" type="number" class="input--light300 input-viewprofile" value="<?php echo $row['large_scale_fee'] ?>" required>
                                            </div>
                                        </div>
                                    </div>

                                <?php } ?>
                            </section>
                    </div>

                    <!-- card body content end -->
                </div>
                <!-- card body end -->
            </div>

            <div class="card__footer">
                <div class="card__footer-content">
                    <div class="card__footer-content--right">
                        <button class="button button--primary button--md">
                            <i class='bx bxs-save'></i>
                            SAVE CHANGES</button>
                        <!-- <a class="button button--dark button--md modal-trigger" data-modal-id="modal-cancel">CANCEL</a> -->
                    </div>
                </div>
            </div>


            <!-- card end -->
        </div>


    </div>

</main>



</body>


</html>