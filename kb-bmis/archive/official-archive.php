<?php

$page = 'Official Archive';
$headerTitle = 'Official Archive';
include "../../db_conn.php";
require_once "../../includes/header.php";
include "../../includes/preloader.php";
?>


<main>

    <div class="content">
        <section class="barangay-information">

            <div class="left">
                <div>
                    <a href="index.php" class="button button--md back-btn" style="position: relative; margin-bottom:14px; margin-left:-15px;">
                        <i class='bx bx-left-arrow-circle'></i>
                        Back
                    </a>
                </div>
            </div>

            <table id="residents-table" class="row-border">
                <thead>
                    <tr>

                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>

                            <div class="residents__header-actions">

                                <div class="select__wrapper" id="residents__filter-container">
                                    <select class="select select--table" name="filter" id="residents__filter">
                                        <option value="">All</option>
                                        <option value="4Ps">4Ps</option>
                                        <option value="Person with Disability">Persons with Disability</option>
                                        <option value="Registered Voter">Registered Voters</option>
                                        <option value="Senior Citizen">Senior Citizens</option>
                                    </select>
                                </div>
                                <a href="#" class="button button--primary button--sm modal-trigger" data-modal-id="modal-delete">
                                    <i class='bx bxs-trash' data-modal-id="modal-delete"></i>
                                    Delete All </a>


                            </div>

                        </th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $squery =  mysqli_query($conn, "select * from residents_archive");
                    while ($row = mysqli_fetch_array($squery)) {

                    ?>

                        <tr>
                            <td><?php echo $row['4ps_status'] ?></td>
                            <td><?php echo $row['disability_status'] ?></td>
                            <td><?php echo $row['voter_status'] ?></td>
                            <td><?php echo $row['senior_status'] ?></td>
                            <td>
                                <div class="table__row-img">
                                    <img src="../../assets/img/user.jpg" alt="">
                                </div>
                            </td>
                            <td>
                                <div class="table__row-text">
                                    <div class="table__row-name">
                                        <?php echo $row['first_name'] ?> <?php echo $row['mid_name'] ?>
                                        <?php echo $row['last_name'] ?>
                                    </div>
                                    <div class="table__row-sub">
                                        <?php echo $row['resident_id'] ?>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="table__action-buttons">
                                    <a href="view-resident.php?residents_archive_id=<?php echo $row['residents_archive_id'] ?>" class="button button--dark button--sm action__view" data-target="#modal-viewprofile" id="action-view">
                                        <i class='bx bxs-show'></i>
                                        <p>VIEW</p>
                                    </a>
                                </div>
                            </td>
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>


        </section>
    </div>

    </div>
    </div>

</main>


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
            Are you sure you want to empty archive?


        </div>
        <footer class="modal__footer">
            <a href="controllers/official-empty-archive.php" class="button button--danger button--md">Delete All</a>
            <a href="#" class="button button--dark button--md modal__cancel close">Cancel</a>

        </footer>
    </section>
</div>


</body>

</html>