<?php
$page = 'Archive';
$headerTitle = 'Archive';
include "../../db_conn.php";
require_once "../../includes/header.php";
include "../../includes/preloader.php";

?>
<main>

    <div class="content">
        <section class="archive" style="height: 80vh;">

            <div class="center--row col" style="gap: 50px;">
                <a href="resident-archive.php" class="button button--primary button--xl certificates__button modal-trigger" data-modal-id="modal-brgyclearance">
                    <i class='bx bxs-group'></i>
                    <p>RESIDENTS</p>
                </a>


                <a href="official-archive.php" class="button button--primary button--xl certificates__button">
                    <i class='bx bx-user-voice'></i>
                    <p>BARANGAY OFFICIALS</p>
                </a>
            </div>



        </section>
    </div>

</main>

<!--=============== MODALS ===============-->


</body>

</html>