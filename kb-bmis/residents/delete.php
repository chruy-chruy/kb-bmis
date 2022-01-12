<!-- delete database -->

<?php
include "../../db_conn.php";

// Delete function() without archive 
// $id = $_GET['id'];
// mysqli_query($conn, "DELETE FROM `residents` WHERE id = $id");
// header("location:index.php");

//delete resident from residents to archive

$id = $_GET['id'];
$squary = mysqli_query($conn, "SELECT * FROM `residents` WHERE `id` = $id");
$fetch = mysqli_fetch_array($squary);



mysqli_query($conn, "INSERT INTO `residents_archive` (
    `resident_id`,
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
    `blood_type`,
    `img_url`)  
    VALUES( 
            '$fetch[id]',
			'$fetch[first_name]', 
			'$fetch[mid_name]', 
			'$fetch[last_name]', 
			'$fetch[suffix]', 
			'$fetch[sex]', 
			'$fetch[date_of_birth]', 
			'$fetch[house_number]', 
			'$fetch[street]', 
			'$fetch[purok]', 
			'$fetch[occupation]', 
			'$fetch[citizenship]',  
			'$fetch[civil_status]', 
			'$fetch[voter_status]',
			'$fetch[phone_number]', 
			'$fetch[tel_number]', 
			'$fetch[email]',
			'$fetch[alien_status]',
			'$fetch[senior_status]',
			'$fetch[disability_status]',
			'$fetch[type_disability]',
			'$fetch[_4ps_status]',
			'$fetch[deceased_status]',
			'$fetch[voter_id]',
			'$fetch[precinct_number]',
			'$fetch[national_id]',
			'$fetch[vaccine_admin]',
			'$fetch[emergency_person]',
			'$fetch[relationship]',
			'$fetch[emergency_address]',
			'$fetch[emergency_contact]',
			'$fetch[date_of_death]',
			'$fetch[education_status]',
			'$fetch[place_of_birth]',
			'$fetch[religion]',
			'$fetch[blood_type]',
            '$fetch[img_url]' )");

mysqli_query($conn, "DELETE FROM `residents` WHERE id = $id");
mysqli_query($conn, "DELETE FROM `officials` WHERE `resident_id` = '$id'");
header("location:index.php");

?>