<?php
$headerTitle = 'View';
$page = 'User Accounts';
require_once "../../includes/header.php";
include "../../db_conn.php";

$role = $_GET['role'];
?>

<?php
if ($role == "Barangay Secretary") {
  $squery =  mysqli_query($conn, "select * from residents,users where residents.occupation = '$role' and users.role = '$role'; ");
  while ($row = mysqli_fetch_array($squery)) { ?>
    <main>
      <div class="content">
        <div class="card">
          <a href="index.php" class="button button--md back-btn">
            <i class='bx bx-left-arrow-circle'></i>
            Back
          </a>


          <div class="card__body">
            <div class="card__body-content">
              <div class="profile__img profile__img--viewprofile">
                <img src="../residents/images/<?php echo $row["img_url"]; ?>" alt="">
              </div>

              <div class="profile__name profile__name--viewprofile">
                <?php echo $row["first_name"]; ?>
                <?php echo $row["mid_name"]; ?>
                <?php echo $row["last_name"]; ?>
                <?php echo $row["suffix"]; ?>
              </div>

              <div class="row">
                <a href="#" class="button button--primary button--sm modal-trigger" data-modal-id="modal-editprofile">
                  <i class='bx bxs-edit' data-modal-id="modal-editprofile"></i>
                  Edit</a>

              </div>



              <div class="profile-info__content viewprofile" style="display: block;">


                <section class="profile-info__basic-info">


                  <div class="profile-info__container">
                    <div class="input__wrapper">
                      <label for="official-position">Position</label>
                      <div class="input__inner">
                        <div class="select__wrapper">
                          <select disabled name="off_position" name="civil_status" id="" class="select select--resident-profile input-viewprofile">
                            <option value="<?php echo $row['occupation'] ?>" selected disabled><?php echo $row['occupation'] ?></option>
                            <option value="Barangay Chairman">Barangay Chairman</option>
                            <option value="Barangay Councilor">Barangay Councilor</option>
                            <option value="Barangay Secretary">Barangay Secretary</option>
                            <option value="Barangay Treasurer">Barangay Treasurer</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="profile-info__container">
                    <div class="input__wrapper">
                      <label for="resident-birthday">User Name</label>
                      <div class="input__inner">
                        <input disabled name="date_of_birth" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['user_name'] ?>">
                      </div>
                    </div>
                  </div>

                  <div class="profile-info__container">
                    <div class="input__wrapper">
                      <label for="resident-housenumber">Password</label>
                      <div class="input__inner">
                        <input disabled name="house_number" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['password'] ?>">
                      </div>
                    </div>
                  </div>


                </section>
                <!-- <div class="card__footer">
                        <div class="card__footer-content">
                          <a href="" name="btn_update" class="button button--primary button--md" id="save-editprofile">Save</a> 
                          <a href="#" class="button button--dark button--md modal-trigger" data-modal-id="modal-viewprofile-cancel">Cancel</a>
                        </div>
                      </div> -->

              </div>

            </div>
    </main>


    <!--=============== MODALS ===============-->


    <div class="modal__wrapper" id="modal-editprofile">
      <section class="modal__window modal__window--sm">
        <header class="modal__header">
          <h3>Login</h3>
          <button type="button" class="modal__close close" aria-label="Close modal window">
            <i class='bx bx-x'></i>
          </button>
        </header>
        <div class="modal__body">
          <div class="input__wrapper input__wrapper--block input__wrapper--login">
            <div class="input__inner--with-leading-icon input__inner">
              <i class="bx bxs-user-circle input__icon input__icon--leading"></i>
              <input name="first_name" type="text" class="input--light300 input--login" value="" placeholder="Username" />
            </div>
            <div class="input__message"></div>
          </div>

          <div class="input__wrapper input__wrapper--block input__wrapper--login">
            <div class="input__inner--with-leading-icon input__inner">
              <i class="bx bxs-lock input__icon input__icon--leading"></i>
              <input name="first_name" type="password" class="input--light300 input--login" value="" placeholder="Password" />
            </div>
            <div class="input__message"></div>
          </div>
        </div>
        <footer class="modal__footer">
          <a href="edit-users.php?role=<?php echo $row["occupation"]; ?>" class="button button--primary button--md" id="login-editprofile">Login</a>
          <a href="#" class="button button--dark button--md modal__cancel close">Cancel</a>

        </footer>
      </section>
    </div>





    </body>


    </html>
<?php
  }
} ?>
<?php
if ($role == "Admin") {
  $squery =  mysqli_query($conn, "select * from users where role = '$role'  ");
  while ($row = mysqli_fetch_array($squery)) { ?>
    <main>
      <div class="content">
        <div class="card">
          <a href="index.php" class="button button--md back-btn">
            <i class='bx bx-left-arrow-circle'></i>
            Back
          </a>


          <div class="card__body">
            <div class="card__body-content">
              <div class="profile__img profile__img--viewprofile">
                <img src="../../assets/img/admin.png" alt="">
              </div>

              <div class="profile__name profile__name--viewprofile">
                <?php echo $row["name"]; ?>
              </div>

              <div class="row">
                <a href="#" class="button button--primary button--sm modal-trigger" data-modal-id="modal-editprofile">
                  <i class='bx bxs-edit' data-modal-id="modal-editprofile"></i>
                  Edit</a>
              </div>



              <div class="profile-info__content viewprofile" style="display: block;">


                <section class="profile-info__basic-info">


                  <div class="profile-info__container">
                    <div class="input__wrapper">
                      <label for="official-position">Position</label>
                      <div class="input__inner">
                        <input disabled name="role" type="text" class="input--light300 input-viewprofile" value=" <?php echo $row['role'] ?>">
                      </div>
                    </div>
                  </div>

                  <div class="profile-info__container">
                    <div class="input__wrapper">
                      <label for="resident-birthday">User Name</label>
                      <div class="input__inner">
                        <input disabled name="user" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['user_name'] ?>">
                      </div>
                    </div>
                  </div>

                  <div class="profile-info__container">
                    <div class="input__wrapper">
                      <label for="resident-housenumber">Password</label>
                      <div class="input__inner">
                        <input disabled name="pass" type="text" class="input--light300 input-viewprofile" value="<?php echo $row['password'] ?>">
                      </div>
                    </div>
                  </div>


                </section>
                <!-- <div class="card__footer">
                        <div class="card__footer-content">
                          <a href="" name="btn_update" class="button button--primary button--md" id="save-editprofile">Save</a> 
                          <a href="#" class="button button--dark button--md modal-trigger" data-modal-id="modal-viewprofile-cancel">Cancel</a>
                        </div>
                      </div> -->

              </div>

            </div>
    </main>


    <!--=============== MODALS ===============-->



    <div class="modal__wrapper" id="modal-editprofile">
      <section class="modal__window modal__window--sm">
        <header class="modal__header">
          <h3>Login <?php echo $row['user_name'] ?></h3>
          <button type="button" class="modal__close close" aria-label="Close modal window">
            <i class='bx bx-x'></i>
          </button>
        </header>
        <div class="modal__body">
          <div class="input__wrapper input__wrapper--block input__wrapper--login">
            <div class="input__inner--with-leading-icon input__inner">
              <i class="bx bxs-user-circle input__icon input__icon--leading"></i>
              <input name="first_name" type="text" class="input--light300 input--login" value="" placeholder="Username" />
            </div>
            <div class="input__message"></div>
          </div>

          <div class="input__wrapper input__wrapper--block input__wrapper--login">
            <div class="input__inner--with-leading-icon input__inner">
              <i class="bx bxs-lock input__icon input__icon--leading"></i>
              <input name="first_name" type="password" class="input--light300 input--login" value="" placeholder="Password" />
            </div>
            <div class="input__message"></div>
          </div>
        </div>
        <footer class="modal__footer">
          <a href="edit-users.php?role=<?php echo $row["role"]; ?>" class="button button--primary button--md" id="login-editprofile">Login</a>
          <a href="#" class="button button--dark button--md modal__cancel close">Cancel</a>

        </footer>
      </section>
    </div>





    </body>


    </html>
<?php
  }
} ?>