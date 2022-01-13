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

            <div class="row">
                <a href="index.php" class="button button--md back-btn">
                    <i class='bx bx-left-arrow-circle'></i>
                    Back
                </a>
            </div>

            <div class="card">
                <div class="card__header">
                    <div class="card__header-content">

                        <div class="card__header-content--left">

                            <ul class="reports__tabs-list">
                                <a href="brgy-transactions.php">
                                    <li class="reports__tabs-item">
                                        Barangay Clearance
                                    </li>
                                </a>
                                <a href="business-transactions.php">
                                    <li class="reports__tabs-item">
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
                                                                                } ?>">
                                    <h4>TO</h4>
                                    <input type="date" name="to_date" value="<?php if (isset($_GET['to_date'])) {
                                                                                    echo $_GET['to_date'];
                                                                                } else {
                                                                                } ?>">
                                    <button type="Submit"> Filter </button>

                                </div>



                            </form>

                        </div>

                    </div>
                </div>

                <div class="card__body">


                    <div class="card__body-content">

                        <table id="resTable" class="row-border">
                            <thead>
                                <tr>
                                    <th>Date Issued</th>
                                    <th>Name</th>
                                    <th>Business Name</th>
                                    <th>Business Type</th>
                                    <th>Amount</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <?php if (isset($_GET['from_date']) && isset($_GET['to_date'])) {

                                $from_date = $_GET['from_date'];
                                $to_date = $_GET['to_date'];

                                $query = "SELECT * FROM business_clearance WHERE date_issued BETWEEN '$from_date' AND '$to_date' ";
                                $query_run = mysqli_query($conn, $query);

                                if (mysqli_num_rows($query_run) > 0) {

                                    foreach ($query_run as $row) {

                            ?>
                            <tr>

                                <td><?php echo $row['date_issued'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['bus_name'] ?></td>
                                <td><?php echo $row['bus_type'] ?></td>
                                <td>₱<?php echo $row['price'] ?>.00</td>

                                <td></td>
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


<!--=============== CSS ===============-->

<style>
.input-date-range {
    position: relative;
    display: flex;
    justify-content: center;
    margin: auto;
    align-items: baseline;
    flex-wrap: nowrap;
    align-content: flex-start;
}

.input-date-range h4 {
    margin: 20px 20px;
}
</style>

<!--=============== JS ===============-->
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
<script>
$(document).ready(function() {
    $('#resTable').dataTable({
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print'
        ],
        "bLengthChange": false,
        "bInfo": false,
        "pageLength": 6
    });
});
</script>


</body>

</html>