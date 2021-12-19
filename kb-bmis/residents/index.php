
<?php
  $page = 'Residents';
  $headerTitle = 'Residents';
  include "../../db_conn.php";
  require_once "../../includes/header.php";
?>

    <main>

        <div class="content">

            <section class="residents">
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
                        <a href="new-resident.php" class="button button--primary button--md" data-target="#modal-newresident" id="add-resident">
                          <i class='bx bx-plus'></i>
                          <p>ADD NEW</p>
                        </a>
                        <a href="#" class="button button--dark button--md" id="export-resident">
                          <i class='bx bxs-file-export' ></i>
                          <p>EXPORT</p>
                        </a>
    
                        <div class="dropdown dropdown--export">
                          <ul>
                            <li class="dropdown__item">
                              <a href="#">
                                <i class='bx bxs-user-circle' ></i>
                                Excel
                              </a>
                            </li>
                            <li class="dropdown__item">
                              <a href="#">
                                <i class='bx bx-exit' ></i>
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
              <?php    
                
                $squery =  mysqli_query($conn,"select * from residents");
                while ($row = mysqli_fetch_array($squery)){
                
                ?>
                  <tr>
                  <td><?php echo $row['4ps_status']?></td>
                  <td><?php echo $row['disability_status']?></td>
                  <td><?php echo $row['voter_status']?></td>
                    <td><?php echo $row['senior_status']?></td>
                      <td>
                        <div class="table__row-img">
                          <img src="../../assets/img/user.jpg" alt="">
                        </div>
                      </td>
                      <td>
                        <div class="table__row-text">
                        <div class="table__row-name">
                        <?php echo $row['first_name']?>  <?php echo $row['mid_name']?>  <?php echo $row['last_name']?>
                        </div>
                        <div class="table__row-sub">
                        <?php echo $row['id']?>
                        </div>
                        </div>
                      </td>
                      <td>
                        <div class="table__action-buttons">
                        <a href="#" class="button button--primary button--sm action__cert" id="action-cert">
                        <i class='bx bxs-file-blank' ></i>
                        CERTIFICATE
                        </a>
    
                        <div class="dropdown dropdown--cert">
                          <ul>
                            <li class="dropdown__item">
                              <a href="../certificates/brgy-clearance.php" class="link-brgycert">
                                <i class='bx bxs-user-circle' ></i>
                                Barangay Clearance
                              </a>
                            </li>
                            <li class="dropdown__item">
                              <a href="../certificates/business-clearance.php" class="link-busclearance" >
                                <i class='bx bx-exit' ></i>
                                Business Clearance
                              </a>
                            </li>
                          </ul>
                        </div>
    
    
                        <a href="view-resident.php?id=<?php echo$row['id']?>" class="button button--dark button--sm action__view" data-target="#modal-viewprofile" id="action-view">
                          <i class='bx bxs-show' ></i>
                         <p>VIEW</p>
                        </a>
                      </div>
                      </td>
                  </tr>
                
              <?php 
              }
              ?>
              </tbody>
              </table>
    
    
                  </section>
    
              
            </div>

  </main>


  
</body>


</html>