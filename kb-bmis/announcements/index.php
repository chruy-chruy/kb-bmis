<?php
$page = 'Announcements';
$headerTitle = 'Announcements';
include "../../db_conn.php";
require_once "../../includes/header.php";
include "../../includes/preloader.php";


?>
<main>

  <div class="content">
    <section class="announcements">
      <a href="#" class="button button--md button--primary modal-trigger" style="margin-bottom: 20px; margin-left: auto;" data-modal-id="modal-sendmessage">
        <i class='bx bxs-megaphone' data-modal-id="modal-sendmessage"></i>
        Send an announcement
      </a>

      <!-- <div> -->

      <?php $squery = mysqli_query($conn, "select * from announcements order by id desc");
      while ($row = mysqli_fetch_array($squery)) {

      ?>

        <div class="card card--announcements">
          <div class="card__header">
            <div class="card__header-content">
              <div class="card__header-content--left">
                Receipients: <strong><?php echo $row["receipients"]; ?></strong>
              </div>
              <div class="card__header-content--right">
                <a class="button button--icon button--icon-sm button--icon-primary modal-trigger" data-modal-id="modal-deletemessage">
                  <i class='bx bx-trash' data-modal-id="modal-deletemessage"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="card__body">
            <div class="card__body-content" style="align-items: flex-start; position:relative;">
              <div class="message__date-time"><?php echo date("F j Y \(l\)", strtotime($row["date"])); ?> - <?php echo date("g:i A", strtotime($row["time"])); ?></div>
              <div class="message">
                <?php echo $row["message"]; ?>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      <!-- </div> -->


    </section>
  </div>

</main>
<form id="send_announcement" action="send.php" method="post" enctype="multipart/form-data" data-parsley-validate="">
  <!--=============== MODALS ===============-->
  <div class="modal__wrapper" id="modal-sendmessage">
    <section class="modal__window">
      <header class="modal__header">
        <h3>Announcement</h3>
        <button type="button" class="modal__close close" aria-label="Close modal window">
          <i class='bx bx-x'></i>
        </button>
      </header>
      <div class="modal__body" style="align-items: flex-start; padding: 0 20px;">
        <div class="announcements__contacts">
          <label>Receipients</label>
          <div class="input__inner">
            <div class="select__wrapper select__wrapper--announcements">
              <select required name="receipients" id="" class="select select--announcements input-viewprofile input-viewprofile">
                <option value="" disabled selected>Select</option>
                <option value="All Residents">All residents</option>
                <option value="Barangay Officials">Barangay Officials</option>
                <option value="SK Officials">SK Officials</option>
                <option value="Senior Citizens">Senior Citizens</option>
                <option value="Persons with Disability">Persons with Disability</option>
                <option value="Registered Voters">Registered Voters</option>
              </select>
            </div>
          </div>
          <!-- <label for="">Receipients</label> -->
          <!-- <div class="announcements__radio">
              <input type="radio" class="announcements__radio-input" checked name="radio" id="all-residents">
              <label for="all-residents" class="announcements__radio-label">All residents</label>
              <input type="radio" class="announcements__radio-input" name="radio" id="all-brgy-officials">
              <label for="all-brgy-officials" class="announcements__radio-label">All barangay officials</label>
              <input type="radio" class="announcements__radio-input" name="radio" id="all-brgy-workers">
              <label for="all-brgy-workers" class="announcements__radio-label">All barangay workers</label>
              <input type="radio" class="announcements__radio-input" name="radio" id="senior-citizens">
              <label for="senior-citizens" class="announcements__radio-label">Senior Citizens</label>
            </div> -->
        </div>
        <div class="announcements__message">
          <label>Message</label>
          <div class="message__container">
            <div class="message__field">
              <textarea required name="message" id="" placeholder="Type your message here"></textarea>
            </div>

            <div>

            </div>
          </div>
        </div>
      </div>
      <footer class="modal__footer">
        <button class="button button--md button--primary send-btn" name="btn_save"><i class='bx bx-send'></i>
          SEND</button>
        <a href="#" class="button button--dark button--md modal__cancel close">Cancel</a>
      </footer>
  </div>
</form>
</section>
</div>


<?php $squery = mysqli_query($conn, "select * from announcements");
while ($row = mysqli_fetch_array($squery)) { ?>


  <div class="modal__wrapper" id="modal-deletemessage">
    <section class="modal__window modal__window--md">
      <header class="modal__header">
        <h3>Delete Message</h3>
        <button type="button" class="modal__close close" aria-label="Close modal window">
          <i class='bx bx-x'></i>
        </button>
      </header>
      <div class="modal__body">
        Are you sure you want to delete this message?
      </div>

      <footer class="modal__footer">
        <a href="delete.php?id=<?php echo $row["id"]; ?>" class="button button--danger button--md">Delete</a>
        <a href="#" class="button button--dark button--md modal__cancel close">Cancel</a>
      <?php } ?>

      </footer>
    </section>
  </div>


  </body>

  </html>