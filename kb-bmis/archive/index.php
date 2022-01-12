<?php
$page = 'Archive';
$headerTitle = 'Archive';
include "../../db_conn.php";
require_once "../../includes/header.php";
include "../../includes/preloader.php";

?>
<main>

    <div class="content">
        <section class="archive">
            <!-- BUTANG LANG DIRI ☺ -->

            <div class="group-29">
                <div class="group-21">
                    <button class="overlap-group btn" onclick="document.location='resident-archive.php'">
                        <img class="fa-solid-house-user" src="../../assets/img/fa-solid-house-user.svg" />

                    </button>



                </div>

                <div class="group-26">
                    <button class="overlap-group" onclick="document.location='official-archive.php'">
                        <img class="fa-soliduser-tie" src="../../assets/img/fa-solid-user-tie.svg" />


                    </button>
                </div>


            </div>



        </section>
    </div>

</main>

<!--=============== MODALS ===============-->


</body>

</html>

<style>
:root {
    --primary-color: #ee5252;
    --white-color: #f7f6fb;
    --red-color: #d41e21;
    --green-color: #63924d;
    --blue-color: #01497c;
}

.archive {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 80vh;
}

.group-29 {

    display: flex;
    flex-wrap: wrap;
    height: 90%;
    width: 98%;
    justify-content: center;
    align-items: center;
    margin-bottom: 100px;
}

.group-21 {
    position: relative;
    display: flex;
    justify-content: center;
    min-width: 502px;
    height: 382px;
    align-items: center;
    margin-right: 10px;
}

.group-26 {
    position: relative;
    display: flex;
    justify-content: center;
    min-width: 502px;
    height: 382px;
    align-items: center;

}


.group-27 {
    position: relative;
    display: flex;
    justify-content: center;
    min-width: 502px;
    height: 382px;
    align-items: flex-start;
    color: white;
    margin-right: 10px;
}

.group-28 {
    position: relative;
    display: flex;
    justify-content: center;
    min-width: 502px;
    height: 382px;
    align-items: flex-start;
    /* background-color: black; */
    /* margin-bottom: 20px; */
}

.overlap-group {
    align-items: center;
    justify-content: center;
    background-color: var(--primary-color);
    border-radius: 44px;
    display: flex;
    position: relative;
    height: 343px;
    padding: 50px 0;
    width: 400px;
    margin-top: 3%;
    color: white;
    text-align: center;
    text-decoration: none;
    border: none;
}

.group-21 :hover {
    background-color: var(--green-color);
}

.group-26 :hover {
    background-color: var(--green-color);
}

.group-27 :hover {
    background-color: var(--green-color);
}


.group-28 :hover {
    background-color: var(--green-color);
}

/* .official-archive{
      position: absolute;
      top: 80%;
      left: 40%;
  } */


.group-21 h1 {
    position: absolute;

    top: 80%;
    left: 35.5%;
}

.group-26 h1 {
    position: absolute;
    top: 80%;
    left: 36.5%;
}

.group-27 h1 {
    position: absolute;
    top: 80%;
    left: 42%;
}

.group-28 h1 {
    position: absolute;
    top: 80%;
    left: 44%;
}
</style>