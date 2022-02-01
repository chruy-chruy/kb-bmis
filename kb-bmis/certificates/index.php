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
                        <div class="table__row-sub">
                          <?php echo $row['id'] ?>
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


      <!-- <div class="modal__wrapper" id="modal-busclearance">
              <section class="modal__window modal__window--md">
                <header class="modal__header">
                  <h3>Business Clearance</h3>
                  <button
                    type="button"
                    class="modal__close close"
                    aria-label="Close modal window"
                  >
                  <i class='bx bx-x'></i>
                  </button>
                </header>
                  <div class="modal__body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, corporis cumque rem eligendi vero consectetur est labore fuga odit temporibus dolorum voluptatibus voluptatum ratione sunt sit molestias perspiciatis facere officia reiciendis totam ipsa dolore eveniet. Quasi, officia! Assumenda animi perferendis numquam optio ipsam repudiandae corporis eaque cupiditate repellendus modi? Consequuntur!
                  </div>
                <footer class="modal__footer">
                  <a href="" class="button button--dark button--sm">waw</a>
                </footer>
              </section>
            </div> -->

      <!-- <div class="modal__container modal-brgyclearance" id="modal-brgyclearance">
              <div class="modal modal--md">
                <div class="modal__header">
                  <div class="modal__header-content">
      
                    <div class="modal__header-content--left">
                      Barangay Clearance
                    </div>
      
                    <div class="modal__header-content--right">
                      <a href="#" class="modal__close close">
                        <i class='bx bx-x'></i>
                      </a>
                    </div>
                  </div>
                </div>
      
                <div class="modal__body">
                  <div class="modal__body-content">
                    <table id="certificates-table" class="row-border">
                      <thead>
                          <tr>
                              <th></th>
                              <th></th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>
                                <div class="table__row-img">
                                  <img src="../../assets/img/user.jpg" alt="">
                                </div>
                              </td>
                              <td>
                                <div class="table__row-text">
                                <div class="table__row-name">
                                  Juana Dela Cruz
                                </div>
                                <div class="table__row-sub">
                                  00001
                                </div>
                                </div>
                              </td>
                              <td>
                                <div class="table__action-buttons">
                                <a href="brgy-clearance.php" class="button button--primary button--sm action__cert" id="action-cert">
                                SELECT
                                </a>
                              </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                <div class="table__row-img">
                                  <img src="../../assets/img/user2.jpg" alt="">
                                </div>
                              </td>
                              <td>
                                <div class="table__row-text">
                                <div class="table__row-name">
                                  Jose Bonifacio
                                </div>
                                <div class="table__row-sub">
                                  00002
                                </div>
                                </div>
                              </td>
                              <td>
                                <div class="table__action-buttons">
                                <a href="#" class="button button--primary button--sm action__cert">
                                SELECT
                                </a>
                                
                              </div>
                              </td>
                          </tr>
                          <tr>
                            
                              <td>
                                <div class="table__row-img">
                                  <img src="../../assets/img/user3.jpg" alt="">
                                </div>
                              </td>
                              <td>
                                <div class="table__row-text">
                                <div class="table__row-name">
                                  Andres Rizal
                                </div>
                                <div class="table__row-sub">
                                  00003
                                </div>
                                </div>
                              </td>
                              <td>
                                <div class="table__action-buttons">
                                <a href="#" class="button button--primary button--sm action__cert">
                                SELECT
                                </a>
                              </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                <div class="table__row-img">
                                  <img src="../../assets/img/user4.jpg" alt="">
                                </div>
                              </td>
                              <td>
                                <div class="table__row-text">
                                <div class="table__row-name">
                                  Bongbong Robredo
                                </div>
                                <div class="table__row-sub">
                                  00004
                                </div>
                                </div>
                              </td>
                              <td>
                                <div class="table__action-buttons">
                                <a href="#" class="button button--primary button--sm action__cert">
                                SELECT
                                </a>
                                
                              </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                <div class="table__row-img">
                                  <img src="../../assets/img/user5.jpg" alt="">
                                </div>
                              </td>
                              <td>
                                <div class="table__row-text">
                                <div class="table__row-name">
                                  Bong Ong
                                </div>
                                <div class="table__row-sub">
                                  00005
                                </div>
                                </div>
                              </td>
                              <td>
                                <div class="table__action-buttons">
                                <a href="#" class="button button--primary button--sm action__cert">
                                SELECT
                                </a>
                              </div>
                              </td>
                          </tr>
                      
                      </tbody>
                      </table>
                  </div>
                  </div>
      
               
                
              </div>
            </div>
           
            <div class="modal__container modal-busclearance" id="modal-busclearance">
              <div class="modal modal--md">
                <div class="modal__header">
                  <div class="modal__header-content">
      
                    <div class="modal__header-content--left">
                      modal
                    </div>
      
                    <div class="modal__header-content--right">
                      <a href="#" class="modal__close close">
                        <i class='bx bx-x'></i>
                      </a>
                    </div>
                  </div>
                </div>
      
                <div class="modal__body">
                  <div class="modal__body-content">
                    <h1>BUSINESS CLEARANCE</h1>
                  </div>
                  </div>
      
                <div class="modal__footer">
                  <div class="modal__footer-content">
                    <div class="modal__footer-content--left">
                    </div>
      
                    <div class="modal__footer-content--right">
                      <a href="#" class="button button--primary button--md">action</a>
      
                    </div>
                  </div>
                </div>
                
              </div>
            </div> -->


    </section>

  </div>

</main>
</body>

</html>