<?php
$page = 'User Accounts';
$headerTitle = 'User Accounts';
include "../../db_conn.php";
require_once "../../includes/header.php";
include "../../includes/preloader.php";

?>

<main>

  <div class="content">
    <section class="useraccounts">
      <div class="card">
        <div class="card__header">
          <div class="card__header-content">

            <?php if (isset($_GET['error'])) { ?>
              <p class="error-message" style="margin-bottom: 15px;"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <div class="card__header-content--right">
              <a href="#" class="button button--md button--primary modal-trigger" data-modal-id="modal-newofficial">
                <i class='bx bx-user-plus bx-sm' data-modal-id="modal-newofficial"></i>
                ADD CLERK
              </a>
            </div>
          </div>
        </div>

        <div class="card__body">
          <div class="card__body-content">

            <table id="users-table" class="row-border">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php $squery =  mysqli_query($conn, "select * from users where role = 'Admin' ");
                while ($row = mysqli_fetch_array($squery)) { ?>
                  <tr>
                    <td>
                      <div class="table__row-img">
                        <img src="../../assets/img/admin.png" alt="">
                      </div>
                    </td>
                    <td>
                      <div class="table__row-text">
                        <div class="table__row-name">
                          <?php echo $row['name'] ?>
                        </div>
                        <div class="table__row-sub">
                          <?php echo $row['role'] ?>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="table__action-buttons">
                        <a href="view-user.php?role=<?php echo $row['role'] ?>" class="button button--primary button--sm action__cert" id="action-cert">
                          VIEW
                        </a>
                      </div>
                    </td>
                  </tr>
                <?php } ?>

                <?php $squery =  mysqli_query($conn, "select * from residents,users where users.role = 'Barangay Secretary' AND residents.occupation = 'Barangay Secretary'");
                while ($row = mysqli_fetch_array($squery)) { ?>
                  <tr>
                    <td>
                      <div class="table__row-img">
                        <img src="../residents/images/<?php echo $row['img_url'] ?>" alt="">
                      </div>
                    </td>
                    <td>
                      <div class="table__row-text">
                        <div class="table__row-name">
                          <?php echo $row['name'] ?>
                        </div>
                        <div class="table__row-sub">
                          <?php echo $row['role'] ?>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="table__action-buttons">
                        <a href="view-user.php?role=<?php echo $row['role'] ?>" class="button button--primary button--sm action__cert" id="action-cert">
                          VIEW
                        </a>
                      </div>
                    </td>
                  </tr>
                <?php } ?>
                <?php $squery =  mysqli_query($conn, "select * from residents,users where users.role = 'Barangay Clerk' AND residents.occupation = 'Barangay Clerk'");
                while ($row = mysqli_fetch_array($squery)) { ?>
                  <tr>
                    <td>
                      <div class="table__row-img">
                        <img src="../residents/images/<?php echo $row['img_url'] ?>" alt="">
                      </div>
                    </td>
                    <td>
                      <div class="table__row-text">
                        <div class="table__row-name">
                          <?php echo $row['name'] ?>
                        </div>
                        <div class="table__row-sub">
                          <?php echo $row['role'] ?>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="table__action-buttons">
                        <a href="view-user.php?role=<?php echo $row['role'] ?>" class="button button--primary button--sm action__cert" id="action-cert">
                          VIEW
                        </a>
                      </div>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            <!-- brgy officials end -->
            <!-- card end -->
          </div>
        </div>
    </section>
  </div>

</main>

<!--=============== MODALS ===============-->
<!--=============== MODALS ===============-->
<div class="modal__wrapper" id="modal-newofficial">
  <section class="modal__window modal__window--md">
    <header class="modal__header">
      <h3>Add New Clerk</h3>
      <button type="button" class="modal__close close" aria-label="Close modal window">
        <i class='bx bx-x'></i>
      </button>
    </header>
    <div class="modal__body">
      <table id="modal-table" class="row-border">
        <thead>
          <tr>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
          $squery =  mysqli_query($conn, "select * from residents where not (residents.occupation = 'Barangay Clerk')");
          while ($row = mysqli_fetch_array($squery)) {

          ?>
            <tr>
              <td>
                <div class="table__row-img">
                  <img src="../residents/images/<?php echo $row['img_url'] ?>" alt="">
                </div>
              </td>
              <td>
                <div class="table__row-text">
                  <div class="table__row-name">
                    <?php echo $row['first_name'] ?> <?php echo $row['mid_name'] ?> <?php echo $row['last_name'] ?> <?php echo $row['suffix'] ?>
                  </div>
                  <div class="table__row-sub">
                    <?php echo $row['id'] ?>
                  </div>
                </div>
              </td>
              <td>
                <div class="table__action-buttons">
                  <a href="add-user.php?id=<?php echo $row['id'] ?>" class="button button--primary button--sm action__cert" id="action-cert">
                    SELECT
                  </a>
                </div>
              </td>
            </tr>
          <?php } ?>

        </tbody>
      </table>
    </div>
  </section>
</div>
</body>

</html>