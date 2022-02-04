<?php
$page = 'Reports';
$headerTitle = 'Reports';
include "../../db_conn.php";
include "../reports/data/total-transactions.php";
require_once "../../includes/header.php";


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

                            <!-- <ul class="reports__tabs-list">
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
                            </ul> -->

                            <ul class="tabs">
                                <li class="tab tab--active">
                                    Last 7 days
                                </li>

                                <li class="tab">
                                    Monthly
                                </li>

                                <li class="tab">
                                    Yearly
                                </li>

                            </ul>

                        </div>

                        <div class="card__header-content--right">

                        </div>

                    </div>
                </div>

                <div class="card__body" style="padding: 40px 10px;">
                    <div class="card__body-content" style="min-height: 500px;">




                        <div class="tabContent reports">


                            <div class="reports__card">
                                <div>
                                    <div class="reports__card--value"><?php echo $total_WeekBrgyClr['weeklyBrgyTotal'] ?></div>
                                    <div class="reports__card--label">Barangay Clearance</div>
                                </div>

                                <span class="reports__card--icon"><i class='bx bx-file'></i></span>
                            </div>

                            <div class="reports__card">
                                <div>
                                    <div class="reports__card--value"><?php echo $total_WeekBusinessClr['weeklyBusTotal'] ?>
                                    </div>
                                    <div class="reports__card--label">Business Clearance</div>

                                </div>

                                <span class="reports__card--icon"><i class='bx bxs-file'></i></span>
                            </div>



                            <div class="graph">
                                <h3>Barangay Clearance Sales</h3>
                                <canvas id="brgy-week"></canvas>
                            </div>
                            <div class="graph">
                                <h3>Business Clearance Sales</h3>
                                <canvas id="bs-week"></canvas>
                            </div>

                        </div>

                        <div class="tabContent reports" style="display: none;">


                            <div class="reports__card">
                                <div>
                                    <div class="reports__card--value"><?php echo $total_MonthBrgyClr['monthlyBrgyTotal'] ?></div>
                                    <div class="reports__card--label">Barangay Clearance</div>
                                </div>

                                <span class="reports__card--icon"><i class='bx bx-file'></i></span>
                            </div>

                            <div class="reports__card">
                                <div>
                                    <div class="reports__card--value"><?php echo $total_MonthBusinessClr['monthlyBusTotal'] ?>
                                    </div>
                                    <div class="reports__card--label">Business Clearance</div>

                                </div>

                                <span class="reports__card--icon"><i class='bx bxs-file'></i></span>
                            </div>


                            <div class="graph">
                                <h3>Barangay Clearance Sales</h3>
                                <canvas id="brgy-month"></canvas>
                            </div>
                            <div class="graph">
                                <h3>Business Clearance Sales</h3>
                                <canvas id="bs-month"></canvas>
                            </div>

                        </div>

                        <div class="tabContent reports" style="display: none;">


                            <div class="reports__card">
                                <div>
                                    <div class="reports__card--value"><?php echo $total_YearBrgyClr['yearlyBrgyTotal'] ?></div>
                                    <div class="reports__card--label">Barangay Clearance</div>
                                </div>

                                <span class="reports__card--icon"><i class='bx bx-file'></i></span>
                            </div>

                            <div class="reports__card">
                                <div>
                                    <div class="reports__card--value"><?php echo $total_YearBusinessClr['yearlyBusTotal'] ?>
                                    </div>
                                    <div class="reports__card--label">Business Clearance</div>

                                </div>

                                <span class="reports__card--icon"><i class='bx bxs-file'></i></span>
                            </div>


                            <div class="graph">
                                <h3>Barangay Clearance Sales</h3>
                                <canvas id="brgy-year"></canvas>
                            </div>
                            <div class="graph">
                                <h3>Business Clearance Sales</h3>
                                <canvas id="bs-year"></canvas>
                            </div>
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
<script type="text/javascript" src="../../assets/js/chart.js"></script>
<!-- -->

</body>

</html>