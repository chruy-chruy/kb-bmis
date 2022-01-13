<?php
$page = 'Reports';
$headerTitle = 'Reports';
include "../../db_conn.php";
require_once "../../includes/header.php";


?>
<script type="text/javascript" src="../../assets/js/chart.js"></script>
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
                                <a href="weekly-reports.php">
                                    <li class="reports__tabs-item">
                                        Last 7 Days
                                    </li>
                                </a>
                                <a href="monthly-reports.php">
                                    <li class="reports__tabs-item">
                                        Monthly
                                    </li>
                                </a>
                                <a href="yearly-reports.php">
                                    <li class="reports__tabs-item">
                                        Yearly
                                    </li>
                                </a>
                            </ul>

                        </div>

                        <div class="card__header-content--right">

                        </div>

                    </div>
                </div>

                <div class="card__body">
                    <div class="card__body-content">
                        <div class="graph">
                            <h1>Barangay Clearance Sales</h1>
                            <canvas id="brgy-week"></canvas>
                            <h1>Business Clearance Sales</h1>
                            <canvas id="bs-week"></canvas>
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

<!-- -->

</body>

</html>