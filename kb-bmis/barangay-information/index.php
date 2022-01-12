<?php
  $page = 'Barangay Information';
  $headerTitle = 'Barangay Information';
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

              <section class="brgy-officials" id="brgy-officials" >
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
                        <td>
                          <div class="table__row-img">
                            <img src="../../assets/img/user2.jpg" alt="">
                          </div>
                        </td>
                        <td>
                          <div class="table__row-text">
                          <div class="table__row-name">
                            Juana Dela Cruz
                          </div>
                          <div class="table__row-sub">
                            BARANGAY CAPTAIN
                          </div>
                          </div>
                        </td>
                        <td>
                          <div class="table__action-buttons">
                          <a href="view-official.php" class="button button--primary button--sm action__cert" id="action-cert">
                          VIEW
                          </a>
                        </div>
                        </td>
                    </tr>
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
                            BARANGAY COUNCILOR
                          </div>
                          </div>
                        </td>
                        <td>
                          <div class="table__action-buttons">
                          <a href="#" class="button button--primary button--sm action__cert" id="action-cert">
                          VIEW
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
                            Juana Dela Cruz
                          </div>
                          <div class="table__row-sub">
                            BARANGAY COUNCILOR
                          </div>
                          </div>
                        </td>
                        <td>
                          <div class="table__action-buttons">
                          <a href="#" class="button button--primary button--sm action__cert" id="action-cert">
                          VIEW
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
                            Juana Dela Cruz
                          </div>
                          <div class="table__row-sub">
                            BARANGAY COUNCILOR
                          </div>
                          </div>
                        </td>
                        <td>
                          <div class="table__action-buttons">
                          <a href="#" class="button button--primary button--sm action__cert" id="action-cert">
                          VIEW
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
                            Juana Dela Cruz
                          </div>
                          <div class="table__row-sub">
                            BARANGAY COUNCILOR
                          </div>
                          </div>
                        </td>
                        <td>
                          <div class="table__action-buttons">
                          <a href="#" class="button button--primary button--sm action__cert" id="action-cert">
                          VIEW
                          </a>
                        </div>
                        </td>
                    </tr>
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
                            BARANGAY COUNCILOR
                          </div>
                          </div>
                        </td>
                        <td>
                          <div class="table__action-buttons">
                          <a href="#" class="button button--primary button--sm action__cert" id="action-cert">
                          VIEW
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
                            BARANGAY COUNCILOR
                          </div>
                          </div>
                        </td>
                        <td>
                          <div class="table__action-buttons">
                          <a href="#" class="button button--primary button--sm action__cert">
                          VIEW
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
                            BARANGAY COUNCILOR
                          </div>
                          </div>
                        </td>
                        <td>
                          <div class="table__action-buttons">
                          <a href="#" class="button button--primary button--sm action__cert">
                          VIEW
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
                            BARANGAY SECRETARY
                          </div>
                          </div>
                        </td>
                        <td>
                          <div class="table__action-buttons">
                          <a href="#" class="button button--primary button--sm action__cert">
                          VIEW
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
                            BARANGAY TREASURER
                          </div>
                          </div>
                        </td>
                        <td>
                          <div class="table__action-buttons">
                          <a href="#" class="button button--primary button--sm action__cert">
                          VIEW
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
                            SK CHAIRPERSON
                          </div>
                          </div>
                        </td>
                        <td>
                          <div class="table__action-buttons">
                          <a href="#" class="button button--primary button--sm action__cert">
                          VIEW
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
                            SK COUNCILOR
                          </div>
                          </div>
                        </td>
                        <td>
                          <div class="table__action-buttons">
                          <a href="#" class="button button--primary button--sm action__cert">
                          VIEW
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
                            SK COUNCILOR
                          </div>
                          </div>
                        </td>
                        <td>
                          <div class="table__action-buttons">
                          <a href="#" class="button button--primary button--sm action__cert">
                          VIEW
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
                            SK COUNCILOR
                          </div>
                          </div>
                        </td>
                        <td>
                          <div class="table__action-buttons">
                          <a href="#" class="button button--primary button--sm action__cert">
                          VIEW
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
                            SK COUNCILOR
                          </div>
                          </div>
                        </td>
                        <td>
                          <div class="table__action-buttons">
                          <a href="#" class="button button--primary button--sm action__cert">
                          VIEW
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
                            SK COUNCILOR
                          </div>
                          </div>
                        </td>
                        <td>
                          <div class="table__action-buttons">
                          <a href="#" class="button button--primary button--sm action__cert">
                          VIEW
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
                            SK COUNCILOR
                          </div>
                          </div>
                        </td>
                        <td>
                          <div class="table__action-buttons">
                          <a href="#" class="button button--primary button--sm action__cert">
                          VIEW
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
                            SK COUNCILOR
                          </div>
                          </div>
                        </td>
                        <td>
                          <div class="table__action-buttons">
                          <a href="#" class="button button--primary button--sm action__cert">
                          VIEW
                          </a>
                        </div>
                        </td>
                    </tr>
                
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
                  <button
                    type="button"
                    class="modal__close close"
                    aria-label="Close modal window"
                  >
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
                              <a href="new-official.php" class="button button--primary button--sm action__cert" id="action-cert">
                              SELECT
                              </a>
                            </div>
                            </td>
                        </tr>
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
                              <a href="new-official.php" class="button button--primary button--sm action__cert" id="action-cert">
                              SELECT
                              </a>
                            </div>
                            </td>
                        </tr>
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
                              <a href="new-official.php" class="button button--primary button--sm action__cert" id="action-cert">
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
              </section>
            </div>
</body>
</html>