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


                    <div class="certificates-info__content">

                        <form id="" action="generate/business-clearance.php" method="post">
                            <section class="certificates-info">
                                <div class="certificates-info__container">
                                    <div class="input__wrapper">
                                        <label>Barangay Clearance Fee</label>
                                        <div class="input__inner">
                                            <input type="number" class="input--light300 input-viewprofile" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="certificates-info__container">
                                    <div class="input__wrapper">
                                        <label>Small Scale Business Fee</label>
                                        <div class="input__inner">
                                            <input type="number" class="input--light300 input-viewprofile" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="certificates-info__container">
                                    <div class="input__wrapper">
                                        <label>Medium Scale Business Fee</label>
                                        <div class="input__inner">
                                            <input type="number" class="input--light300 input-viewprofile" value="" required>
                                        </div>
                                    </div>
                                </div>


                                <div class="certificates-info__container">
                                    <div class="input__wrapper">
                                        <label>Large Scale Business Fee</label>
                                        <div class="input__inner">
                                            <input type="number" class="input--light300 input-viewprofile" value="" required>
                                        </div>
                                    </div>
                                </div>


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