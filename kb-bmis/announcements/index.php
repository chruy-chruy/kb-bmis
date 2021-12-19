<?php
  $page = 'Announcements';
  $headerTitle = 'Announcements';
  include "../../db_conn.php";
  require_once "../../includes/header.php";
?>
    <main>

      <div class="content">
          <section class="announcements">
            <a href="#" class="button button--md button--primary modal-trigger" style="margin-bottom: 20px; margin-left: auto;" data-modal-id="modal-sendmessage">
              <i class='bx bxs-megaphone' data-modal-id="modal-sendmessage"></i>
              Send an announcement
            </a>
          <div>
            <div class="card card--announcements">
              <div class="card__header">
                <div class="card__header-content">
                  <div class="card__header-content--left">
                    Receipients: <strong>ALL RESIDENTS</strong>
                  </div>
                  <div class="card__header-content--right">
                    <a class="button button--icon button--icon-sm button--icon-primary modal-trigger" data-modal-id="modal-deletemessage">
                    <i class='bx bx-trash' data-modal-id="modal-deletemessage"></i>
                    </a>
                  </div>
                </div>
              </div>

              <div class="card__body">
                <div class="card__body-content" style="align-items: flex-start;">
                  <div class="message__date-time">12/25/2021 - 10:30 AM</div>
                  <div class="message">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde hic accusantium eaque itaque aliquid nesciunt voluptate nihil, ducimus asperiores quas labore ullam id, ab omnis. Earum alias minima sed blanditiis nulla magnam nam, voluptas fugiat quibusdam asperiores impedit esse, odio hic ut eius tempora quasi, delectus sunt harum repellendus. Explicabo blanditiis unde temporibus velit. Minima natus, vel sed quae animi impedit cum adipisci cumque facilis, architecto sapiente nostrum dolores maiores nulla mollitia ipsum provident reiciendis labore possimus tempora veritatis nam. Minima vero ipsum incidunt ut ex molestias animi repellat, impedit veritatis vitae exercitationem eum illum, cupiditate, dolor hic fugit beatae?

                  </div>
                </div>
              </div>
            </div>


            <div class="card card--announcements">
              <div class="card__header">
                <div class="card__header-content">
                  <div class="card__header-content--left">
                    Receipients: <strong>SENIOR CITIZENS</strong>
                  </div>
                  <div class="card__header-content--right">
                    <a class="button button--icon button--icon-sm button--icon-primary modal-trigger" data-modal-id="modal-deletemessage">
                    <i class='bx bx-trash' data-modal-id="modal-deletemessage"></i>
                    </a>
                  </div>
                </div>
              </div>

              <div class="card__body">
                <div class="card__body-content" style="align-items: flex-start;">
                  <div class="message__date-time">12/25/2021 - 10:30 AM</div>
                  <div class="message">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde hic accusantium eaque itaque aliquid nesciunt voluptate nihil, ducimus asperiores quas labore ullam id, ab omnis. Earum alias minima sed blanditiis nulla magnam nam, voluptas fugiat quibusdam asperiores impedit esse, odio hic ut eius tempora quasi, delectus sunt harum repellendus. Explicabo blanditiis unde temporibus velit. Minima natus, vel sed quae animi impedit cum adipisci cumque facilis, architecto sapiente nostrum dolores maiores nulla mollitia ipsum provident reiciendis labore possimus tempora veritatis nam. Minima vero ipsum incidunt ut ex molestias animi repellat, impedit veritatis vitae exercitationem eum illum, cupiditate, dolor hic fugit beatae?

                  </div>
                </div>
              </div>
            </div>


            <div class="card card--announcements">
              <div class="card__header">
                <div class="card__header-content">
                  <div class="card__header-content--left">
                    Receipients: <strong>BARANGAY OFFICIALS</strong>
                  </div>
                  <div class="card__header-content--right">
                    <a class="button button--icon button--icon-sm button--icon-primary modal-trigger" data-modal-id="modal-deletemessage">
                    <i class='bx bx-trash' data-modal-id="modal-deletemessage"></i>
                    </a>
                  </div>
                </div>
              </div>

              <div class="card__body">
                <div class="card__body-content" style="align-items: flex-start;">
                  <div class="message__date-time">12/25/2021 - 10:30 AM</div>
                  <div class="message">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde hic accusantium eaque itaque aliquid nesciunt voluptate nihil, ducimus asperiores quas labore ullam id, ab omnis. Earum alias minima sed blanditiis nulla magnam nam, voluptas fugiat quibusdam asperiores impedit esse, odio hic ut eius tempora quasi, delectus sunt harum repellendus. Explicabo blanditiis unde temporibus velit. Minima natus, vel sed quae animi impedit cum adipisci cumque facilis, architecto sapiente nostrum dolores maiores nulla mollitia ipsum provident reiciendis labore possimus tempora veritatis nam. Minima vero ipsum incidunt ut ex molestias animi repellat, impedit veritatis vitae exercitationem eum illum, cupiditate, dolor hic fugit beatae?

                  </div>
                </div>
              </div>
            </div>
          </section>
      </div>

</main>

<!--=============== MODALS ===============-->
<div class="modal__wrapper" id="modal-sendmessage">
  <section class="modal__window">
    <header class="modal__header">
      <h3>Announcement</h3>
      <button
        type="button"
        class="modal__close close"
        aria-label="Close modal window"
      >
      <i class='bx bx-x'></i>
      </button>
    </header>
    <div class="modal__body" style="align-items: flex-start; padding: 0 20px;">
        <div class="announcements__contacts">
            <label>Receipients</label>
             <div class="input__inner">
               <div class="select__wrapper select__wrapper--announcements">
               <select  name="sex" name="" id="" class="select select--announcements input-viewprofile input-viewprofile">
                 <option value="" disabled selected >Select</option>
                 <option value="All Residents">All residents</option>
                 <option value="Barangay Officials">Barangay Officials</option>
                 <option value="SK Officials">SK Officials</option>
                 <option value="Senior Citizen">Senior Citizens</option>
                 <option value="Person with Disability">Persons with Disability</option>
                 <option value="Registered Voter">Registered Voters</option>
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
              <textarea name="" id="" placeholder="Type your message here"></textarea>
            </div>
      
            <div>
              <div class="row" style="align-items: flex-start;">
                <div class="message__counter">0/500</div>
              
              </div>
          </div>
          </div>
        </div>
      </div>
      <footer class="modal__footer">
        <a href="#" class="button button--md button--primary send-btn" style="margin-left: auto;">
          <i class='bx bx-send'></i>
          SEND
        </a>
        <a href="#" class="button button--dark button--md modal__cancel close">Cancel</a>
        </footer>
    </div>
    
  </section>
</div>

<div class="modal__wrapper" id="modal-deletemessage">
  <section class="modal__window modal__window--md">
    <header class="modal__header">
      <h3>Delete Message</h3>
      <button
        type="button"
        class="modal__close close"
        aria-label="Close modal window"
      >
      <i class='bx bx-x'></i>
      </button>
    </header>
    <div class="modal__body">
    Are you sure you want to delete this message?
    </div>
    <footer class="modal__footer">
    <a href="#" class="button button--danger button--md">Delete</a>
              <a href="#" class="button button--dark button--md modal__cancel close">Cancel</a>

    </footer>
  </section>
</div>


</body>
</html>