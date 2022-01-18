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
        Create announcement
      </a>

      <table id="officials-table" class="row-border">
        <thead>
          <tr>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            $squery =  mysqli_query($conn, "select * from announcements order by id desc");
            while ($row = mysqli_fetch_array($squery)) {
            ?>
              <td>
              </td>
              <td>
                <div class="table__row-text">
                  <div class="table__row-name">
                    Recipients: <strong><?php echo $row["receipients"]; ?></strong>
                  </div>
                  <div class="table__row-sub">
                    <div class="message__date-time"><?php echo date("F j Y \(l\)", strtotime($row["date"])); ?> - <?php echo date("g:i A", strtotime($row["time"])); ?></div>
                  </div>
                </div>
              </td>
              <td>
                <div class="table__action-buttons">
                  <a href="view-announcement.php?id=<?php echo $row['id'] ?>" class="button button--primary button--sm action__cert" id="action-cert">
                    VIEW
                  </a>
                </div>
              </td>

          </tr>
        <?php } ?>

        </tbody>
      </table>
      <!-- brgy officials end -->
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
          <label>Recipients</label>
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
          <!-- <label for="">Recipients</label> -->
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
</body>

</html>