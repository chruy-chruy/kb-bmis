 <!-- add resident to database -->
 <?php

    if (isset($_POST['btn_update'])) {

        include "../../db_conn.php";
        $id = $_POST['id'];
        $first_name = $_POST['first_name'];
        $mid_name = $_POST['mid_name'];
        $last_name = $_POST['last_name'];
        $suffix = $_POST['suffix'];
        $sex = $_POST['sex'];
        $age = $_POST['age'];
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
        $_4ps_status = $_POST['4ps_status'];
        $type_disability = $_POST['type_disability'];
        $deceased_status = $_POST['deceased_status'];
        $date_of_death = $_POST['date_of_death'];
        $voter_id = $_POST['voter_id'];
        $precinct_number = $_POST['precinct_number'];
        $national_id = $_POST['national_id'];

        $vaccine_status = $_POST['vaccine_status'];
        $vaccine_1 = $_POST['vaccine_1'];
        $vaccine_date_1 = $_POST['vaccine_date_1'];
        $vaccine_2 = $_POST['vaccine_2'];
        $vaccine_date_2 = $_POST['vaccine_date_2'];
        $booster_status = $_POST['booster_status'];
        $booster_1 = $_POST['booster_1'];
        $booster_date_1 = $_POST['booster_date_1'];
        $booster_2 = $_POST['booster_2'];
        $booster_date_2 = $_POST['booster_date_2'];


        $emergency_person = $_POST['emergency_person'];
        $relationship = $_POST['relationship'];
        $emergency_address = $_POST['emergency_address'];
        $emergency_contact = $_POST['emergency_contact'];
        $orig_pic = $_POST['orig_pic'];

        $img = $_POST['image'];
        $folderPath = "images/";
        $owner_pic = $first_name . '_' . $last_name;
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $fileName =  $owner_pic . '_' . time() .  '.png';

        $file = $folderPath . $fileName;
        file_put_contents($file, $image_base64);


        if (empty($img)) {
            $sql = "UPDATE `residents` SET 
    `first_name`='$first_name',
    `mid_name`= '$mid_name',
    `last_name`='$last_name',
    `suffix`='$suffix',
    `sex`='$sex',
    `age`='$age',
    `date_of_birth`='$date_of_birth',
    `house_number`='$house_number',
    `street`='$street',
    `purok`='$purok',
    `occupation`='$occupation',
    `citizenship`='$citizenship',
    `civil_status`='$civil_status',
    `voter_status`='$voter_status',
    `phone_number`='$phone_number',
    `tel_number`='$tel_number',
    `email`='$email',
    `alien_status`='$alien_status',
    `senior_status`='$senior_status',
    `disability_status`='$disability_status',
    `type_disability`='$type_disability',
    `4ps_status`='$_4ps_status',
    `deceased_status`='$deceased_status',
    `voter_id`='$voter_id',
    `precinct_number`='$precinct_number',
    `national_id`='$national_id',
    `vaccine_status` = '$vaccine_status',
    `vaccine_1`= '$vaccine_1', 
    `vaccine_date_1`= ' $vaccine_date_1',
    `vaccine_2`= ' $vaccine_2',
    `vaccine_date_2`= '$vaccine_date_2',
    `booster_status`= '$booster_status',
    `booster_1`= '$booster_1',
    `booster_date_1`= '$booster_date_1',
    `booster_2`= '$booster_2',
    `booster_date_2`= '$booster_date_2',
    `emergency_person`='$emergency_person',
    `relationship`='$relationship',
    `emergency_address`='$emergency_address',
    `emergency_contact`='$emergency_contact',
    `date_of_death`='$date_of_death',
    `education_status`='$education_status',
    `place_of_birth`='$place_of_birth',
    `religion`='$religion',
    `blood_type`='$blood_type',
    `img_url`='$orig_pic'
    WHERE `id` = '$id'
    ";

            mysqli_query($conn, $sql);
            header("location:view-resident.php?id=$id");
        } else
            $sql = "UPDATE `residents` SET 
    `first_name`='$first_name',
    `mid_name`= '$mid_name',
    `last_name`='$last_name',
    `suffix`='$suffix',
    `sex`='$sex',
    `age`='$age',
    `date_of_birth`='$date_of_birth',
    `house_number`='$house_number',
    `street`='$street',
    `purok`='$purok',
    `occupation`='$occupation',
    `citizenship`='$citizenship',
    `civil_status`='$civil_status',
    `voter_status`='$voter_status',
    `phone_number`='$phone_number',
    `tel_number`='$tel_number',
    `email`='$email',
    `alien_status`='$alien_status',
    `senior_status`='$senior_status',
    `disability_status`='$disability_status',
    `type_disability`='$type_disability',
    `4ps_status`='$_4ps_status',
    `deceased_status`='$deceased_status',
    `voter_id`='$voter_id',
    `precinct_number`='$precinct_number',
    `national_id`='$national_id',

    `vaccine_status` = '$vaccine_status',
    `vaccine_1`= '$vaccine_1', 
    `vaccine_date_1`= ' $vaccine_date_1',
    `vaccine_2`= ' $vaccine_2',
    `vaccine_date_2`= '$vaccine_date_2',
    `booster_status`= '$booster_status',
    `booster_1`= '$booster_1',
    `booster_date_1`= '$booster_date_1',
    `booster_2`= '$booster_2',
    `booster_date_2`= '$booster_date_2',

   
    `emergency_person`='$emergency_person',
    `relationship`='$relationship',
    `emergency_address`='$emergency_address',
    `emergency_contact`='$emergency_contact',
    `date_of_death`='$date_of_death',
    `education_status`='$education_status',
    `place_of_birth`='$place_of_birth',
    `religion`='$religion',
    `blood_type`='$blood_type',
    `img_url`='$fileName'
    WHERE `id` = '$id'
    ";

        mysqli_query($conn, $sql);
        header("location:view-resident.php?id=$id");
    }

    ?>