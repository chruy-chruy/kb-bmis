<?php
$headerTitle = 'View';
$page = 'Archive';
require_once "../../includes/header.php";
include "../../db_conn.php";
include "../../includes/preloader.php";
$resident_id = $_GET['resident_id'];
$id = $_GET['officials_archive_id'];
$squery =  mysqli_query($conn, "select * from residents where id = $resident_id");
while ($row = mysqli_fetch_array($squery)) {

?>
<style>
.archive-date {
    position: absolute;
    top: 1.255rem;
    right: 1.725rem;
    font-size: 0.9rem;
}

@media only screen and (max-width: 678px) {
    .archive-date h4 {
        display: none;
    }

    .archive-date p {
        font-size: 0.7rem;
    }
}
</style>


<main>
    <div class="content">
        <div class="card">
            <a href="official-archive.php" class="button button--md back-btn">
                <i class='bx bx-left-arrow-circle'></i>
                Back
            </a>
            <?php
                $posQuery = mysqli_query($conn, "SELECT * FROM `officials_archive` WHERE officials_archive_id = $id");
                $officialPos = mysqli_fetch_array($posQuery);  ?>

            <div class="archive-date">
                <h4><strong>Date Archived:</strong></h4>
                <p><?php echo date('m-d-Y h:i:s a ', strtotime($officialPos['archived_date'])); ?></p>
            </div>


            <div class=" card__body">
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

                    <div class="row">
                        <a href="#" class="button button--primary button--sm modal-trigger"
                            data-modal-id="modal-restore">
                            <i class='bx bxs-edit' data-modal-id="modal-restore"></i>
                            Restore</a>
                        <a href="#" class="button button--dark button--sm modal-trigger" data-modal-id="modal-delete">
                            <i class='bx bxs-trash' data-modal-id="modal-delete"></i>
                            Delete</a>
                    </div>

                    <ul class="profile-info__list viewprofile">
                        <li class="profile-info__item profile-info__item--active">
                            <span>
                                Basic Information
                            </span>
                        </li>

                        <li class="profile-info__item">
                            <span>
                                For Emergency
                            </span>
                        </li>

                    </ul>
                    <?php } ?>

                    <div class="profile-info__content viewprofile" style="display: block;">

                        <?php
                        $posQuery = mysqli_query($conn, "SELECT * FROM `officials_archive` WHERE officials_archive_id = $id");
                        $officialPos = mysqli_fetch_array($posQuery);  ?>

                        <section class="profile-info__basic-info">


                            <div class="profile-info__container">
                                <div class="input__wrapper">
                                    <label for="official-position">Position</label>
                                    <div class="input__inner">
                                        <input disabled name="occupation" type="text"
                                            class="input--light300 input-viewprofile"
                                            value="<?php echo $officialPos['off_position'] ?>">
                                    </div>
                                </div>
                            </div>



                            <?php
                            $squery =  mysqli_query($conn, "select * from residents where id = $resident_id");
                            while ($row = mysqli_fetch_array($squery)) {

                            ?>

                            <div class="profile-info__container">
                                <div class="input__wrapper">
                                    <label for="resident-birthday">Date of Birth</label>
                                    <div class="input__inner">
                                        <input disabled name="date_of_birth" type="date"
                                            class="input--light300 input-viewprofile"
                                            value="<?php echo $row['date_of_birth'] ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="profile-info__container">
                                <div class="input__wrapper">
                                    <label for="resident-housenumber">House Number</label>
                                    <div class="input__inner">
                                        <input disabled name="house_number" type="text"
                                            class="input--light300 input-viewprofile"
                                            value="<?php echo $row['house_number'] ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="profile-info__container">
                                <div class="input__wrapper">
                                    <label for="resident-street">Street</label>
                                    <div class="input__inner">
                                        <input disabled name="street" type="text"
                                            class="input--light300 input-viewprofile"
                                            value="<?php echo $row['street'] ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="profile-info__container">
                                <div class="input__wrapper">
                                    <label for="resident-purok">Purok</label>
                                    <div class="input__inner">
                                        <input disabled name="purok" type="text"
                                            class="input--light300 input-viewprofile"
                                            value="<?php echo $row['purok'] ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="profile-info__container">
                                <div class="input__wrapper">
                                    <label for="resident-contactnumber">Phone Number</label>
                                    <div class="input__inner">
                                        <input disabled name="phone_number" type="tel"
                                            class="input--light300 input-viewprofile"
                                            value="<?php echo $row['phone_number'] ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="profile-info__container">
                                <div class="input__wrapper">
                                    <label for="resident-contactnumber">Tel Number</label>
                                    <div class="input__inner">
                                        <input disabled name="tel_number" type="tel"
                                            class="input--light300 input-viewprofile"
                                            value="<?php echo $row['tel_number'] ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="profile-info__container">
                                <div class="input__wrapper">
                                    <label for="resident-email">Email Address</label>
                                    <div class="input__inner">
                                        <input disabled name="email" type="email"
                                            class="input--light300 input-viewprofile"
                                            value="<?php echo $row['email'] ?>">
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
                                        <input disabled name="emergency_person" type="text"
                                            class="input--light300 input-viewprofile"
                                            value="<?php echo $row['emergency_person'] ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="profile-info__container viewprofile">
                                <div class="input__wrapper">
                                    <label for="resident-emergencyrelationship">Relationship</label>
                                    <div class="input__inner">
                                        <input disabled name="relationship" type="text"
                                            class="input--light300 input-viewprofile"
                                            value="<?php echo $row['relationship'] ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="profile-info__container">
                                <div class="input__wrapper">
                                    <label for="resident-emergencyaddress">Emergency Address</label>
                                    <div class="input__inner">
                                        <input disabled name="emergency_address" type="text"
                                            class="input--light300 input-viewprofile"
                                            value="<?php echo $row['emergency_address'] ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="profile-info__container">
                                <div class="input__wrapper">
                                    <label for="resident-emergencycontact">Emergency Contact</label>
                                    <div class="input__inner">
                                        <input disabled name="emergency_contact" type="text"
                                            class="input--light300 input-viewprofile"
                                            value="<?php echo $row['emergency_contact'] ?>">
                                    </div>
                                </div>
                            </div>

                        </section>
                    </div>

                </div>
            </div>



            <!-- <div class="card__footer">
                        <div class="card__footer-content">
                          <a href="" name="btn_update" class="button button--primary button--md" id="save-editprofile">Save</a> 
                          <a href="#" class="button button--dark button--md modal-trigger" data-modal-id="modal-viewprofile-cancel">Cancel</a>
                        </div>
                      </div> -->

        </div>

    </div>
</main>

<?php } ?>


