<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: ../../index.php");
    exit();
}
include "../../db_conn.php";
$role = $_SESSION['role'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../../assets/img/north-logo.ico" type="image/x-icon">

    <!--=============== BOX ICONS ===============-->
    <link href="../../vendors/boxicons-2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!--=============== JQUERY ===============-->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   -->
    <script type="text/javascript" src="../../vendors/jquery.min.js"></script>

    <!--=============== DATATABLES ===============-->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script> -->
    <link rel="stylesheet" type="text/css" href="../../vendors/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="../../vendors/jquery.dataTables.min.js"></script>

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../../assets/css/style.css" />

    <!--=============== MAIN JS ===============-->

    <script src="../../assets/js/main.js" defer></script>

    <?php if ($page == 'Residents') {
        echo '
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>';
    }
    ?>

    <?php if ($page == 'Certificates') {
        echo '
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>';
    }
    ?>

    <?php if ($page == 'Reports') {
        echo '
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
        <script src="../../assets/js/brgy-pdf.js" type="text/javascript"></script>
        <script src="../../assets/js/business-pdf.js" type="text/javascript"></script>
        ';
    }
    ?>

    <title>Barangay Management System | <?php echo $page; ?></title>
</head>

<body>

    <!--=============== NAV ===============-->
    <nav class="nav">
        <span class="nav__close">
            <i class='bx bx-x'></i>
        </span>
        <ul class="nav__list">


            <li class="nav__item">
                <a href="../dashboard/" class="nav__logo">
                    <img src="../../assets/img/north-logo.png" alt="">
                    <span class="nav__logo-text">DAD. NORTH</span>
                </a>
            </li>


            <li class="nav__item <?php if ($page == 'Dashboard') {
                                        echo 'nav__item--active';
                                    } ?>">
                <a href="../dashboard/" class="nav__item-link">
                    <i class='bx bxs-dashboard'></i>
                    <span class="nav__item-text">Dashboard</span>
                </a>
            </li>


            <li class="nav__item <?php if ($page == 'Residents') {
                                        echo 'nav__item--active';
                                    } ?>">
                <a href="../residents/" class="nav__item-link">
                    <i class='bx bxs-group'></i>
                    <span class="nav__item-text">Residents</span>
                </a>
            </li>


            <li id="nav-certificates" class="nav__item <?php if ($page == 'Certificates') {
                                                            echo 'nav__item--active';
                                                        } ?>">
                <a href="../certificates/" class="nav__item-link">
                    <i class='bx bxs-file-blank'></i>
                    <span class="nav__item-text">Certificates</span>
                </a>
            </li>


            <li class="nav__item <?php if ($page == 'Reports') {
                                        echo 'nav__item--active';
                                    } ?>">
                <a href="../reports/" class="nav__item-link">
                    <i class='bx bxs-bar-chart-alt-2'></i>
                    <span class="nav__item-text">Reports</span>
                </a>
            </li>



            <li class="nav__item <?php if ($page == 'Announcements') {
                                        echo 'nav__item--active';
                                    } ?>">
                <a href="../announcements/" class="nav__item-link">
                    <i class='bx bxs-megaphone'></i>
                    <span class="nav__item-text">Announcements</span>
                </a>
            </li>



            <li class="nav__item <?php if ($page == 'Barangay Officials') {
                                        echo 'nav__item--active';
                                    } ?>">
                <a href="../barangay-officials" class="nav__item-link">
                    <i class='bx bxs-user-voice'></i>
                    <span class="nav__item-text">Barangay Officials</span>
                </a>
            </li>



            <li class="nav__item <?php if ($page == 'Archive') {
                                        echo 'nav__item--active';
                                    } ?>">
                <a href="../archive/" class="nav__item-link">
                    <i class='bx bxs-archive'></i>
                    <span class="nav__item-text">Archive</span>
                </a>
            </li>

            <?php if ($role == 'Admin') { ?>

                <li class="nav__item <?php if ($page == 'User Accounts') {
                                            echo 'nav__item--active';
                                        } ?>">
                    <a href="../user-accounts/" class="nav__item-link">
                        <i class='bx bxs-user-rectangle'></i>
                        <span class="nav__item-text">User Accounts</span>
                    </a>
                </li>

            <?php } ?>

        </ul>
    </nav>


    <!--=============== HEADER ===============-->
    <header class="header">
        <span class="header__menu">
            <i class='bx bx-menu'></i>
        </span>
        <div class="header__title">
            <?php echo $headerTitle; ?>
        </div>
        <a href="#" class="header__img">

            <?php
            if ($role == 'Admin') {
            ?>
                <img src="../../assets/img/admin.svg" alt="user" />
            <?php
            } ?>

            <?php
            if ($role == 'Barangay Secretary') {
                $sql = mysqli_query($conn, "SELECT * FROM residents WHERE occupation = '$role'");
                while ($row = mysqli_fetch_array($sql)) { ?>
                    <img src="../residents/images/<?php echo $row['img_url'] ?>" alt="user" />
            <?php
                }
            } ?>

        </a>
        <div class="header__role"> <?php echo $role ?></div>
        <div class="header__toggle">
            <i class='bx bxs-down-arrow'></i>
        </div>
        <div class="dropdown dropdown--user dropdown--user-show">
            <ul>
                <li class="dropdown__item">
                    <a href="../user-accounts/view-user.php?role=<?php echo $role ?>">
                        <i class='bx bxs-user-circle'></i>
                        User Profile
                    </a>
                </li>
                <li class="dropdown__item">
                    <a href="../../logout.php">
                        <i class='bx bx-exit'></i>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </header>