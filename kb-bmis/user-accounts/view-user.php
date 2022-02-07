<?php
$headerTitle = 'View';
$page = 'User Accounts';
require_once "../../includes/header.php";
include "../../db_conn.php";
include "../../includes/preloader.php";
session_start();
if (!isset($_SESSION['id'])) {
  header("Location: ../../index.php");
  exit();
}
$admin = $_SESSION['role'];

$role = $_GET['role'];
if (isset($_GET['res_id'])) {
  $res_id = $_GET['res_id'];
}
if (isset($_GET['msg'])) {
  echo '<script>alert("Save Changes")</script>';
}
?>

<?php
if ($role == "Barangay Secretary" or "Barangay Clerk") {
  $squery =  mysqli_query($conn, "select * from residents,users where residents.occupation = '$role' and users.role = '$role' and users.resident_id=$res_id and residents.id = $res_id; ");
  while ($row = mysqli_fetch_array($squery)) {  ?>
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
                <a href="edit-users.php?role=<?php echo $row["role"]; ?>&res_id=<?php echo $row['resident_id'] ?>" class="button button--primary button--sm">
                  <i class='bx bxs-edit' data-modal-id="modal-editprofile"></i>
                  Edit</a>
                <?php if ($admin == 'Admin') { ?>
                  <a href="#" class="button button--dark button--sm modal-trigger" data-modal-id="modal-delete">
                    <i class='bx bxs-trash' data-modal-id="modal-delete"></i>
                    Delete</a></a>
                <?php } ?>
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
                        <input disabled name="house_number" id="passwd" type="password" class="input--light300 input-viewprofile" value="<?php echo $row['password'] ?>">
                        <i class="fa fa-eye showpwd" style="margin: 15px 0px 0px -30px; cursor: pointer;" onClick="showPwd('passwd', this)"> </i>

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
    </body>

    </html>
    <!--=============== MODALS ===============-->
    <div class="modal__wrapper" id="modal-delete">
      <section class="modal__window modal__window--md">
        <header class="modal__header">
          <h3>Delete Profile</h3>
          <button type="button" class="modal__close close" aria-label="Close modal window">
            <i class='bx bx-x'></i>
          </button>
        </header>
        <div class="modal__body">
          Are you sure you want delete <?php echo $row["first_name"]; ?> <?php echo $row["last_name"]; ?> (<?php echo $row["role"]; ?>) ?
        </div>
        <footer class="modal__footer">
          <a href="delete-clerk.php?resident_id=<?php echo $row["resident_id"]; ?>&id=<?php echo $row["id"]; ?>&role=<?php echo $row["role"] ?>" class="button button--danger button--md">Delete</a>
          <a href="#" class="button button--dark button--md modal__cancel close">Cancel</a>

        </footer>
      </section>
    </div>
<?php
  }
} ?>



<?php if ($role == "Admin") {
  $squery =  mysqli_query($conn, "select * from users where role = '$role'");
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
                <a href="edit-users.php?role=<?php echo $row["role"]; ?>" class="button button--primary button--sm">
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
                        <input disabled name="pass" id="passwd" type="password" class="input--light300 input-viewprofile" value="<?php echo $row['password'] ?>">
                        <i class="fa fa-eye showpwd" style="margin: 15px 0px 0px -30px; cursor: pointer;" onClick="showPwd('passwd', this)"> </i>
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
    </body>


    </html>
<?php
  }
} ?>