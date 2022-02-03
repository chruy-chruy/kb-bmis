<?php
$page = 'Residents';
$headerTitle = 'Add New Resident';
include "../../db_conn.php";
require_once "../../includes/header.php";
?>
<main>
  <div class="content">
    <section class="residents">

      <form id="add_residents" action="create.php" method="post" enctype="multipart/form-data" data-parsley-validate="">
        <div>
          <div class="card">
            <a href="#" class="button button--md back-btn modal-trigger" data-modal-id="modal-cancel">
              <i class='bx bx-left-arrow-circle' data-modal-id="modal-cancel"></i>
              Back
            </a>

            <div class="card__body">
              <div class="card__body-content">
                <div class="profile__img profile__img--change">
                  <div id="profile">
                    <img src="../residents/images/default-img.svg" alt="">
                  </div>
                  <div id="results"></div>

                  <input type="hidden" name="default" value="default-img.svg">

                  <a href="#" class="button button--icon-sm modal-trigger" data-modal-id="modal-camera" onclick="open_cam()">
                    <i class='bx bx-camera' data-modal-id="modal-camera"></i>
                  </a>
                </div>

                <ul class="profile-info__list newresident">
                  <li class="profile-info__item profile-info__item--active">
                    <a href="#">
                      Basic Information
                    </a>
                  </li>

                  <li class="profile-info__item">
                    <a href="#">
                      Voting
                    </a>
                  </li>

                  <li class="profile-info__item">
                    <a href="#">
                      Others
                    </a>
                  </li>

                  <li class="profile-info__item">
                    <a href="#">
                      For Emergency
                    </a>
                  </li>

                </ul>

                <div class="profile-info__content newresident" style="display: block;">

                  <section class="profile-info__basic-info">

                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-first-name">First Name <strong style="color:red;">*</strong></label>
                        <div class="input__inner">
                          <input type="text" name="first_name" class="input--light300" required>
                        </div>
                      </div>
                    </div>

                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-last-name">Last Name <strong style="color:red;">*</strong></label>
                        <div class="input__inner">
                          <input type="text" name="last_name" class="input--light300" required pattern="[^0-9]*" oninvalid="this.setCustomValidity('Numbers are not allowed.')" onchange="try{setCustomValidity('')}catch(e){}" oninput="setCustomValidity(' ')">
                        </div>
                      </div>
                    </div>

                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-middle-name">Middle Name <strong style="color:red;">*</strong></label>
                        <div class="input__inner">
                          <input type="text" name="mid_name" class="input--light300" required pattern="[^0-9]*" oninvalid="this.setCustomValidity('Numbers are not allowed.')" onchange="try{setCustomValidity('')}catch(e){}" oninput="setCustomValidity(' ')">
                        </div>
                      </div>
                    </div>

                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-suffix">Suffix</label>
                        <div class="input__inner">
                          <input type="text" name="suffix" class="input--light300" pattern="[^0-9]*" oninvalid="this.setCustomValidity('Numbers are not allowed.')" onchange="try{setCustomValidity('')}catch(e){}" oninput="setCustomValidity(' ')" maxlength="3">
                        </div>
                      </div>
                    </div>

                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-gender">Gender <strong style="color:red;">*</strong></label>
                        <div class="input__inner">
                          <div class="select__wrapper">
                            <select name="sex" id="" class="select select--resident-profile" required>
                              <option selected disabled hidden value="">Select</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-birthday">Date of Birth <strong style="color:red;">*</strong></label>
                        <div class="input__inner">
                          <input type="date" id="dob" name="date_of_birth" class="input--light300" value="" required>
                        </div>
                      </div>
                    </div>

                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-housenumber">House Number <strong style="color:red;">*</strong></label>
                        <div class="input__inner">
                          <input type="number" name="house_number" class="input--light300" value="" required>
                        </div>
                      </div>
                    </div>

                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-street">Street <strong style="color:red;">*</strong></label>
                        <div class="input__inner">
                          <input type="text" name="street" class="input--light300" value="" required>
                        </div>
                      </div>
                    </div>


                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-purok">Purok <strong style="color:red;">*</strong></label>
                        <div class="input__inner">
                          <!-- <input type="text" name="purok" class="input--light300" value="<?php echo $row['purok'] ?>" required> -->

                          <div class="select__wrapper">
                            <select name="purok" id="" class="select select--resident-profile" required>
                              <option selected value="" disabled>Select</option>
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
                        <label for="resident-birthplace">Place of Birth <strong style="color:red;">*</strong></label>
                        <div class="input__inner">
                          <input type="text" name="place_of_birth" class="input--light300" value="" required>
                        </div>
                      </div>
                    </div>

                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-civilstatus">Civil Status <strong style="color:red;">*</strong></label>
                        <div class="input__inner">
                          <div class="select__wrapper">
                            <select name="civil_status" id="" class="select select--resident-profile" required>
                              <option disabled selected>Select</option>
                              <option value="Single">Single</option>
                              <option value="Married">Married</option>
                              <option value="Widowed">Widowed</option>
                              <option value="Divorced">Divorced</option>
                              <option value="Legally Separated">Legally Separated</option>
                              <option value="Annulled">Annulled</option>
                              <option value="Nullified">Nullified</option>
                              <option value="Undisclosed">Undisclosed</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-nationality">Nationality <strong style="color:red;">*</strong></label>
                        <div class="input__inner">
                          <input type="text" name="citizenship" class="input--light300" value="" required pattern="[^0-9]*" oninvalid="this.setCustomValidity('Numbers are not allowed.')" onchange="try{setCustomValidity('')}catch(e){}" oninput="setCustomValidity(' ')">
                        </div>
                      </div>
                    </div>

                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-educationalattainment">Educational Attainment <strong style="color:red;">*</strong></label>
                        <div class="input__inner">
                          <div class="select__wrapper">
                            <select name="education_status" id="" class="select select--resident-profile" required>
                              <option disabled selected>Select</option>
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
                        <label for="resident-occupation">Occupation <strong style="color:red;">*</strong></label>
                        <div class="input__inner">
                          <input type="text" name="occupation" class="input--light300" value="" required pattern="[^0-9]*" oninvalid="this.setCustomValidity('Numbers are not allowed.')" onchange="try{setCustomValidity('')}catch(e){}" oninput="setCustomValidity(' ')">
                        </div>
                      </div>
                    </div>

                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-religion">Religion</label>
                        <div class="input__inner">
                          <input type="text" name="religion" class="input--light300" value="" pattern="[^0-9]*" oninvalid="this.setCustomValidity('Numbers are not allowed.')" onchange="try{setCustomValidity('')}catch(e){}" oninput="setCustomValidity(' ')">
                        </div>
                      </div>
                    </div>

                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-bloodtype">Blood Type</label>
                        <div class="input__inner">
                          <div class="select__wrapper">
                            <select name="blood_type" id="" class="select select--resident-profile">
                              <option disabled selected>Select</option>
                              <option value="A+">A+</option>
                              <option value="A-">A-</option>
                              <option value="B+">B+</option>
                              <option value="B-">B-</option>
                              <option value="O+">O+</option>
                              <option value="O-">O-</option>
                              <option value="AB+">AB+</option>
                              <option value="AB-">AB-</option>
                              <option value="RH-NULL">RH-NULL</option>
                              <option value="Unknown">Unknown</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-contactnumber">Phone Number <strong style="color:red;">*</strong></label>
                        <div class="input__inner">
                          <input type="text" name="phone_number" class="input--light300" value="" required pattern="09[^a-zA-ZÀ-ž]{9}" title="09XXXXXXXXX" maxlength="11">
                        </div>
                      </div>
                    </div>

                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-contactnumber">Tel. Number</label>
                        <div class="input__inner">
                          <input type="text" name="tel_number" class="input--light300" value="" pattern="[^a-zA-ZÀ-ž]*" oninvalid="this.setCustomValidity('Alphabets are not allowed.')" onchange="try{setCustomValidity('')}catch(e){}" oninput="setCustomValidity(' ')">
                        </div>
                      </div>
                    </div>

                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-email">Email Address</label>
                        <div class="input__inner">
                          <input type="email" name="email" class="input--light300" value="">
                        </div>
                      </div>
                    </div>

                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-outsidePH">Outside of the Philippines?</label>
                        <div class="input__inner">
                          <div class="toggleswitch__wrapper">
                            <input type="checkbox" id="" name="alien_status" class="toggleswitch toggleswitch--resident-profile" value="Outside of the Philippines">
                            <label class="toggleswitch__indicator toggleswitch__indicator--off">No</label>
                            <label class="toggleswitch__indicator toggleswitch__indicator--on">Yes</label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-seniorcitizen">Senior Citizen?</label>
                        <div class="input__inner">
                          <div class="toggleswitch__wrapper">
                            <input type="checkbox" id="" name="senior_status" class="toggleswitch toggleswitch--resident-profile" value="Senior Citizen">
                            <label class="toggleswitch__indicator toggleswitch__indicator--off">No</label>
                            <label class="toggleswitch__indicator toggleswitch__indicator--on">Yes</label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-PWD">Person with Disability?</label>
                        <div class="input__inner">
                          <div class="toggleswitch__wrapper">
                            <input type="checkbox" id="disabilities" name="disability_status" class="toggleswitch toggleswitch--resident-profile" value="Person with Disability">
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
                            <select name="type_disability" id="typedisabilities" class="select select--resident-profile">
                              <option selected value="">Select</option>
                              <option value="Psychosocial Disability">Psychosocial Disability</option>
                              <option value="Mental Disability">Mental Disability</option>
                              <option value="Chronic I llness">Chronic Illness</option>
                              <option value="Learning Disability">Learning Disability</option>
                              <option value="Visual Disability">Visual Disability</option>
                              <option value="Orthopedic Disability">Orthopedic Disability</option>
                              <option value="Communication Disability">Communication Disability</option>
                              <option value="Multiple Disabilities">Multiple Disabilities</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-4Ps">4Ps?</label>
                        <div class="input__inner">
                          <div class="toggleswitch__wrapper">
                            <input type="checkbox" name="_4ps_status" id="" class="toggleswitch toggleswitch--resident-profile" value="4Ps">
                            <label class="toggleswitch__indicator toggleswitch__indicator--off">No</label>
                            <label class="toggleswitch__indicator toggleswitch__indicator--on">Yes</label>
                          </div>
                        </div>
                      </div>
                    </div>




                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-deceased">Deceased?</label>
                        <div class="input__inner">
                          <div class="toggleswitch__wrapper">
                            <input type="checkbox" name="deceased_status" id="deceased" class="toggleswitch toggleswitch--resident-profile" value="Deceased">
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
                          <input type="date" id="datedeceased" name="date_of_death" class="input--light300">
                        </div>
                      </div>
                    </div>



                  </section>
                </div>

                <div class="profile-info__content newresident">
                  <section class="profile-info__voting">

                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-deceased">Registered Voter?</label>
                        <div class="input__inner">
                          <div class="toggleswitch__wrapper">
                            <input type="checkbox" name="voter_status" name="" id="voter_stat" class="toggleswitch toggleswitch--resident-profile" value="Registered Voter">
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
                          <input type="text" id="voters_id" name="voter_id" class="input--light300">
                        </div>
                      </div>
                    </div>

                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-precinctnumber">Precinct Number</label>
                        <div class="input__inner">
                          <input type="text" id="precinct_no" name="precinct_number" class="input--light300">
                        </div>
                      </div>
                    </div>


                  </section>
                </div>

                <div class="profile-info__content newresident">
                  <section class="profile-info__others">


                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-vaccinesadministered">Vaccines Administered</label>
                        <div class="input__inner">
                          <input type="text" name="vaccine_admin" class="input--light300">
                        </div>
                      </div>
                    </div>

                  </section>
                </div>

                <div class="profile-info__content newresident">
                  <section class="profile-info__emergency">

                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-emergencyperson">Emergency Person <strong style="color:red;">*</strong></label>
                        <div class="input__inner">
                          <input type="text" name="emergency_person" class="input--light300" required>
                        </div>
                      </div>
                    </div>

                    <div class="profile-info__container viewprofile">
                      <div class="input__wrapper">
                        <label for="resident-emergencyrelationship">Relationship <strong style="color:red;">*</strong></label>
                        <div class="input__inner">
                          <input type="text" name="relationship" class="input--light300" required pattern="[^0-9]*" oninvalid="this.setCustomValidity('Numbers are not allowed.')" onchange="try{setCustomValidity('')}catch(e){}" oninput="setCustomValidity(' ')">
                        </div>
                      </div>
                    </div>

                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-emergencyaddress">Emergency Address <strong style="color:red;">*</strong></label>
                        <div class="input__inner">
                          <input type="text" name="emergency_address" class="input--light300" required>
                        </div>
                      </div>
                    </div>

                    <div class="profile-info__container">
                      <div class="input__wrapper">
                        <label for="resident-emergencycontact">Emergency Contact <strong style="color:red;">*</strong></label>
                        <div class="input__inner">
                          <input type="text" name="emergency_contact" class="input--light300" required pattern="09[^a-zA-ZÀ-ž]{9}" title="09XXXXXXXXX" maxlength="11">
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
                <button class="button button--primary button--md" name="btn_save">SAVE</button>
                <a href="#" class="button button--dark button--md modal-trigger" data-modal-id="modal-cancel">CANCEL</a>
              </div>

              <!-- card end -->
            </div>




    </section>
  </div>


