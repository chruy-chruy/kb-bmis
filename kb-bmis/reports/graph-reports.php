<?php
$page = 'Reports';
$headerTitle = 'Reports';
include "../../db_conn.php";
require_once "../../includes/header.php";
include "queries/monthly-data.php";

?>

<main>

    <div class="content">

        <section class="reports">


            <div class="card">
                <div class="card__header">
                    <div class="card__header-content">

                        <div class="card__header-content--left">

                            <ul class="reports__tabs-list">
                                <a href="graph-report.php">
                                    <li class="reports__tabs-item">
                                        Graphical View
                                    </li>
                                </a>
                                <a href="index.php">
                                    <li class="reports__tabs-item">
                                        Table View
                                    </li>
                                </a>
                            </ul>

                        </div>

                        <div class="card__header-content--right">
                            <a href="weekly-reports.php" style="background-color:tomato">Last 7 days</a>
                            <a href="graph-reports.php" style="background-color:tomato">1 month</a>
                            <a href="yearly-reports.php" style="background-color:tomato">1 year</a>
                        </div>

                    </div>
                </div>

                <div class="card__body">
                    <div class="card__body-content">
                        <div class="graph">
                            <h1>Barangay Clearance Sales</h1>
                            <canvas id="brgy-month"></canvas>
                            <h1>Business Clearance Sales</h1>
                            <canvas id="bs-month"></canvas>
                        </div>
                    </div>
                </div>

                <!-- card end -->
            </div>


        </section>

    </div>

</main>

<!--=============== MODALS ===============-->
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>

<?php include "charts/month-charts.php"; ?>

</body>

</html>