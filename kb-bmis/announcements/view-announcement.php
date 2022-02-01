<?php
$page = 'Announcements';
$headerTitle = 'Announcements';
include "../../db_conn.php";
require_once "../../includes/header.php";
include "../../includes/preloader.php";
$id = $_GET["id"];
?>
<main>
    <div class="content">
        <section class="announcements">
            <a href="index.php" class="button button--md back-btn">
                <i class='bx bx-left-arrow-circle'></i>
                Back
            </a>
            <br>

            <!-- <div> -->

            <?php $squery = mysqli_query($conn, "select * from announcements where id = $id");
            while ($row = mysqli_fetch_array($squery)) {

            ?>

                <div class="card card--announcements">
                    <div class="card__header">
                        <div class="card__header-content">
                            <div class="card__header-content--left">
                                Recipients: <strong><?php echo $row["recipients"]; ?></strong>
                            </div>
                            <div class="card__header-content--right">
                                <a class="button button--icon button--icon-sm button--icon-primary modal-trigger" data-modal-id="modal-deletemessage">
                                    <i class='bx bx-trash' data-modal-id="modal-deletemessage"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card__body">
                        <div class="card__body-content" style="align-items: flex-start; position:relative;">
                            <div class="message__date-time"><?php echo date("l, F j Y", strtotime($row["date"])); ?> - <?php echo date("g:i A", strtotime($row["time"])); ?></div>
                            <div class="message">
                                <?php echo $row["message"]; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- </div> -->
        </section>
    </div>
</main>

<div class="modal__wrapper" id="modal-deletemessage">
    <section class="modal__window modal__window--md">
        <header class="modal__header">
            <h3>Delete Message</h3>
            <button type="button" class="modal__close close" aria-label="Close modal window">
                <i class='bx bx-x'></i>
            </button>
        </header>
        <div class="modal__body">
            Are you sure you want to delete this message?
        </div>

        <footer class="modal__footer">
            <a href="delete.php?id=<?php echo $row["id"]; ?>" class="button button--danger button--md">DELETE</a>
            <a href="#" class="button button--dark button--md modal__cancel close">CANCEL</a>
        </footer>
    </section>
</div>
<?php } ?>