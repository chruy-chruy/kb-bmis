<?php
$page = 'Certificates';
$headerTitle = 'Certificates';
include "../../db_conn.php";
require_once "../../includes/header.php";
include "../../includes/preloader.php";

?>


<main>

  <div class="content" id="content-certificates">

    <section class="certificates">

      <div class="center--row" style="gap: 50px;">
        <button href="#" class="button button--primary button--xl certificates__button modal-trigger" data-modal-id="modal-brgyclearance">
          <i class='bx bx-file' data-modal-id="modal-brgyclearance"></i>
          <p data-modal-id="modal-brgyclearance">BARANGAY CLEARANCE</p>
        </button>


        <a href="business-clearance.php" class="button button--primary button--xl certificates__button">
          <i class='bx bxs-file'></i>
          <p>BUSINESS CLEARANCE</p>
        </a>
      </div>

      <div class="modal__wrapper" id="modal-brgyclearance">
        <section class="modal__window modal__window--md">
          <header class="modal__header">
            <h3>Barangay Clearance</h3>
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
                        <img src="../residents/images/<?php echo $row["img_url"]; ?>" alt="">
                      </div>
                    </td>
                    <td>
                      <div class="table__row-text">
                        <div class="table__row-name">
                          <?php echo $row['first_name'] ?> <?php echo $row['mid_name'] ?> <?php echo $row['last_name'] ?>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="table__action-buttons">
                        <a href="brgy-clearance.php?id=<?php echo $row['id'] ?>" class="button button--primary button--sm action__cert" id="action-cert">
                          <i class='bx bxs-file-blank'></i>
                          Generate
                        </a>
                      </div>
                    </td>
                  </tr>

                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </section>
      </div>




    </section>

  </div>

</main>
</body>

</html>