</main>

<!--=============== MODALS ===============-->
<div class="modal__wrapper" id="modal-cancel">
  <section class="modal__window modal__window--sm">
    <header class="modal__header">
      <h3>Cancel</h3>
      <button type="button" class="modal__close close" aria-label="Close modal window">
        <i class='bx bx-x'></i>
      </button>
    </header>
    <div class="modal__body">
      Are you sure you want to cancel?
    </div>
    <footer class="modal__footer">
      <a href="index.php" class="button button--primary button--md modal__yes-cancel">YES</a>
      <a href="#" class="button button--dark button--md close">NO</a>

    </footer>
  </section>
</div>

<div class="modal__wrapper" id="modal-camera">
  <section class="modal__window modal__window--md">
    <header class="modal__header">
      <h3>Camera</h3>
      <button type="button" class="modal__close close" aria-label="Close modal window" onClick="exit_webcam()">
        <i class='bx bx-x'></i>
      </button>
    </header>

    <div class="modal__body">
      <div class="row">
        <div class="col-md-6">
          <div id="my_camera"></div>
          <br />
          <input type="hidden" name="image" class="image-tag">
        </div>
        <div class="col-md-6">

        </div>
        <div class="col-md-12 text-center">
          <br />
        </div>
      </div>
    </div>

    <footer class="modal__footer">
      <input type="button" value="Capture" class="button button--primary button--md close " onClick="take_snapshot()" />
      <input type="button" value="Cancel" class="button button--dark button--md close" onClick="exit_webcam()" />
    </footer>
    </form>
  </section>
</div>


</body>

</html>