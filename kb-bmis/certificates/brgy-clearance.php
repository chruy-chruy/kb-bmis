<?php
$page = 'Certificates';
$headerTitle = 'Barangay Clearance';
include "../../db_conn.php";
require_once "../../includes/header.php";

?>



<main>

  <div class="content" id="content-certificates">

    <section class="certificates__info">

      <div class="card">
        <a href="#" class="button button--md back-btn modal-trigger" data-modal-id="modal-cancel">
          <i class='bx bx-left-arrow-circle'></i>
          Back
        </a>
        <?php $id = $_GET["id"];

        $squery = mysqli_query($conn, "select * from residents where id = $id");
        while ($row = mysqli_fetch_array($squery)) {
          $sex = $row['sex'];
          $civil_status = $row['civil_status'];
        ?>

          <div class="card__body">
            <form id="" action="generate/brgy-clearance.php" method="post">
              <div class="card__body-content">

                <div class="profile__img profile__img--change">
                  <img src="../residents/images/<?php echo $row['img_url'] ?>" name="default" alt="">
                  <!-- <a href="#" class="button button--sm button--dark-outline camera-btn modal-trigger input--light300 input-viewprofile" data-modal-id="modal-camera" onclick="open_cam()">
                            <i class='bx bx-camera' data-modal-id="modal-camera"></i>
                            Open Camera
                          </a> -->

                  <a href="#" class="button button--icon-sm modal-trigger" data-modal-id="modal-camera" onclick="open_cam()">
                    <i class='bx bx-camera' data-modal-id="modal-camera"></i>
                  </a>
                </div>



                <div class="profile__name" style="margin-bottom: 30px;">
                  <?php echo $row['first_name'] ?> <?php echo $row['mid_name'] ?> <?php echo $row['last_name'] ?> <?php echo $row['suffix'] ?>
                </div>

                <div class="certificates-info__content">


                  <section class="certificates-info">
                    <div class="certificates-info__container">

                      <!-- hidden -->
                      <div class="cert-info">
                        <input id="id" type="hidden" name="id" value="<?php echo $row['id'] ?>" />
                      </div>
                      <div class="cert-info">
                        <input id="id" type="hidden" name="civil_status" value="<?php echo $civil_status ?>" />
                      </div>

                      <div class="cert-info">
                        <input id="id" type="hidden" name="sex" required="" value="<?php
                                                                                    if ($sex == "female" && $civil_status == "Single") {
                                                                                      echo "Ms.";
                                                                                    } else if ($sex == "Female" && $civil_status == "Married") {
                                                                                      echo "Mrs.";
                                                                                    } else if ($sex == "Female" && $civil_status == "Widowed") {
                                                                                      echo "Mrs.";
                                                                                    } else if ($sex == "Male") {
                                                                                      echo "Mr.";
                                                                                    }; ?>" />
                      </div>
                      <!-- hidden -->

                      <div class="input__wrapper">
                        <label>Name</label>
                        <div class="input__inner">
                          <input name="name" type="text" required="" class="input--light300 input-viewprofile" value="<?php echo $row['first_name'] ?>  <?php echo $row['mid_name'] ?>  <?php echo $row['last_name'] ?> <?php echo $row['suffix'] ?>">
                        </div>
                      </div>
                    </div>

                    <div class="certificates-info__container">
                      <div class="input__wrapper">
                        <label>Address</label>
                        <div class="input__inner">
                          <input name="address" type="text" required="" class="input--light300 input-viewprofile" value="<?php echo $row['purok'] ?> <?php echo $row['street'] ?> <?php echo $row['house_number'] ?>">
                        </div>
                      </div>
                    </div>

                    <div class="certificates-info__container">
                      <div class="input__wrapper">
                        <label>Purpose</label>
                        <div class="input__inner">
                          <input name="purpose" type="text" class="input--light300 input-viewprofile" value="" required="">
                        </div>
                      </div>
                    </div>

                    <div class="certificates-info__container">
                      <div class="input__wrapper">
                        <label>Date Issued</label>
                        <div class="input__inner">
                          <input name="date_issued" type="date" class="input--light300 input-viewprofile" value="<?php echo date('Y-m-d'); ?>">
                        </div>
                      </div>
                    </div>
                  </section>

                  <hr style="margin-top: 12px;">

                  <section class="certificates-info">
                    <div class="certificates-info__container">
                      <div class="input__wrapper">
                        <label>Resident Certificate No.</label>
                        <div class="input__inner">
                          <input name="cedula_number" type="number" class="input--light300 input-viewprofile" value="" required="" />
                        </div>
                      </div>
                    </div>

                    <div class="certificates-info__container">
                      <div class="input__wrapper">
                        <label>Issued at</label>
                        <div class="input__inner">
                          <input name="cedula_address" type="text" class="input--light300 input-viewprofile" value="" required="">
                        </div>
                      </div>
                    </div>

                    <div class="certificates-info__container">
                      <div class="input__wrapper">
                        <label>Date Issued</label>
                        <div class="input__inner">
                          <input name="cedula_date" type="date" class="input--light300 input-viewprofile" value="" required="">
                        </div>
                      </div>
                    </div>

                    <!-- <div class="certificates-info__container">
                      <div class="input__wrapper">
                        <label>Valid Picture</label>
                        <div class="input__inner">
                          <a href="#" class="button button--sm button--dark-outline camera-btn modal-trigger input--light300 input-viewprofile" data-modal-id="modal-camera" onclick="open_cam()">
                            <i class='bx bx-camera' data-modal-id="modal-camera"></i>
                            Open Camera
                          </a>
                        </div>
                      </div>
                    </div> -->

                    <div class="profile__img" id="profile">
                      <img src="../residents/images/<?php echo $row['img_url'] ?>" name="default" alt="">
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
                <input type="submit" name="btn_save" class="button button--primary button--md" value="Generate">
                <a href="#" ; class="button button--dark button--md modal-trigger" data-modal-id="modal-cancel">Cancel</a>
              </div>
            </div>
          </div>


          <!-- card end -->
      </div>


    </section>

  </div>



  </div>

</main>

<!--=============== MODALS ===============-->
<div class="modal__wrapper" id="modal-cancel">
  <section class="modal__window modal__window--sm">
    <header class="modal__header">
      <button type="button" class="modal__close close" aria-label="Close modal window">
        <i class='bx bx-x'></i>
      </button>
    </header>
    <div class="modal__body">
      Are you sure you want to cancel?
    </div>
    <footer class="modal__footer">
      <a href="../certificates/" class="button button--primary button--md modal__yes-cancel">Yes</a>
      <a href="#" class="button button--dark button--md close">No</a>

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
          <input type="hidden" name="image" class="image-tag" required="">
        </div>
        <div class="col-md-6">
          <div id="results"></div>
        </div>
        <div class="col-md-12 text-center">
          <br />
        </div>
      </div>
    </div>

    <footer class="modal__footer">
      <input type="button" value="Capture" class="button button--primary button--md modal__yes-cancel" onClick="take_snapshot()"/>
      <input type="button" value="Submit" class="button button--primary button--md modal__yes-cancel close" onClick="submit_snap()"/>
      <input type="button" value="Cancel" class="button button--dark button--md modal__yes-cancel close" onClick="exit_webcam()"/>
    </footer>
    </form>
  </section>
</div>

<!-- Configure a few settings and attach camera -->

<!-- <script language="JavaScript">
  Webcam.set({
    width: 490,
    height: 390,
    image_format: 'jpeg',
    jpeg_quality: 100
  });

  function open_cam() {
    Webcam.attach('#my_camera');
  }



  function take_snapshot() {
    Webcam.snap(function(data_uri) {
      $(".image-tag").val(data_uri);
      document.getElementById('results').innerHTML = '<img src="' + data_uri + '"/>';
    });
  }

  function submit_snap() {

    document.getElementById('profile').innerHTML = document.getElementById('results').innerHTML;
    Webcam.reset();
  }

  function exit_webcam() {
    document.getElementById('results').innerHTML = '<img src=""/>';
    Webcam.reset();
  }
</script> -->
</body>

</html>
<?php } ?>