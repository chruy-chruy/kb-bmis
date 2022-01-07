<?php
$page = 'Archive';
$headerTitle = 'Official Archive';
include "../../db_conn.php";
require_once "../../includes/header.php";
?>
<main>

    <div class="content">
        <section class="archive">
            <!-- BUTANG LANG DIRI ☺ -->
            <a href="index.php" class="button button--md back-btn">
                <i class='bx bx-left-arrow-circle'></i>
                Back
            </a>

            <table id="residents-table" class="row-border">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>
                            <div class="residents__header-actions">
                                <div class="select__wrapper" id="residents__filter-container">
                                    <select class="select select--table" name="filter" id="residents__filter">
                                        <option value="">All</option>
                                        <option value="4Ps">4Ps</option>
                                        <option value="Person with Disability">Persons with Disability</option>
                                        <option value="Registered Voter">Registered Voters</option>
                                        <option value="Senior Citizen">Senior Citizens</option>
                                    </select>
                                </div>
                                <a href="new-resident.php" class="button button--primary button--md"
                                    data-target="#modal-newresident" id="add-resident">
                                    <i class='bx bx-trash'></i>
                                    <p>EMPTY ARCHIVE</p>
                                </a>


                                <div class="dropdown dropdown--export">
                                    <ul>
                                        <li class="dropdown__item">
                                            <a href="#">
                                                <i class='bx bxs-user-circle'></i>
                                                Excel
                                            </a>
                                        </li>
                                        <li class="dropdown__item">
                                            <a href="#">
                                                <i class='bx bx-exit'></i>
                                                PDF
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </th>
                    </tr>
                </thead>
                <tbody>

                    <td>
                        <div class="table__action-buttons">
                            <a href="#" class="button button--primary button--sm action__cert" id="action-cert">
                                <i class='bx bxs-file-blank'></i>
                                CERTIFICATE
                            </a>

                            <div class="dropdown dropdown--cert">
                                <ul>
                                    <li class="dropdown__item">
                                        <a href="../certificates/brgy-clearance.php?id=<?php echo $row['id'] ?>"
                                            class="link-brgycert">
                                            <i class='bx bxs-user-circle'></i>
                                            Barangay Clearance
                                        </a>
                                    </li>
                                    <li class="dropdown__item">
                                        <a href="../certificates/resident-business-clearance.php?id=<?php echo $row['id'] ?>"
                                            class="link-busclearance">
                                            <i class='bx bx-exit'></i>
                                            Business Clearance
                                        </a>
                                    </li>
                                </ul>
                            </div>


                            <a href="view-resident.php?id=<?php echo $row['id'] ?>"
                                class="button button--dark button--sm action__view" data-target="#modal-viewprofile"
                                id="action-view">
                                <i class='bx bxs-show'></i>
                                <p>VIEW</p>
                            </a>
                        </div>
                    </td>
                    </tr>


                </tbody>
            </table>


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
    left: 38%;
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