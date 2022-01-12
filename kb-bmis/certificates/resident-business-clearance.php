<?php

$page = 'Certificates';
$headerTitle = 'Business Clearance';
include "../../db_conn.php";
require_once "../../includes/header.php";

$id = $_GET["id"];

$squery =  mysqli_query($conn, "select * from residents where id = $id");
while ($row = mysqli_fetch_array($squery)) {

  $fName = $row["first_name"];
  $mName = $row['mid_name'];
  $lName = $row['last_name'];
  $location = $row['purok'];

?>

  <main>

    <div class="content" id="content-certificates">

      <section class="certificates__info">

        <div class="card">
          <a href="#" class="button button--md back-btn modal-trigger" data-modal-id="modal-cancel">
            <i class='bx bx-left-arrow-circle'></i>
            Back
          </a>


          <div class="card__body" style="padding-top: 150px;">
            <div class="card__body-content">


              <div class="certificates-info__content">

                <form id="" action="generate/business-clearance.php" method="post">
                  <section class="certificates-info">
                    <div class="certificates-info__container">
                      <div class="input__wrapper">
                        <label>Name</label>
                        <div class="input__inner">
                          <input name="name" type="text" class="input--light300 input-viewprofile" value="<?php echo $fName ?> <?php echo $mName ?> <?php echo $lName ?>">
                        </div>
                      </div>
                    </div>

                    <div class="certificates-info__container">
                      <div class="input__wrapper">
                        <label>Business Location(Purok)</label>
                        <div class="input__inner">
                          <input name="bus_location" type="text" class="input--light300 input-viewprofile" value="<?php echo $location ?>">
                        </div>
                      </div>
                    </div>

                    <div class="certificates-info__container">
                      <div class="input__wrapper">
                        <label>Business Name</label>
                        <div class="input__inner">
                          <input name="bus_name" type="text" class="input--light300 input-viewprofile" value="">
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

                    <div class="certificates-info__container">
                      <div class="input__wrapper">
                        <label>Clearance No.</label>
                        <div class="input__inner">
                          <input name="clearance_number" type="text" class="input--light300 input-viewprofile" value="">
                        </div>
                      </div>
                    </div>

                    <div class="certificates-info__container">
                      <div class="input__wrapper">
                        <label>Business Type</label>
                        <div class="input__inner">
                          <input name="bus_type" type="text" class="input--light300 input-viewprofile" value="">
                        </div>
                      </div>
                    </div>

                    <div class="certificates-info__container">
                      <div class="input__wrapper">
                        <label>Price</label>
                        <div class="input__inner">
                          <input name="price" type="text" class="input--light300 input-viewprofile" value="">
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
                <button class="button button--primary button--md" name="btn_save">Generate</button>
                <a href="#" ; class="button button--dark button--md modal-trigger" data-modal-id="modal-cancel">Cancel</a>
              </div>
            </div>
          </div>


          <!-- card end -->
        </div>



      </section>

    </div>



    </div>
    </form>
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

  </body>

  </html>
<?php } ?>