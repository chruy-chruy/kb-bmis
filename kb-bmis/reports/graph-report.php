<?php
$page = 'Reports';
$headerTitle = 'Reports';
include "../../db_conn.php";
require_once "../../includes/header.php";
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


                        </div>

                    </div>
                </div>

                <div class="card__body">
                    <div class="card__body-content">

                    </div>
                </div>

                <!-- card end -->
            </div>


        </section>

    </div>

</main>

<!--=============== MODALS ===============-->


</body>

</html>