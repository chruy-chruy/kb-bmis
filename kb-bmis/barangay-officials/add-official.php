<?php
$headerTitle = 'Add New Official';
$page = 'Barangay Officials';
require_once "../../includes/header.php";
include "../../db_conn.php";
$id = $_GET["id"];
$squery =  mysqli_query($conn, "select * from residents where id= $id");
while ($row = mysqli_fetch_array($squery)) {

?>
    <form action="create-official.php" method="post" enctype="multipart/form-data" data-parsley-validate="">
        <main>
            <div class="content">
                <div class="card">
                    <a href="#" class="button button--md back-btn modal-trigger" data-modal-id="modal-cancel">
                        <i class='bx bx-left-arrow-circle' data-modal-id="modal-cancel"></i>
                        Back
                    </a>


                    <div class="card__body">
                        <div class="card__body-content">
                            <div class="profile__img profile__img--viewprofile">
                                <img src="../residents/images/<?php echo $row['img_url'] ?>" alt="">
                            </div>

                            <div class="profile__name profile__name--viewprofile">
                                <?php echo $row["first_name"]; ?>
                                <?php echo $row["mid_name"]; ?>
                                <?php echo $row["last_name"]; ?>
                                <?php echo $row["suffix"]; ?>
                            </div>


                            <ul class="profile-info__list viewprofile">
                                <li class="profile-info__item profile-info__item--active">
                                    <a href="#">
                                        Basic Information
                                    </a>
                                </li>

                                <li class="profile-info__item">
                                    <a href="#">
                                        For Emergency
                                    </a>
                                </li>

                            </ul>

                            <div class="profile-info__content viewprofile" style="display: block;">


                                <section class="profile-info__basic-info">
                                    <input name="id" type="text" value="<?php echo $id ?>" hidden>
                                    <input name="img_url" type="text" value="<?php echo $row['img_url'] ?>" hidden>
                                    <input name="off_name" type="text" value="<?php echo $row["first_name"] . " " . $row["mid_name"] . " " . $row["last_name"] . " " . $row["suffix"];  ?>" hidden>


                                    <div class="profile-info__container">
                                        <div class="input__wrapper">
                                            <label for="official-position">Position</label>
                                            <div class="input__inner">
                                                <div class="select__wrapper">
                                                    <select name="off_position" id="" class="select select--resident-profile input-viewprofile">
                                                        <option value="Select" selected></option>
                                                        <option value="Barangay Chairman">Barangay Chairman</option>
                                                        <option value="Barangay Councilor">Barangay Councilor</option>
                                                        <option value="Barangay Secretary">Barangay Secretary</option>
                                                        <option value="Barangay Treasurer">Barangay Treasurer</option>
                                                        <option value="SK Chairperson">SK Chairperson</option>
                                                        <option value="SK Councilor">SK Councilor</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="profile-info__container">
                                        <div class="input__wrapper">
                                            <label for="resident-birthday">Date of Birth</label>
                                            <div class="input__inner">
                                                <input name="date_of_birth" type="date" class="input--light300 input-viewprofile" value="<?php echo $row['date_of_birth'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="profile-info__container">
                                        <div class="input__wrapper">
                                            <label for="resident-housenumber">House Number</label>
                                            <div class="input__inner">
                                                <input name="house_number" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['house_number'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="profile-info__container">
                                        <div class="input__wrapper">
                                            <label for="resident-street">Street</label>
                                            <div class="input__inner">
                                                <input name="street" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['street'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="profile-info__container">
                                        <div class="input__wrapper">
                                            <label for="resident-purok">Purok</label>
                                            <div class="input__inner">
                                                <input name="purok" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['purok'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="profile-info__container">
                                        <div class="input__wrapper">
                                            <label for="resident-contactnumber">Phone Number</label>
                                            <div class="input__inner">
                                                <input name="off_contact" type="tel" class="input--light300 input-viewprofile" value="<?php echo $row['phone_number'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="profile-info__container">
                                        <div class="input__wrapper">
                                            <label for="resident-contactnumber">Tel Number</label>
                                            <div class="input__inner">
                                                <input name="tel_number" type="tel" class="input--light300 input-viewprofile" value="<?php echo $row['tel_number'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="profile-info__container">
                                        <div class="input__wrapper">
                                            <label for="resident-email">Email Address</label>
                                            <div class="input__inner">
                                                <input name="email" type="email" class="input--light300 input-viewprofile" value="<?php echo $row['email'] ?>">
                                            </div>
                                        </div>
                                    </div>



                                </section>

                            </div>



                            <div class="profile-info__content viewprofile">
                                <section class="profile-info__emergency">

                                    <div class="profile-info__container">
                                        <div class="input__wrapper">
                                            <label for="resident-emergencyperson">Emergency Person</label>
                                            <div class="input__inner">
                                                <input name="emergency_person" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['emergency_person'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="profile-info__container viewprofile">
                                        <div class="input__wrapper">
                                            <label for="resident-emergencyrelationship">Relationship</label>
                                            <div class="input__inner">
                                                <input name="relationship" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['relationship'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="profile-info__container">
                                        <div class="input__wrapper">
                                            <label for="resident-emergencyaddress">Emergency Address</label>
                                            <div class="input__inner">
                                                <input name="emergency_address" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['emergency_address'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="profile-info__container">
                                        <div class="input__wrapper">
                                            <label for="resident-emergencycontact">Emergency Contact</label>
                                            <div class="input__inner">
                                                <input name="emergency_contact" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['emergency_contact'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                </section>
                            </div>

                        </div>
                    </div>



                    <div class="card__footer">
                        <div class="card__footer-content">
                            <button class="button button--primary button--md" name="btn_save">Save</button>
                            <a href="#" ; class="button button--dark button--md modal-trigger" data-modal-id="modal-cancel">Cancel</a>
                        </div>

                    </div>

                </div>
        </main>
    <?php }
    ?>


    <!--=============== MODALS ===============-->
    <div class="modal__wrapper" id="modal-cancel">
        <section class="modal__window modal__window--md">
            <header class="modal__header">
                <h3>Delete Profile</h3>
                <button type="button" class="modal__close close" aria-label="Close modal window">
                    <i class='bx bx-x'></i>
                </button>
            </header>
            <div class="modal__body">
                Are you sure you want to cancel?
            </div>
            <footer class="modal__footer">
                <a href="index.php" class="button button--danger button--md">Yes</a>
                <a href="#" class="button button--dark button--md modal__cancel close">No</a>

            </footer>
        </section>
    </div>






    </body>


    </html>