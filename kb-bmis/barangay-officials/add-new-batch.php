<?php
$page = 'Barangay Officials';
$headerTitle = 'Barangay Officials';
include "../../db_conn.php";
require_once "../../includes/header.php";

$from = $_POST['from'];
$to = $_POST['to'];
?>


<main>

    <div class="content">
        <section class="barangay-information">
            <input type="text" name="batch" value="<?php echo $from . "-" . $to ?>" hidden>

            <div class="card">
                <div class="card__header">
                    <div class="card__header-content">


                        <div class="card__header-content--left">
                            <h3>Officials <?php echo $from . "-" . $to ?></h3>
                            <!-- <ul class="information__tabs-list">
                  <li class="tab tab--active" data-tab-id="#brgy-officials">
                    Barangay Officials
                  </li>
                  <li class="tab" data-tab-id="#sk-officials">
                    SK Officials
                  </li>
                </ul> -->

                        </div>
                        <br>
                        <div class="card__header-content--right">

                            <div class="card__footer-content">
                                <a href="#" class="button button--primary button--md modal-trigger" id="add-official" data-modal-id="modal-select-official">
                                    <i class='bx bx-plus'></i>
                                    <p>ADD NEW</p>
                                </a>
                                <a href="#" class="button button--dark button--md modal-trigger" data-modal-id="modal-cancel">Cancel</a>
                            </div>

                            <!-- card end -->


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
                                        <td>
                                            <div class="table__row-img">
                                                <img src="../../assets/img/user2.jpg" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table__row-text">
                                                <div class="table__row-name">
                                                    --
                                                </div>
                                                <div class="table__row-sub">
                                                    BARANGAY CAPTAIN
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table__action-buttons">
                                                <a href="#" class="button button--md button--primary modal-trigger modal-trigger" id="add-official" data-modal-id="modal-select-official">
                                                    view
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

<!-- select officials modal -->
<div class=" modal__wrapper" id="modal-select-official">
    <section class="modal__window modal__window--md">
        <header class="modal__header">
            <h3>Add New Batch</h3>
            <button type="button" class="modal__close close" aria-label="Close modal window">
                <i class='bx bx-x'></i>
            </button>
        </header>
        <div class="officials-table" class="modal__body">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
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
                                        <?php echo $row['first_name'] ?> <?php echo $row['mid_name'] ?> <?php echo $row['last_name'] ?>
                                    </div>
                                    <div class="table__row-sub">
                                        <?php echo $row['id'] ?>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="table__action-buttons">
                                    <a href="new-official.php?id=<?php echo $row['id'] ?>&batch=<?php echo $from . "-" . $to ?>" class="button button--primary button--sm action__cert close" id="select-resident">
                                        select
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

<div class="modal__wrapper" id="modal-select-official2">
    <section class="modal__window modal__window--md">
        <header class="modal__header">
            <h3>Add New Batch</h3>
            <button type="button" class="modal__close close" aria-label="Close modal window">
                <i class='bx bx-x'></i>
            </button>
        </header>
        <div class="officials-table" class="modal__body">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
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
                                        <?php echo $row['first_name'] ?> <?php echo $row['mid_name'] ?> <?php echo $row['last_name'] ?>
                                    </div>
                                    <div class="table__row-sub">
                                        <?php echo $row['id'] ?>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="table__action-buttons">
                                    <a href="new-official.php?id=<?php echo $row['id'] ?>&batch=<?php echo $from . "-" . $to ?>" class="button button--primary button--sm action__cert close" id="select-resident">
                                        select
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

    <!-- modals -->
    <?php
    include "../../includes/modal-cancel.php";
    ?>


</div>

</body>

</html>