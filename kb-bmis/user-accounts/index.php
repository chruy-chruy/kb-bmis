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
                  <img src="../../assets/img/user2.jpg" alt="">
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
        </tbody>
      </table>
      <!-- brgy officials end -->






    </section>
  </div>

</main>

<!--=============== MODALS ===============-->

</body>

</html>