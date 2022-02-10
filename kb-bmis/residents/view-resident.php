<?php
include "../../db_conn.php"; ?>
<?php
$id = $_GET["id"];
?>

<?php
$headerTitle = 'View';
$page = 'Residents';
require_once "../../includes/header.php";
$squery = mysqli_query($conn, "select * from residents where id = $id");
while ($row = mysqli_fetch_array($squery)) {
?>

    <main>
        <div class="content">
            <div class="card">
                <a href="index.php" class="button button--md back-btn">
                    <i class='bx bx-left-arrow-circle'></i>
                    Back
                </a>


                <div class="card__body">
                    <div class="card__body-content">
                        <div class="profile__img profile__img--viewprofile">
                            <img src="images/<?php echo $row["img_url"]; ?>" alt="">
                        </div>

                        <div class="profile__name profile__name--viewprofile">
                            <?php echo $row["first_name"]; ?>
                            <?php echo $row["mid_name"]; ?>
                            <?php echo $row["last_name"]; ?>
                            <?php echo $row["suffix"]; ?>
                        </div>

                        <div class="row">
                            <a href="edit-resident.php?id=<?php echo $row["id"]; ?>" class="button button--primary button--sm modal-trigger">
                                <i class='bx bxs-edit'></i>
                                Edit</a>
                            <a href="#" class="button button--dark button--sm modal-trigger" data-modal-id="modal-delete">
                                <i class='bx bxs-trash' data-modal-id="modal-delete"></i>
                                Delete</a></a>
                        </div>

                        <ul class="profile-info__list viewprofile">
                            <li class="profile-info__item profile-info__item--active">
                                <span>
                                    Basic Information
                                </span>
                            </li>

                            <li class="profile-info__item" id="votingTab">
                                <span>
                                    Voting
                                </span>
                            </li>

                            <li class="profile-info__item" id="vaccineTab">
                                <span>
                                    Vaccine
                                </span>
                            </li>

                            <li class="profile-info__item">
                                <span>
                                    For Emergency
                                </span>
                            </li>

                        </ul>

                        <div class="profile-info__content viewprofile" style="display: block;">


                            <section class="profile-info__basic-info">

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-first-name">First Name</label>
                                        <div class="input__inner">
                                            <input disabled name="first_name" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['first_name'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-last-name">Last Name</label>
                                        <div class="input__inner">
                                            <input disabled name="last_name" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['last_name'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-middle-name">Middle Name</label>
                                        <div class="input__inner">
                                            <input disabled name="mid_name" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['mid_name'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-suffix">Suffix</label>
                                        <div class="input__inner">
                                            <input disabled name="suffix" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['suffix'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-gender">Gender</label>
                                        <div class="input__inner">
                                            <div class="select__wrapper">
                                                <select disabled name="sex" name="" id="" class="select select--resident-profile input-viewprofile input-viewprofile">
                                                    <option value="<?php echo $row['sex'] ?>" selected>
                                                        <?php echo $row['sex'] ?></option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-birthday">Date of Birth</label>
                                        <div class="input__inner">
                                            <input disabled name="date_of_birth" type="date" class="input--light300 input-viewprofile dob" value="<?php echo $row['date_of_birth'] ?>">
                                        </div>
                                    </div>
                                </div>



                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-housenumber">House Number</label>
                                        <div class="input__inner">
                                            <input disabled name="house_number" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['house_number'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-street">Street</label>
                                        <div class="input__inner">
                                            <input disabled name="street" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['street'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-purok">Purok</label>
                                        <div class="input__inner">

                                            <!-- <input disabled name="purok" type="text"
                                            class="input--light300 input-viewprofile"
                                            value="<?php echo $row['purok'] ?>"> -->

                                            <div class="select__wrapper">
                                                <select disabled name="purok" name="civil_status" id="" class="select select--resident-profile input-viewprofile">
                                                    <option value="<?php echo $row['purok'] ?>" selected disabled>
                                                        <?php echo $row['purok'] ?></option>
                                                    <option value="Purok 1">Purok 1</option>
                                                    <option value="Purok 2">Purok 2</option>
                                                    <option value="Purok 3">Purok 3</option>
                                                    <option value="Purok 4">Purok 4</option>
                                                    <option value="Purok 5">Purok 5</option>
                                                    <option value="Purok 6">Purok 6</option>
                                                    <option value="Purok 7">Purok 7</option>
                                                    <option value="Purok 8">Purok 8</option>
                                                    <option value="Purok 9">Purok 9</option>
                                                    <option value="Purok 10">Purok 10</option>
                                                    <option value="Purok 11">Purok 11</option>
                                                    <option value="Purok 12">Purok 12</option>
                                                    <option value="Purok 13">Purok 13</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-birthplace">Place of Birth</label>
                                        <div class="input__inner">
                                            <input disabled name="place_of_birth" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['place_of_birth'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-civilstatus">Civil Status</label>
                                        <div class="input__inner">
                                            <div class="select__wrapper">
                                                <select disabled name="civil_status" name="civil_status" id="" class="select select--resident-profile input-viewprofile">
                                                    <option value="<?php echo $row['civil_status'] ?>" selected disabled>
                                                        <?php echo $row['civil_status'] ?></option>
                                                    <option value="single">Single</option>
                                                    <option value="married">Married</option>
                                                    <option value="divorced">Divorced</option>
                                                    <option value="separated">Separated</option>
                                                    <option value="widowed">Widowed</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-nationality">Nationality</label>
                                        <div class="input__inner">
                                            <input disabled name="citizenship" name="citizenship" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['citizenship'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-educationalattainment">Educational Attainment</label>
                                        <div class="input__inner">
                                            <div class="select__wrapper">
                                                <select disabled name="education_status" name="education_status" id="" class="select select--resident-profile input-viewprofile" required>
                                                    <option value="<?php echo $row['education_status'] ?>" selected disabled>
                                                        <?php echo $row['education_status'] ?></option>

                                                    <option value="No Grade Completed">No Grade Completed</option>
                                                    <option value="Elementary Undergraduate">Elementary Undergraduate</option>
                                                    <option value="Elementary Graduate">Elementary Graduate</option>
                                                    <option value="Highschool Undergraduate">Highschool Undergraduate</option>
                                                    <option value="Highschool Graduate">Highschool Graduate</option>
                                                    <option value="College Undergraduate">College Undergraduate</option>
                                                    <option value="College Graduate">College Graduate</option>
                                                    <option value="Post Baccalaureate">Post Baccalaureate</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-occupation">Occupation</label>
                                        <div class="input__inner">
                                            <input disabled name="occupation" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['occupation'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-religion">Religion</label>
                                        <div class="input__inner">
                                            <input disabled name="religion" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['religion'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-bloodtype">Blood Type</label>
                                        <div class="input__inner">
                                            <div class="select__wrapper">
                                                <select disabled name="blood_type" id="" class="select select--resident-profile input-viewprofile">
                                                    <option value="<?php echo $row['blood_type'] ?>" selected disabled>
                                                        <?php echo $row['blood_type'] ?></option>
                                                    <option value="A+">A+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="AB-">AB-</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-contactnumber">Phone Number</label>
                                        <div class="input__inner">
                                            <input disabled name="phone_number" type="tel" class="input--light300 input-viewprofile" value="<?php echo $row['phone_number'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-contactnumber">Tel. Number</label>
                                        <div class="input__inner">
                                            <input disabled name="tel_number" type="tel" class="input--light300 input-viewprofile" value="<?php echo $row['tel_number'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-email">Email Address</label>
                                        <div class="input__inner">
                                            <input disabled name="email" type="email" class="input--light300 input-viewprofile" value="<?php echo $row['email'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-outsidePH">Outside of the Philippines?</label>
                                        <div class="input__inner">
                                            <div class="toggleswitch__wrapper">
                                                <input <?php if ($row['alien_status'] == "") {
                                                            echo "unchecked";
                                                        } elseif ($row['alien_status'] == "Outside of the Philippines") {
                                                            echo "checked";
                                                        } ?> disabled name="alien_status" type="checkbox" id="" class="toggleswitch toggleswitch--resident-profile input-viewprofile" value="Outside of the Philippines">
                                                <label class="toggleswitch__indicator toggleswitch__indicator--off">No</label>
                                                <label class="toggleswitch__indicator toggleswitch__indicator--on">Yes</label>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-outsidePH">Senior Citizen?</label>
                                        <div class="input__inner">
                                            <div class="toggleswitch__wrapper">
                                                <input <?php if ($row['senior_status'] == "") {
                                                            echo "unchecked";
                                                        } elseif ($row['senior_status'] == "Senior Citizen") {
                                                            echo "checked";
                                                        } ?> disabled name="senior_status" type="checkbox" unchecked id="" class="toggleswitch toggleswitch--resident-profile input-viewprofile" value="Senior Citizen">
                                                <label class="toggleswitch__indicator toggleswitch__indicator--off">No</label>
                                                <label class="toggleswitch__indicator toggleswitch__indicator--on">Yes</label>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-outsidePH">Person with Disability?</label>
                                        <div class="input__inner">
                                            <div class="toggleswitch__wrapper">
                                                <input <?php if ($row['disability_status'] == "") {
                                                            echo "unchecked";
                                                        } elseif ($row['disability_status'] == "Person with Disability") {
                                                            echo "checked";
                                                        } ?> disabled name="disability_status" type="checkbox" id="" class="toggleswitch toggleswitch--resident-profile input-viewprofile">
                                                <label class="toggleswitch__indicator toggleswitch__indicator--off">No</label>
                                                <label class="toggleswitch__indicator toggleswitch__indicator--on">Yes</label>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-disabilitytype">Type of Disability</label>
                                        <div class="input__inner">
                                            <div class="select__wrapper">
                                                <select disabled name="type_disability" id="" class="select select--resident-profile input-viewprofile">
                                                    <option selected disabled value="<?php echo $row['type_disability'] ?>">
                                                        <?php echo $row['type_disability'] ?></option>
                                                    <option value="0">Psychosocial Disability</option>
                                                    <option value="1">Mental Disability</option>
                                                    <option value="2">Chronic Illness</option>
                                                    <option value="3">Learning Disability</option>
                                                    <option value="4">Visual Disability</option>
                                                    <option value="5">Orthopedic Disability</option>
                                                    <option value="6">Communication Disability</option>
                                                    <option value="7">Multiple Disabilities</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-4ps">4Ps?</label>
                                        <div class="input__inner">
                                            <div class="toggleswitch__wrapper">

                                                <input <?php if ($row['4ps_status'] == "") {
                                                            echo "unchecked";
                                                        } elseif ($row['4ps_status'] == "4Ps") {
                                                            echo "checked";
                                                        } ?> disabled name="4ps_status" type="checkbox" id="" class="toggleswitch toggleswitch--resident-profile input-viewprofile" value="4Ps">
                                                <label class="toggleswitch__indicator toggleswitch__indicator--off">No</label>
                                                <label class="toggleswitch__indicator toggleswitch__indicator--on">Yes</label>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-outsidePH">Deceased?</label>
                                        <div class="input__inner">
                                            <div class="toggleswitch__wrapper">
                                                <input <?php if ($row['deceased_status'] == "") {
                                                            echo "unchecked";
                                                        } elseif ($row['deceased_status'] == "Deceased") {
                                                            echo "checked";
                                                        } ?> disabled name="deceased_status" type="checkbox" id="" class="toggleswitch toggleswitch--resident-profile input-viewprofile">
                                                <label class="toggleswitch__indicator toggleswitch__indicator--off">No</label>
                                                <label class="toggleswitch__indicator toggleswitch__indicator--on">Yes</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-deathdate">Date of Death</label>
                                        <div class="input__inner">
                                            <input disabled name="date_of_death" type="date" class="input--light300 input-viewprofile" value="<?php echo $row['date_of_death'] ?>">
                                        </div>
                                    </div>
                                </div>



                            </section>

                        </div>
                        <div class="profile-info__content viewprofile" id="votingTabContent">
                            <section class="profile-info__voting">

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-deceased">Registered Voter?</label>
                                        <div class="input__inner">
                                            <div class="toggleswitch__wrapper">
                                                <input <?php if ($row['voter_status'] == "") {
                                                            echo "unchecked";
                                                        } elseif ($row['voter_status'] == "Registered Voter") {
                                                            echo "checked";
                                                        } ?> disabled name="voter_status" type="checkbox" id="" class="toggleswitch toggleswitch--resident-profile input-viewprofile regVoterToggle" value="Registered Voter">
                                                <label class="toggleswitch__indicator toggleswitch__indicator--off">No</label>
                                                <label class="toggleswitch__indicator toggleswitch__indicator--on">Yes</label>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-votersID">Voter's ID</label>
                                        <div class="input__inner">
                                            <input disabled name="voter_id" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['voter_id'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-precinctnumber">Precinct Number</label>
                                        <div class="input__inner">
                                            <input disabled name="precinct_number" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['precinct_number'] ?>">
                                        </div>
                                    </div>
                                </div>


                            </section>
                        </div>

                        <div class="profile-info__content viewprofile" id="vaccineTabContent">
                            <section class="profile-info__others">


                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-deceased">Received COVID-19 Vaccine?</label>
                                        <div class="input__inner">
                                            <div class="toggleswitch__wrapper">
                                                <input <?php if ($row['vaccine_status'] == "") {
                                                            echo "unchecked";
                                                        } elseif ($row['vaccine_status'] == "Vaccinated" || $row['vaccine_status'] == "wew") {
                                                            echo "checked";
                                                        } ?> name="vaccine_status" id="vaccine_stat" type="checkbox" id="vaccine_stat" class="toggleswitch toggleswitch--resident-profile input-viewprofile" value="Vaccinated">
                                                <label class="toggleswitch__indicator toggleswitch__indicator--off">No</label>
                                                <label class="toggleswitch__indicator toggleswitch__indicator--on">Yes</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-disabilitytype">First Dose</label>
                                        <div class="input__inner">
                                            <div class="select__wrapper">
                                                <select disabled name="vaccine_1" id="" class="select select--resident-profile input-viewprofile">
                                                    <option selected disabled value="<?php echo $row['vaccine_1'] ?>">
                                                        <?php echo $row['vaccine_1'] ?></option>
                                                    <option value="Astrazeneca">Astrazeneca</option>
                                                    <option value="Bharat">Bharat</option>
                                                    <option value="Janssen">Janssen</option>
                                                    <option value="Moderna">Moderna</option>
                                                    <option value="Novavax">Novavax</option>
                                                    <option value="Pfizer">Pfizer</option>
                                                    <option value="Sinovac">Sinovac</option>
                                                    <option value="Sputnik">Sputnik</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-firstdosedate">First Dose Date</label>
                                        <div class="input__inner">
                                            <input disabled name="vaccine_date_1" type="date" class="input--light300 input-viewprofile" value="<?php echo $row['vaccine_date_1'] ?>">
                                        </div>
                                    </div>
                                </div>



                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-disabilitytype">Second Dose</label>
                                        <div class="input__inner">
                                            <div class="select__wrapper">
                                                <select disabled name="vaccine_2" id="" class="select select--resident-profile input-viewprofile">
                                                    <option selected disabled value="<?php echo $row['vaccine_2'] ?>">
                                                        <?php echo $row['vaccine_2'] ?></option>
                                                    <option value="Astrazeneca">Astrazeneca</option>
                                                    <option value="Bharat">Bharat</option>
                                                    <option value="Janssen">Janssen</option>
                                                    <option value="Moderna">Moderna</option>
                                                    <option value="Novavax">Novavax</option>
                                                    <option value="Pfizer">Pfizer</option>
                                                    <option value="Sinovac">Sinovac</option>
                                                    <option value="Sputnik">Sputnik</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-seconddosedate">Second Dose Date</label>
                                        <div class="input__inner">
                                            <input disabled name="vaccine_date_2" type="date" class="input--light300 input-viewprofile" value="<?php echo $row['vaccine_date_2'] ?>">
                                        </div>
                                    </div>
                                </div>


                                <!-- booster -->



                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-deceased">Received Booster Shot?</label>
                                        <div class="input__inner">
                                            <div class="toggleswitch__wrapper">
                                                <label class="toggleswitch__indicator toggleswitch__indicator--off">No</label>
                                                <?php if ($row['booster_status'] == "Boostered") { ?>
                                                    <input disabled name="voter_status" type="checkbox" checked id="" class="toggleswitch toggleswitch--resident-profile input-viewprofile">
                                                <?php } ?>
                                                <?php if ($row['booster_status'] == "") { ?>
                                                    <input disabled name="voter_status" type="checkbox" unchecked id="" class="toggleswitch toggleswitch--resident-profile input-viewprofile">
                                                <?php } ?>
                                                <label class="toggleswitch__indicator toggleswitch__indicator--on">Yes</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-disabilitytype">First Dose</label>
                                        <div class="input__inner">
                                            <div class="select__wrapper">
                                                <select disabled name="booster_1" id="" class="select select--resident-profile input-viewprofile">
                                                    <option selected disabled value="<?php echo $row['booster_1'] ?>">
                                                        <?php echo $row['booster_1'] ?></option>
                                                    <option value="Astrazeneca">Astrazeneca</option>
                                                    <option value="Bharat">Bharat</option>
                                                    <option value="Janssen">Janssen</option>
                                                    <option value="Moderna">Moderna</option>
                                                    <option value="Novavax">Novavax</option>
                                                    <option value="Pfizer">Pfizer</option>
                                                    <option value="Sinovac">Sinovac</option>
                                                    <option value="Sputnik">Sputnik</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-birthday">First Dose Date</label>
                                        <div class="input__inner">
                                            <input disabled name="booster_date_1" type="date" class="input--light300 input-viewprofile" value="<?php echo $row['booster_date_1'] ?>">
                                        </div>
                                    </div>
                                </div>



                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-disabilitytype">Second Dose</label>
                                        <div class="input__inner">
                                            <div class="select__wrapper">
                                                <select disabled name="booster_2" id="" class="select select--resident-profile input-viewprofile">
                                                    <option selected disabled value="<?php echo $row['booster_2'] ?>">
                                                        <?php echo $row['booster_2'] ?></option>
                                                    <option value="Astrazeneca">Astrazeneca</option>
                                                    <option value="Bharat">Bharat</option>
                                                    <option value="Janssen">Janssen</option>
                                                    <option value="Moderna">Moderna</option>
                                                    <option value="Novavax">Novavax</option>
                                                    <option value="Pfizer">Pfizer</option>
                                                    <option value="Sinovac">Sinovac</option>
                                                    <option value="Sputnik">Sputnik</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-birthday">Second Dose Date</label>
                                        <div class="input__inner">
                                            <input disabled name="booster_date_2" type="date" class="input--light300 input-viewprofile" value="<?php echo $row['booster_date_2'] ?>">
                                        </div>
                                    </div>
                                </div>



                            </section>
                        </div>

                        <div class="profile-info__content viewprofile">
                            <section class="profile-info__emergency">

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-emergencyperson">Emergency Contact Person</label>
                                        <div class="input__inner">
                                            <input disabled name="emergency_person" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['emergency_person'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container viewprofile">
                                    <div class="input__wrapper">
                                        <label for="resident-emergencyrelationship">Relationship</label>
                                        <div class="input__inner">
                                            <input disabled name="relationship" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['relationship'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-emergencyaddress">Address</label>
                                        <div class="input__inner">
                                            <input disabled name="emergency_address" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['emergency_address'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-info__container">
                                    <div class="input__wrapper">
                                        <label for="resident-emergencycontact">Contact Number</label>
                                        <div class="input__inner">
                                            <input disabled name="emergency_contact" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['emergency_contact'] ?>">
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


    <!--=============== MODALS ===============-->
    <div class="modal__wrapper" id="modal-delete">
        <section class="modal__window modal__window--md">
            <header class="modal__header">
                <i class='bx bxs-archive bx-sm' style="color:#222; margin-right:10px;"></i>

                <h3> Delete Profile</h3>
                <button type="button" class="modal__close close" aria-label="Close modal window">
                    <i class='bx bx-x'></i>
                </button>
            </header>
            <div class="modal__body">

                <p><strong> Are you sure you want to delete "<?php echo $row["first_name"]; ?> <?php echo $row["mid_name"]; ?>
                        <?php echo $row["last_name"]; ?><?php echo $row["suffix"]; ?>"?</strong></p>

                <p>You can restore this in the Residents Archive.</p>
            </div>
            <footer class="modal__footer">
                <a href="delete.php?id=<?php echo $row["id"]; ?>" class="button button--danger button--md">DELETE</a>
                <a href="#" class="button button--dark button--md modal__cancel close">CANCEL</a>

            </footer>
        </section>
    </div>


    <!-- <div class="modal__wrapper" id="modal-editprofile">
        <section class="modal__window modal__window--sm">
            <header class="modal__header">
                <h3>Login</h3>
                <button type="button" class="modal__close close" aria-label="Close modal window">
                    <i class='bx bx-x'></i>
                </button>
            </header>
            <div class="modal__body">
                <div class="input__wrapper input__wrapper--block input__wrapper--login">
                    <div class="input__inner--with-leading-icon input__inner">
                        <i class="bx bxs-user-circle input__icon input__icon--leading"></i>
                        <input name="first_name" type="text" class="input--light300 input--login" value="" placeholder="Username" />
                    </div>
                    <div class="input__message"></div>
                </div>

                <div class="input__wrapper input__wrapper--block input__wrapper--login">
                    <div class="input__inner--with-leading-icon input__inner">
                        <i class="bx bxs-lock input__icon input__icon--leading"></i>
                        <input name="first_name" type="password" class="input--light300 input--login" value="" placeholder="Password" />
                    </div>
                    <div class="input__message"></div>
                </div>
            </div>
            <footer class="modal__footer">
                <a href="edit-resident.php?id=<?php echo $row["id"]; ?>" class="button button--primary button--md" id="login-editprofile">LOGIN</a>
                <a href="#" class="button button--dark button--md modal__cancel close">CANCEL</a>

            </footer>
        </section>
    </div> -->



<?php }
?>


</body>


</html>