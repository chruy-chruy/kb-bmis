<?php
$page = 'Reports';
$headerTitle = 'Reports';
include "../../db_conn.php";

require_once "../../includes/header.php";
include "../../includes/preloader.php";
?>



<main>

    <div class="content">

        <section class="reports">

            <?php
            include "../../includes/back-button.php";
            ?>

            <div class="card">
                <div class="card__header">
                    <div class="card__header-content">

                        <div class="card__header-content--left">

                            <ul class="tabs">
                                <a href="brgy-transactions.php">
                                    <li class="tab tab--active">
                                        Barangay Clearance
                                    </li>
                                </a>

                                <a href="business-transactions.php">
                                    <li class="tab">
                                        Business Clearance
                                    </li>
                                </a>
                            </ul>

                        </div>

                        <div class="card__header-content--right">

                            <form id="reportForm" action="" method="GET">

                                <div class="input-date-range">
                                    <input type="date" name="from_date" value="<?php if (isset($_GET['from_date'])) {
                                                                                    echo $_GET['from_date'];
                                                                                } else {
                                                                                } ?>" required>
                                    <h4>TO</h4>
                                    <input type="date" name="to_date" value="<?php if (isset($_GET['to_date'])) {
                                                                                    echo $_GET['to_date'];
                                                                                } else {
                                                                                } ?>" required>
                                    <button type="Submit" class="button button--sm button--primary" style="margin-left: 12px;">Filter</button>

                                </div>



                            </form>

                        </div>

                    </div>
                </div>

                <div class="card__body">


                    <div class="card__body-content">

                        <table id="reports-brgyclr-table">
                            <thead>
                                <tr>
                                    <th>Cedula No.</th>
                                    <th>Date Issued</th>
                                    <th>Name</th>
                                    <th>Purpose</th>
                                    <th>Amount</th>

                                </tr>
                            </thead>
                            <?php if (isset($_GET['from_date']) && isset($_GET['to_date'])) {

                                $from_date = $_GET['from_date'];
                                $to_date = $_GET['to_date'];

                                $query = "SELECT * FROM barangay_clearance WHERE date_issued BETWEEN '$from_date' AND '$to_date' ";
                                $query_run = mysqli_query($conn, $query);

                                if (mysqli_num_rows($query_run) > 0) {

                                    foreach ($query_run as $row) {

                            ?>
                                        <tr>
                                            <td><?php echo $row['cedula_number'] ?></td>
                                            <td><?php echo $row['date_issued'] ?></td>
                                            <td><?php echo $row['name'] ?></td>
                                            <td><?php echo $row['purpose'] ?></td>
                                            <td>₱<?php echo $row['price'] ?></td>


                                        </tr>
                            <?php
                                    }
                                }
                                // else {
                                //     echo "No record found";
                                // }
                            }
                            ?>
                    </div>
                </div>

                <!-- card end -->
            </div>


        </section>

    </div>

</main>

<!--=============== MODALS ===============-->



<!--=============== JS ===============-->

</body>

</html>