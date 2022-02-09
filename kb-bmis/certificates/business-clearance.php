<?php
$page = 'Certificates';
$headerTitle = 'Business Clearance';
include "../../db_conn.php";
require_once "../../includes/header.php";
?>


<main>

  <div class="content" id="content-certificates">

    <section class="certificates__info">

      <div class="card">
        <button class="button button--md back-btn modal-trigger" data-modal-id="modal-cancel">
          <i class='bx bx-left-arrow-circle'></i>
          Back
        </button>


        <div class="card__body" style="padding-top: 100px;">
          <div class="card__body-content">


            <div class="certificates-info__content">

              <form id="" action="generate/business-clearance.php" method="post">
                <section class="certificates-info">
                  <div class="certificates-info__container">
                    <div class="input__wrapper">
                      <label>Owner's Name <strong style="color:red;">*</strong></label>
                      <div class="input__inner">
                        <input name="name" type="text" class="input--light300 input-viewprofile" value="" required>
                      </div>
                    </div>
                  </div>

                  <div class="certificates-info__container">
                    <div class="input__wrapper">
                      <label>Business Location (Purok) <strong style="color:red;">*</strong></label>
                      <div class="input__inner">
                        <input name="bus_location" type="text" class="input--light300 input-viewprofile" value="" required>
                      </div>
                    </div>
                  </div>

                  <div class="certificates-info__container">
                    <div class="input__wrapper">
                      <label>Trade/Business Name <strong style="color:red;">*</strong></label>
                      <div class="input__inner">
                        <input name="bus_name" type="text" class="input--light300 input-viewprofile" value="" required>
                      </div>
                    </div>
                  </div>


                  <div class="certificates-info__container">
                    <div class="input__wrapper">
                      <label>Receipt No. <strong style="color:red;">*</strong></label>
                      <div class="input__inner">
                        <input name="clearance_number" type="text" class="input--light300 input-viewprofile" value="" required>
                      </div>
                    </div>
                  </div>

                  <div class="certificates-info__container">
                    <div class="input__wrapper">
                      <label>Business Type <strong style="color:red;">*</strong></label>
                      <div class="input__inner">
                        <input name="bus_type" type="text" class="input--light300 input-viewprofile" value="" required>
                      </div>
                    </div>
                  </div>

                  <div class="certificates-info__container">
                    <div class="input__wrapper">
                      <label for="official-position">Business Size <strong style="color:red;">*</strong></label>
                      <div class="input__inner">
                        <div class="select__wrapper">
                          <select name="" id="" class="select select--resident-profile input-viewprofile">
                            <option disabled selected value="">Select</option>
                            <option value="Small Scale Business">Small Scale Business</option>
                            <option value="Medium Scale Business">Medium Scale Business</option>
                            <option value="Large Scale Business">Large Scale Business</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="certificates-info__container">
                    <div class="input__wrapper">
                      <label>Amount</label>
                      <div class="input__inner">
                        <input name="price" type="text" class="input--light300 input-viewprofile" value="">
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
            </div>

            <!-- card body content end -->
          </div>
          <!-- card body end -->
        </div>

        <div class="card__footer">
          <div class="card__footer-content">
            <div class="card__footer-content--right">
              <button class="button button--primary button--md" name="btn_save">GENERATE</button>
              <a class="button button--dark button--md modal-trigger" data-modal-id="modal-cancel">CANCEL</a>
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
<?php
include "../../includes/modal-cancel.php";
?>

</body>

</html>