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
                                    <a href="#">
                                        Last 7 days
                                    </a>
                                </li>

                                <li class="tab">
                                    <a href="#">
                                        Monthly
                                    </a>
                                </li>

                                <li class="tab">
                                    <a href="#">
                                        Yearly
                                    </a>
                                </li>

                            </ul>

                        </div>

                        <div class="card__header-content--right">

                        </div>

                    </div>
                </div>

                <div class="card__body">
                    <div class="card__body-content" style="height: 375px;">




                        <div class="tabContent reports">


                            <div>
                                <div>
                                    <div class="dashboard__card-top--value"><?php echo $total_WeekBrgyClr['weeklyBrgyTotal'] ?></div>
                                    <div class="dashboard__card-top--label">Barangay Clearance</div>
                                </div>

                                <span class="dashboard__card-top--icon"><i class='bx bx-file'></i></span>
                            </div>

                            <div>
                                <div>
                                    <div class="dashboard__card-top--value"><?php echo $total_WeekBusinessClr['weeklyBusTotal'] ?>
                                    </div>
                                    <div class="dashboard__card-top--label">Business Clearance</div>

                                </div>

                                <span class="dashboard__card-top--icon"><i class='bx bxs-file'></i></span>
                            </div>



                            <div class="graph">
                                <h1>Barangay Clearance Sales</h1>
                                <canvas id="brgy-week"></canvas>
                            </div>
                            <div class="graph">
                                <h1>Business Clearance Sales</h1>
                                <canvas id="bs-week"></canvas>
                            </div>

                        </div>

                        <div class="tabContent reports" style="display: none;">


                            <div>
                                <div>
                                    <div class="dashboard__card-top--value"><?php echo $total_MonthBrgyClr['monthlyBrgyTotal'] ?></div>
                                    <div class="dashboard__card-top--label">Barangay Clearance</div>
                                </div>

                                <span class="dashboard__card-top--icon"><i class='bx bx-file'></i></span>
                            </div>

                            <div>
                                <div>
                                    <div class="dashboard__card-top--value"><?php echo $total_MonthBusinessClr['monthlyBusTotal'] ?>
                                    </div>
                                    <div class="dashboard__card-top--label">Business Clearance</div>

                                </div>

                                <span class="dashboard__card-top--icon"><i class='bx bxs-file'></i></span>
                            </div>


                            <div class="graph">
                                <h1>Barangay Clearance Sales</h1>
                                <canvas id="brgy-month"></canvas>
                            </div>
                            <div class="graph">
                                <h1>Business Clearance Sales</h1>
                                <canvas id="bs-month"></canvas>
                            </div>

                        </div>

                        <div class="tabContent reports" style="display: none;">


                            <div>
                                <div>
                                    <div class="dashboard__card-top--value"><?php echo $total_YearBrgyClr['yearlyBrgyTotal'] ?></div>
                                    <div class="dashboard__card-top--label">Barangay Clearance</div>
                                </div>

                                <span class="dashboard__card-top--icon"><i class='bx bx-file'></i></span>
                            </div>

                            <div>
                                <div>
                                    <div class="dashboard__card-top--value"><?php echo $total_YearBusinessClr['yearlyBusTotal'] ?>
                                    </div>
                                    <div class="dashboard__card-top--label">Business Clearance</div>

                                </div>

                                <span class="dashboard__card-top--icon"><i class='bx bxs-file'></i></span>
                            </div>


                            <div class="graph">
                                <h1>Barangay Clearance Sales</h1>
                                <canvas id="brgy-year"></canvas>
                            </div>
                            <div class="graph">
                                <h1>Business Clearance Sales</h1>
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