<?php
$offquery =  mysqli_query($conn, "SELECT * FROM `officials_archive` WHERE officials_archive_id = $id");
while ($row = mysqli_fetch_array($offquery)) {

?>


<!--=============== MODALS ===============-->
<div class="modal__wrapper" id="modal-delete">
    <section class="modal__window modal__window--md">
        <header class="modal__header">
            <h3>Delete Profile</h3>
            <button type="button" class="modal__close close" aria-label="Close modal window">
                <i class='bx bx-x'></i>
            </button>
        </header>
        <div class="modal__body">
            Are you sure you want to delete <?php echo $row["off_name"]; ?>?
        </div>



        <footer class="modal__footer">
            <a href="controllers/official-delete.php?officials_archive_id=<?php echo $row["officials_archive_id"]; ?>"
                class="button button--danger button--md">Delete</a>
            <a href="#" class="button button--dark button--md modal__cancel close">Cancel</a>

        </footer>
    </section>
</div>


<div class="modal__wrapper" id="modal-restore">
    <section class="modal__window modal__window--md">
        <header class="modal__header">
            <h3>Restore Profile</h3>
            <button type="button" class="modal__close close" aria-label="Close modal window">
                <i class='bx bx-x'></i>
            </button>
        </header>
        <div class="modal__body">
            Are you sure you want to restore <?php echo $row["off_name"]; ?>?
        </div>

        <footer class="modal__footer">
            <a href="controllers/official-restore.php?officials_archive_id=<?php echo $row["officials_archive_id"]; ?>"
                class="button button--danger button--md">Restore</a>
            <a href="#" class="button button--dark button--md modal__cancel close">Cancel</a>

        </footer>
    </section>
</div>




<?php } ?>


</body>


</html>