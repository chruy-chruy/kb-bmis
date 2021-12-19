 <!-- add resident to database -->
<?php

if(isset($_POST['btn_save'])){

    include "../../db_conn.php";
    $first_name = $_POST['first_name'];
    $mid_name = $_POST['mid_name'];
    $last_name = $_POST['last_name'];
    $suffix = $_POST['suffix'];
    $sex = $_POST['sex'];
    $date_of_birth = $_POST['date_of_birth'];
    $civil_status = $_POST['civil_status'];
    $voter_status = $_POST['voter_status'];
    $house_number = $_POST['house_number'];
    $street = $_POST['street'];
    $purok = $_POST['purok'];
    $occupation = $_POST['occupation'];
    $citizenship = $_POST['citizenship'];
    $phone_number = $_POST['phone_number'];
    $tel_number = $_POST['tel_number'];
    $email = $_POST['email'];
    $place_of_birth = $_POST['place_of_birth'];
    $education_status = $_POST['education_status'];
    $religion = $_POST['religion'];
    $blood_type = $_POST['blood_type'];
    $alien_status = $_POST['alien_status'];
    $senior_status = $_POST['senior_status'];
    $disability_status = $_POST['disability_status'];
    $_4ps_status = $_POST['_4ps_status'];
    $type_disability = $_POST['type_disability'];
    $deceased_status = $_POST['deceased_status'];
    $date_of_death = $_POST['date_of_death'];
    $voter_id = $_POST['voter_id'];
    $precinct_number = $_POST['precinct_number'];
    $national_id = $_POST['national_id'];
    $vaccine_admin = $_POST['vaccine_admin'];
    $emergency_person = $_POST['emergency_person'];
    $relationship = $_POST['relationship'];
    $emergency_address = $_POST['emergency_address'];
    $emergency_contact = $_POST['emergency_contact'];
    

    
    $sql ="INSERT INTO `residents`
    (
         `first_name`, 
         `mid_name`, 
         `last_name`, 
         `suffix`, 
         `sex`, 
         `date_of_birth`, 
         `house_number`, 
         `street`, 
         `purok`, 
         `occupation`, 
         `citizenship`, 
         `civil_status`, 
         `voter_status`, 
         `phone_number`, 
         `tel_number`, 
         `email`, 
         `alien_status`, 
         `senior_status`, 
         `disability_status`, 
         `type_disability`, 
         `4ps_status`, 
         `deceased_status`, 
         `voter_id`, 
         `precinct_number`, 
         `national_id`, 
         `vaccine_admin`, 
         `emergency_person`, 
         `relationship`, 
         `emergency_address`, 
         `emergency_contact`,
         `date_of_death`, 
         `education_status`, 
         `place_of_birth`, 
         `religion`, 
         `blood_type`) 
VALUES ('$first_name',
        '$mid_name',
        '$last_name',
        '$suffix',
        '$sex',
        '$date_of_birth',
        '$house_number',
        '$street',
        '$purok',
        '$occupation',
        '$citizenship',
        '$civil_status',
        '$voter_status',
        '$phone_number',
        '$tel_number',
        '$email',
        '$alien_status',
        '$senior_status',
        '$disability_status',
        '$type_disability',
        '$_4ps_status',
        '$deceased_status',
        '$voter_id',
        '$precinct_number',
        '$national_id',
        '$vaccine_admin',
        '$emergency_person',
        '$relationship',
        '$emergency_address',
        '$emergency_contact',
        '$date_of_death',
        '$education_status',
        '$place_of_birth',
        '$religion',
        '$blood_type')";

mysqli_query($conn,$sql);
header("location:index.php");

}
              
              ?>