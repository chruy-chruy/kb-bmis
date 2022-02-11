<?php
$headerTitle = 'Dashboard';
$page = 'Dashboard';

require_once "../../includes/header.php";
include "../../db_conn.php";
include "data-dashboard.php";
include "../../includes/preloader.php";

?>

<!--=============== MAIN ===============-->
<main>

    <!-- ABOUT -->


    <!-- DASHBOARD -->
    <div class="content" style="display:block;">

        <section class="dashboard">
            <div class="dashboard__logo">
                <img src="../../assets/img/north-logo.png" alt="">
            </div>


            <div class="dashboard__cards">
                <div class="dashboard__card">
                    <div>
                        <div class="dashboard__card--value"><?php echo $countPopulation ?></div>
                        <div class="dashboard__card--label">Total Population</div>
                    </div>

                    <span class="dashboard__card--icon"><i class='bx bx-group'></i></span>
                </div>

                <div class="dashboard__card">
                    <div>
                        <div class="dashboard__card--value"><?php echo $countVoters['voters']; ?></div>
                        <div class="dashboard__card--label">Registered Voters</div>
                    </div>

                    <span class="dashboard__card--icon"><i class='bx bx-box'></i></span>
                </div>

                <div class="dashboard__card">
                    <div>
                        <div class="dashboard__card--value"><?php echo $total_brgyClr['brgyTotal']; ?></div>
                        <div class="dashboard__card--label">Barangay Clearance</div>
                    </div>

                    <span class="dashboard__card--icon"><i class='bx bx-file'></i></span>
                </div>

                <div class="dashboard__card">
                    <div>
                        <div class="dashboard__card--value"><?php echo $total_businessClr['busTotal']; ?>
                        </div>
                        <div class="dashboard__card--label">Business Clearance</div>

                    </div>

                    <span class="dashboard__card--icon"><i class='bx bxs-file'></i></span>
                </div>


            </div>



            <!-- CHARTS -->
            <div class="dashboard__charts">
                <div class="dashboard__chart dashboard__chart--chart2">
                    <canvas id="myChart2"></canvas>
                </div>
                <div class="dashboard__chart dashboard__chart--chart3">
                    <canvas id="myChart3"></canvas>
                </div>
            </div>

            <div class="dashboard__chart dashboard__chart--chart1">
                <canvas id="myChart1"></canvas>
            </div>



        </section>

    </div>

    <!-- RESIDENTS -->



</main>



<!--=============== SCROLL UP ===============-->


<!--=============== CHART JS ===============-->
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>

<?php include "charts.php"; ?>

</body>

</html>