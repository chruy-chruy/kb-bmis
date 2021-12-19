<?php
$headerTitle = 'Dashboard';
$page = 'Dashboard';
require_once "../../includes/header.php";
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


        <div class="dashboard__cards-top">
            <div class="dashboard__card-top">
                <div>
                  <div class="dashboard__card-top--value">10734</div>
                  <div class="dashboard__card-top--label">Population</div>
                </div>
                
                <span class="dashboard__card-top--icon"><i class='bx bx-group'></i></span>
            </div>

            <div class="dashboard__card-top">
                <div>
                  <div class="dashboard__card-top--value">7345</div>
                  <div class="dashboard__card-top--label">Registered Voters</div>
                </div>

                <span class="dashboard__card-top--icon"><i class='bx bx-box'></i></span>
            </div>

            <div class="dashboard__card-top">
                <div>
                  <div class="dashboard__card-top--value">4192</div>
                  <div class="dashboard__card-top--label">Happy</div>
                </div>
                
                <span class="dashboard__card-top--icon"><i class='bx bx-happy-alt' ></i></span>
            </div>

            <div class="dashboard__card-top">
                <div>
                  <div class="dashboard__card-top--value">6542</div>
                  <div class="dashboard__card-top--label">Angry</div>
                </div>
                
                <span class="dashboard__card-top--icon"><i class='bx bx-angry' ></i></span>
            </div>
          </div>

          <!-- <hr> -->

          <!-- CHARTS -->
          <div class="dashboard__cards-bottom">
            <div class="dashboard__card-bottom dashboard__card-bottom--card1">
              <canvas id="myChart"></canvas>
            </div>
            <div class="dashboard__card-bottom dashboard__card-bottom--card2">
              <canvas id="myChart2"></canvas>
            </div>
            <!-- <div class="grid grid--3">
            </div> -->
          </div>

          <!-- <span class="dashboard__down-arrow">
            <i class='bx bxs-down-arrow bx-fade-up' ></i>
          </span> -->
        </section>
        
        <!-- <section class="dashboard__notes">
          Hello, North!
        </section> -->
      </div>

      <!-- RESIDENTS -->
      
      
      
    </main>

    <!--=============== SCROLL UP ===============-->

    <!--=============== CHART JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>

  </body>
</html>
