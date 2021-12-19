<?php
include "../../db_conn.php";
$id = $_GET["id"];
$squery = mysqli_query($conn, "select * from residents where id = $id");
while ($row = mysqli_fetch_array($squery)) { ?>

<?php
$headerTitle = 'Edit';
$page = 'Residents';
require_once "../../includes/header.php";
?>

    <main>
      <div class="content">
       <section class="residents">
          <form id="add_residents" action="update.php" method="post" enctype="multipart/form-data" data-parsley-validate="">
            
          <div class="card">
            <a href="#" class="button button--md back-btn modal-trigger" data-modal-id="modal-cancel">
              <i class='bx bx-left-arrow-circle' data-modal-id="modal-cancel"></i>
              Back
            </a>

            <div class="card__body">
              <div class="card__body-content">

                <div class="profile__img profile__img--edit-resident">
                  <img src="../../assets/img/user3.jpg" alt="">
                  <a href="#" class="button button--md button--icon button--icon-light button--icon-sm modal-trigger" data-modal-id="modal-change-picture">
                    <i class='bx bx-edit' data-modal-id="modal-change-picture"></i>
            
                  </a>
                </div>

                            <!-- <div class="row">
                            <a href="#" class="button button--sm button--dark-outline camera-btn modal-trigger" data-modal-id="modal-change-picture">
                              <i class='bx bx-file' ></i>
                              Change picture
                              </a>
                            </div> -->

                            <div class="profile__name profile__name--viewprofile" style="margin-bottom: 30px;">
                              <?php echo $row["first_name"]; ?>
                              <?php echo $row["mid_name"]; ?>
                              <?php echo $row["last_name"]; ?>
                              <?php echo $row["suffix"]; ?>
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

                              <input type="text" hidden name="id" class="input--light300" required value="<?php echo $row['id'] ?>" >

                              <div class="profile-info__container">
                               <div class="input__wrapper">
                                <label for="resident-first-name">First Name</label>
                                 <div class="input__inner">
                                   <input type="text" name="first_name" class="input--light300" required value="<?php echo $row['first_name'] ?>" >
                                 </div>
                               </div>
                              </div>
                              
                              <div class="profile-info__container">
                               <div class="input__wrapper">
                                <label for="resident-last-name">Last Name</label>
                                 <div class="input__inner">
                                   <input type="text" name="last_name" class="input--light300" required value="<?php echo $row['last_name'] ?>">
                                 </div>
                               </div>
                              </div>
        
                              <div class="profile-info__container">
                               <div class="input__wrapper">
                                <label for="resident-middle-name">Middle Name</label>
                                 <div class="input__inner">
                                   <input type="text" name="mid_name" class="input--light300" required value="<?php echo $row['mid_name'] ?>">
                                 </div>
                               </div>
                              </div>
        
                              <div class="profile-info__container">
                                <div class="input__wrapper">
                                 <label for="resident-suffix">Suffix</label>
                                  <div class="input__inner">
                                    <input type="text" name="suffix" class="input--light300" value="<?php echo $row['suffix'] ?>">
                                  </div>
                                </div>
                               </div>
                               
                               <div class="profile-info__container">
                                 <div class="input__wrapper">
                                  <label for="resident-gender">Gender</label>
                                   <div class="input__inner">
                                     <div class="select__wrapper">
                                     <select name="sex" id="" class="select select--resident-profile" required>
                                       <option selected hidden value="<?php echo $row['sex'] ?>"><?php echo $row['sex'] ?></option>
                                       <option value="Male">Male</option>
                                       <option value="Female" >Female</option>
                                     </select>
                                    </div>
                                   </div>
                                 </div>
                                </div>
         
                               <div class="profile-info__container">
                                <div class="input__wrapper">
                                 <label for="resident-birthday">Date of Birth</label>
                                  <div class="input__inner">
                                    <input type="date" name="date_of_birth" class="input--light300" value="<?php echo $row['date_of_birth'] ?>" required>
                                  </div>
                                </div>
                               </div>
         
                               <div class="profile-info__container">
                                 <div class="input__wrapper">
                                  <label for="resident-housenumber">House Number</label>
                                   <div class="input__inner">
                                     <input type="text" name="house_number" class="input--light300" value="<?php echo $row['house_number'] ?>" required>
                                   </div>
                                 </div>
                                </div>
         
                               <div class="profile-info__container">
                                 <div class="input__wrapper">
                                  <label for="resident-street">Street</label>
                                   <div class="input__inner">
                                     <input type="text" name="street" class="input--light300" value="<?php echo $row['street'] ?>" required>
                                   </div>
                                 </div>
                                </div>
         
                               <div class="profile-info__container">
                                 <div class="input__wrapper">
                                  <label for="resident-purok">Purok</label>
                                   <div class="input__inner">
                                     <input type="text" name="purok" class="input--light300" value="<?php echo $row['purok'] ?>" required>
                                   </div>
                                 </div>
                                </div>
         
                               <div class="profile-info__container">
                                 <div class="input__wrapper">
                                  <label for="resident-birthplace">Place of Birth</label>
                                   <div class="input__inner">
                                     <input type="text" name="place_of_birth" class="input--light300" value="<?php echo $row['place_of_birth'] ?>" required>
                                   </div>
                                 </div>
                                </div>
                                
                               <div class="profile-info__container">
                                 <div class="input__wrapper">
                                  <label for="resident-civilstatus">Civil Status</label>
                                   <div class="input__inner">
                                     <div class="select__wrapper">
                                       <select name="civil_status" id="" class="select select--resident-profile" required>
                                         <option selected value="<?php echo $row['civil_status'] ?>" hidden><?php echo $row['civil_status'] ?></option>
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
                                     <input type="text" name="citizenship" class="input--light300" value="<?php echo $row['citizenship'] ?>">
                                   </div>
                                 </div>
                                </div>
         
                               <div class="profile-info__container">
                                 <div class="input__wrapper">
                                  <label for="resident-educationalattainment">Educational Attainment</label>
                                   <div class="input__inner">
                                     <input type="text" name="education_status" class="input--light300" value="<?php echo $row['education_status'] ?>">
                                   </div>
                                 </div>
                                </div>
         
                               <div class="profile-info__container">
                                 <div class="input__wrapper">
                                  <label for="resident-occupation">Occupation</label>
                                   <div class="input__inner">
                                     <input type="text" name="occupation" class="input--light300" value="<?php echo $row['occupation'] ?>">
                                   </div>
                                 </div>
                                </div>
                                
                               <div class="profile-info__container">
                                 <div class="input__wrapper">
                                  <label for="resident-religion">Religion</label>
                                   <div class="input__inner">
                                     <input type="text" name="religion" class="input--light300" value="<?php echo $row['religion'] ?>">
                                   </div>
                                 </div>
                                </div>
                                
                               <div class="profile-info__container">
                                 <div class="input__wrapper">
                                  <label for="resident-bloodtype">Blood Type</label>
                                   <div class="input__inner">
                                     <div class="select__wrapper">
                                       <select name="blood_type" id="" class="select select--resident-profile">
                                         <option selected hidden value="<?php echo $row['blood_type'] ?>"><?php echo $row['blood_type'] ?></option>
                                         <option value="a+">A+</option>
                                         <option value="a-">A-</option>
                                         <option value="b+">B+</option>
                                         <option value="b-">B-</option>
                                         <option value="o+">O+</option>
                                         <option value="o-">O-</option>
                                         <option value="ab+">AB+</option>
                                         <option value="ab-">AB-</option>
                                       </select>
                                      </div>
                                   </div>
                                 </div>
                                </div>
                                
                                <div class="profile-info__container">
                                 <div class="input__wrapper">
                                  <label for="resident-contactnumber">Phone Number</label>
                                   <div class="input__inner">
                                     <input type="tel" name="phone_number" class="input--light300" value="<?php echo $row['phone_number'] ?>">
                                   </div>
                                 </div>
                                </div>

                                <div class="profile-info__container">
                                 <div class="input__wrapper">
                                  <label for="resident-contactnumber">Tel Number</label>
                                   <div class="input__inner">
                                     <input type="tel" name="tel_number" class="input--light300" value="<?php echo $row['tel_number'] ?>">
                                   </div>
                                 </div>
                                </div>
                                
                                <div class="profile-info__container">
                                 <div class="input__wrapper">
                                  <label for="resident-email">Email Address</label>
                                   <div class="input__inner">
                                     <input type="email" name="email" class="input--light300" value="<?php echo $row['email'] ?>">
                                   </div>
                                 </div>
                                </div>
                                
                               <div class="profile-info__container">
                                 <div class="input__wrapper">
                                  <label for="resident-outsidePH">Outside of the Philippines?</label>
                                   <div class="input__inner">
                                     <div class="toggleswitch__wrapper">
                                     <?php if($row['alien_status'] == "" ) {?>
                                  <input  name="alien_status" type="checkbox" unchecked id="" class="toggleswitch toggleswitch--resident-profile input-viewprofile" value="Outside of the Philippines">
                                  <label class="toggleswitch__indicator toggleswitch__indicator--off">No</label>
                                  <label class="toggleswitch__indicator toggleswitch__indicator--on">Yes</label>
                                  <?php }?> 
                                  
                                  <?php if($row['alien_status'] == "Outside of the Philippines" ) {?>
                                  <input  name="alien_status" type="checkbox" checked id="" class="toggleswitch toggleswitch--resident-profile input-viewprofile" value="Outside of the Philippines">
                                  <label class="toggleswitch__indicator toggleswitch__indicator--off">No</label>
                                  <label class="toggleswitch__indicator toggleswitch__indicator--on" >Yes</label>
                                 <?php }?>  
                                     </div>
                                   </div>
                                 </div>
                                </div>
                                
                               <div class="profile-info__container">
                                 <div class="input__wrapper">
                                  <label for="resident-seniorcitizen">Senior Citizen?</label>
                                   <div class="input__inner">
                                     <div class="toggleswitch__wrapper">
                                     <?php if($row['senior_status'] == "" ) {?>
                                  <input  name="senior_status" type="checkbox" unchecked id="" class="toggleswitch toggleswitch--resident-profile input-viewprofile" value="Senior Citizen">
                                  <label class="toggleswitch__indicator toggleswitch__indicator--off">No</label>
                                  <label class="toggleswitch__indicator toggleswitch__indicator--on">Yes</label>
                                  <?php }?> 
                                  
                                  <?php if($row['senior_status'] == "Senior Citizen" ) {?>
                                  <input  name="senior_status" type="checkbox" checked id="" class="toggleswitch toggleswitch--resident-profile input-viewprofile" value="Senior Citizen">
                                  <label class="toggleswitch__indicator toggleswitch__indicator--off">No</label>
                                  <label class="toggleswitch__indicator toggleswitch__indicator--on" >Yes</label>
                                 <?php }?>
                                     </div>
                                   </div>
                                 </div>
                                </div>
                                
                               <div class="profile-info__container">
                                 <div class="input__wrapper">
                                  <label for="resident-PWD">Person with Disability?</label>
                                   <div class="input__inner">
                                     <div class="toggleswitch__wrapper">
                                     <?php if($row['disability_status'] == "" ) {?>
                                  <input  name="disability_status" type="checkbox" unchecked id="" class="toggleswitch toggleswitch--resident-profile input-viewprofile" value="Person with Disability">
                                  <label class="toggleswitch__indicator toggleswitch__indicator--off">No</label>
                                  <label class="toggleswitch__indicator toggleswitch__indicator--on">Yes</label>
                                  <?php }?> 
                                  
                                  <?php if($row['disability_status'] == "Person with Disability" ) {?>
                                  <input  name="disability_status" type="checkbox" checked id="" class="toggleswitch toggleswitch--resident-profile input-viewprofile" value="Person with Disability">
                                  <label class="toggleswitch__indicator toggleswitch__indicator--off">No</label>
                                  <label class="toggleswitch__indicator toggleswitch__indicator--on" >Yes</label>
                                 <?php }?>
                                     </div>
                                   </div>
                                 </div>
                                </div>
                                
                               <div class="profile-info__container">
                                 <div class="input__wrapper">
                                  <label for="resident-disabilitytype">Type of Disability</label>
                                   <div class="input__inner">
                                     <div class="select__wrapper">
                                       <select name="type_disability" id="" class="select select--resident-profile">
                                         <option selected hidden value="<?php echo $row['type_disability'] ?>"><?php echo $row['type_disability'] ?></option>
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
                                     <?php if($row['4ps_status'] == "" ) {?>
                                  <input  name="4ps_status" type="checkbox" unchecked id="" class="toggleswitch toggleswitch--resident-profile input-viewprofile" value="4Ps">
                                  <label class="toggleswitch__indicator toggleswitch__indicator--off">No</label>
                                  <label class="toggleswitch__indicator toggleswitch__indicator--on">Yes</label>
                                  <?php }?> 
                                  
                                  <?php if($row['4ps_status'] == "4Ps" ) {?>
                                  <input  name="4ps_status" type="checkbox" checked id="" class="toggleswitch toggleswitch--resident-profile input-viewprofile" value="4Ps">
                                  <label class="toggleswitch__indicator toggleswitch__indicator--off">No</label>
                                  <label class="toggleswitch__indicator toggleswitch__indicator--on" >Yes</label>
                                 <?php }?>
                                     </div>
                                   </div>
                                 </div>
                                </div>
                                
                               <div class="profile-info__container">
                                 <div class="input__wrapper">
                                  <label for="resident-deceased">Deceased?</label>
                                   <div class="input__inner">
                                     <div class="toggleswitch__wrapper">
                                     <?php if($row['deceased_status'] == "" ) {?>
                                  <input  name="deceased_status" type="checkbox" unchecked id="" class="toggleswitch toggleswitch--resident-profile input-viewprofile" value="Deceased">
                                  <label class="toggleswitch__indicator toggleswitch__indicator--off">No</label>
                                  <label class="toggleswitch__indicator toggleswitch__indicator--on">Yes</label>
                                  <?php }?> 
                                  
                                  <?php if($row['deceased_status'] == "Deceased" ) {?>
                                  <input  name="deceased_status" type="checkbox" checked id="" class="toggleswitch toggleswitch--resident-profile input-viewprofile" value="Deceased">
                                  <label class="toggleswitch__indicator toggleswitch__indicator--off">No</label>
                                  <label class="toggleswitch__indicator toggleswitch__indicator--on" >Yes</label>
                                 <?php }?>
                                     </div>
                                   </div>
                                 </div>
                                </div>
                                
                               <div class="profile-info__container">
                                 <div class="input__wrapper">
                                  <label for="resident-deathdate">Date of Death</label>
                                   <div class="input__inner">
                                     <input type="date" name="date_of_death" class="input--light300" value="<?php echo $row['date_of_death'] ?>">
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
                                        <?php if($row['voter_status'] == "" ) {?>
                                  <input  name="voter_status" type="checkbox" unchecked id="" class="toggleswitch toggleswitch--resident-profile input-viewprofile" value="Registered Voter">
                                  <label class="toggleswitch__indicator toggleswitch__indicator--off">No</label>
                                  <label class="toggleswitch__indicator toggleswitch__indicator--on">Yes</label>
                                  <?php }?> 
                                  
                                  <?php if($row['voter_status'] == "Registered Voter" ) {?>
                                  <input  name="voter_status" type="checkbox" checked id="" class="toggleswitch toggleswitch--resident-profile input-viewprofile" value="Registered Voter">
                                  <label class="toggleswitch__indicator toggleswitch__indicator--off">No</label>
                                  <label class="toggleswitch__indicator toggleswitch__indicator--on" >Yes</label>
                                 <?php }?>
                                        </div>
                                      </div>
                                    </div>
                                   </div>
                                
                                   <div class="profile-info__container">
                                    <div class="input__wrapper">
                                     <label for="resident-votersID">Voter's ID</label>
                                      <div class="input__inner">
                                        <input type="text" name="voter_id" class="input--light300" value="<?php echo $row['voter_id'] ?>">
                                      </div>
                                    </div>
                                   </div>
                               
                                   <div class="profile-info__container">
                                    <div class="input__wrapper">
                                     <label for="resident-precinctnumber">Precinct Number</label>
                                      <div class="input__inner">
                                        <input type="text" name="precinct_number" class="input--light300" value="<?php echo $row['precinct_number'] ?>">
                                      </div>
                                    </div>
                                   </div>
                                   
                                   
                                </section>
                                </div>
        
                                <div class="profile-info__content newresident">
                                  <section class="profile-info__others">
        
                                    <div class="profile-info__container">
                                      <div class="input__wrapper">
                                       <label for="resident-nattionalID">National ID</label>
                                        <div class="input__inner">
                                          <input type="text" name="national_id" class="input--light300" value="<?php echo $row['national_id'] ?>">
                                        </div>
                                      </div>
                                     </div>
        
                                     <div class="profile-info__container">
                                      <div class="input__wrapper">
                                       <label for="resident-vaccinesadministered">Vaccines Administered</label>
                                        <div class="input__inner">
                                          <input type="text" name="vaccine_admin" class="input--light300" value="<?php echo $row['vaccine_admin'] ?>">
                                        </div>
                                      </div>
                                     </div>
        
                                  </section>
                                </div>
        
                                <div class="profile-info__content newresident">
                                  <section class="profile-info__emergency">
        
                                    <div class="profile-info__container">
                                      <div class="input__wrapper">
                                       <label for="resident-emergencyperson">Emergency Person</label>
                                        <div class="input__inner">
                                          <input type="text" name="emergency_person" class="input--light300" value="<?php echo $row['emergency_person'] ?>">
                                        </div>
                                      </div>
                                     </div>
        
                                    <div class="profile-info__container viewprofile">
                                      <div class="input__wrapper">
                                       <label for="resident-emergencyrelationship">Relationship</label>
                                        <div class="input__inner">
                                          <input type="text" name="relationship" class="input--light300" value="<?php echo $row['relationship'] ?>">
                                        </div>
                                      </div>
                                     </div>
        
                                     <div class="profile-info__container">
                                      <div class="input__wrapper">
                                       <label for="resident-emergencyaddress">Emergency Address</label>
                                        <div class="input__inner">
                                          <input type="text" name="emergency_address" class="input--light300" value="<?php echo $row['emergency_address'] ?>">
                                        </div>
                                      </div>
                                     </div>
        
                                     <div class="profile-info__container">
                                      <div class="input__wrapper">
                                       <label for="resident-emergencycontact">Emergency Contact</label>
                                        <div class="input__inner">
                                          <input type="text" name="emergency_contact" class="input--light300" value="<?php echo $row['emergency_address'] ?>">
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
                  <button  class="button button--primary button--md" name="btn_update">Save</button>
                  <a href="#"; class="button button--dark button--md modal-trigger" data-modal-id="modal-cancel">Cancel</a>
                </div>
              </div>

              <!-- card end -->
            </div> 

                        
          </form>
                        
        </section>
      </div>
    </main>

    <!--=============== MODALS ===============-->
            <div class="modal__wrapper" id="modal-cancel">
              <section class="modal__window modal__window--sm">
                <header class="modal__header">
                  <button
                    type="button"
                    class="modal__close close"
                    aria-label="Close modal window"
                  >
                  <i class='bx bx-x'></i>
                  </button>
                </header>
                <div class="modal__body">
                Are you sure you want to cancel?
                </div>
                <footer class="modal__footer">
                  <a href="index.php" class="button button--primary button--md modal__yes-cancel">Yes</a>
                  <a href="#" class="button button--dark button--md close">No</a>
                  
                </footer>
              </section>
            </div>


            <div class="modal__wrapper" id="modal-change-picture">
              <section class="modal__window modal__window--sm">
                <header class="modal__header">
                  <h3>Change Picture</h3>
                  <button
                    type="button"
                    class="modal__close close"
                    aria-label="Close modal window"
                  >
                  <i class='bx bx-x'></i>
                  </button>
                </header>
                <div class="modal__body">
                <div class="row">
                    <div class="input__wrapper" style="margin: 10px 0;">
                        <div class="input__inner">
                          <input type="file" class="input--light300">
                        </div>
                      </div>
                </div>
                  or
                <div class="row">
                  <a href="#" class="button button--sm button--light camera-btn modal-trigger" style="margin: 10px 0;" data-modal-id="modal-camera">
                    <i class='bx bx-camera' data-modal-id="modal-camera"></i>
                    Open Camera
                  </a>
                </div>
                </div>
                <footer class="modal__footer">
                  <a href="#" class="button button--dark button--md close">Cancel</a>
                </footer>
              </section>
            </div>


            <div class="modal__wrapper" id="modal-camera">
              <section class="modal__window modal__window--md">
                <header class="modal__header">
                  <h3>Camera</h3>
                  <button
                    type="button"
                    class="modal__close close"
                    aria-label="Close modal window"
                  >
                  <i class='bx bx-x'></i>
                  </button>
                </header>
                <div class="modal__body">
                🤯🤯🤯🤯🤯
                </div>
                <footer class="modal__footer">
                  <a href="#" class="button button--primary button--md modal__yes-cancel">Capture</a>
                  <a href="#" class="button button--dark button--md close">Cancel</a>
                  
                </footer>
              </section>
            </div>

<?php }
?>

  </body>
</html>
              