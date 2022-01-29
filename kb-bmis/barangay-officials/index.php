<?php

$page = 'Barangay Officials';
$headerTitle = 'Barangay Officials';
include "../../db_conn.php";
require_once "../../includes/header.php";
include "../../includes/preloader.php";
?>


<main>

  <div class="content">
    <section class="barangay-information">

      <div class="card">
        <div class="card__header">
          <div class="card__header-content">

            <div class="card__header-content--left">
              <h3>Officials</h3>
              <!-- <ul class="information__tabs-list">
                  <li class="tab tab--active" data-tab-id="#brgy-officials">
                    Barangay Officials
                  </li>
                  <li class="tab" data-tab-id="#sk-officials">
                    SK Officials
                  </li>
                </ul> -->

            </div>

            <div class="card__header-content--right">
              <a href="#" class="button button--md button--primary modal-trigger" data-modal-id="modal-newofficial">
                <i class='bx bx-user-plus' data-modal-id="modal-newofficial"></i>
                Add New
              </a>

            </div>

          </div>
        </div>

        <div class="card__body">
          <div class="card__body-content">

            <section class="brgy-officials" id="brgy-officials">
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
                    $squery =  mysqli_query($conn, "select * from officials where off_position = 'Barangay Chairman'");
                    while ($row = mysqli_fetch_array($squery)) {
                    ?>
                      <td>
                        <div class="table__row-img">
                          <img src="../residents/images/<?php echo $row['img_url'] ?>" alt="">
                        </div>
                      </td>
                      <td>
                        <div class="table__row-text">
                          <div class="table__row-name">
                            <?php echo $row['off_name'] ?>
                          </div>
                          <div class="table__row-sub">
                            <?php echo $row['off_position'] ?>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="table__action-buttons">
                          <a href="view-official.php?id=<?php echo $row['id'] ?>&resident_id=<?php echo $row['resident_id'] ?>" class="button button--primary button--sm action__cert" id="action-cert">
                            VIEW
                          </a>
                        </div>
                      </td>
                    <?php } ?>
                  </tr>


                  <tr>
                    <?php
                    $squery =  mysqli_query($conn, "select * from officials Where NOT off_position='Barangay Chairman'");
                    while ($row = mysqli_fetch_array($squery)) {
                    ?>
                      <td>
                        <div class="table__row-img">
                          <img src="../residents/images/<?php echo $row['img_url'] ?>" alt="">
                        </div>
                      </td>
                      <td>
                        <div class="table__row-text">
                          <div class="table__row-name">
                            <?php echo $row['off_name'] ?>
                          </div>
                          <div class="table__row-sub">
                            <?php echo $row['off_position'] ?>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="table__action-buttons">
                          <a href="view-official.php?id=<?php echo $row['id'] ?>&resident_id=<?php echo $row['resident_id'] ?>" class="button button--primary button--sm action__cert" id="action-cert">
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


            <!-- officials end -->



          </div>
        </div>

        <!-- card end -->
      </div>

    </section>
  </div>

  </div>
  </div>

</main>

<!--=============== MODALS ===============-->
<div class="modal__wrapper" id="modal-newofficial">
  <section class="modal__window modal__window--md">
    <header class="modal__header">
      <h3>Add New Official</h3>
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
          $squery =  mysqli_query($conn, "select * from residents");
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
                  <a href="add-official.php?id=<?php echo $row['id'] ?>" class="button button--primary button--sm action__cert" id="action-cert">
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