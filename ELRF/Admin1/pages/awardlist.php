<!--
=========================================================
* Material Dashboard 3 - v3.2.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php

include('./comp/head.php');

error_reporting(E_ALL); // Report all types of errors
ini_set('display_errors', 1); 

?>
<body class="g-sidenav-show  bg-gray-100">
  <?php
include('./comp/sidebar.php');
  ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php
include('./comp/nav.php');
  ?>
    <!-- End Navbar -->
    <div class="container-fluid py-2">
      <div class="row">
        <div class="ms-3">
          <h3 class="mb-0 h4 font-weight-bolder">Books</h3>
          <p class="mb-4">
            Check the Book.
          </p>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-2 ps-3">
              <div class="d-flex justify-content-between">
                <div>
                  <p class="text-sm mb-0 text-capitalize">Total Annual Members</p>
                  <h4 class="mb-0">$53k</h4>
                </div>
                <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                <i class="material-symbols-rounded opacity-10">person</i>
                </div>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-2 ps-3">
              <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+55% </span>than last week</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-2 ps-3">
              <div class="d-flex justify-content-between">
                <div>
                  <p class="text-sm mb-0 text-capitalize">Pending Annual Members</p>
                  <h4 class="mb-0">2300</h4>
                </div>
                <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                  <i class="material-symbols-rounded opacity-10">person</i>
                </div>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-2 ps-3">
              <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+3% </span>than last month</p>
            </div>
          </div>
        </div>
        <!-- <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-2 ps-3">
              <div class="d-flex justify-content-between">
                <div>
                  <p class="text-sm mb-0 text-capitalize">Books</p>
                  <h4 class="mb-0">3,462</h4>
                </div>
                <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                  <i class="material-symbols-rounded opacity-10">leaderboard</i>
                </div>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-2 ps-3">
              <p class="mb-0 text-sm"><span class="text-danger font-weight-bolder">-2% </span>than yesterday</p>
            </div>
          </div>
        </div> -->
        <div class="col-xl-4 col-sm-6">
          <div class="card">
            <div class="card-header p-2 ps-3">
              <div class="d-flex justify-content-between">
                <div>
                  <p class="text-sm mb-0 text-capitalize">Payment</p>
                  <h4 class="mb-0"> <i class="material-symbols-rounded opacity-10">currency_rupee</i>103,430</h4>
                </div>
                <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                  <i class="material-symbols-rounded opacity-10">currency_rupee</i>
                </div>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-2 ps-3">
              <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+5% </span>than yesterday</p>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-0 ">Website Views</h6>
              <p class="text-sm ">Last Campaign Performance</p>
              <div class="pe-2">
                <div class="chart">
                  <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-symbols-rounded text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> campaign sent 2 days ago </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card ">
            <div class="card-body">
              <h6 class="mb-0 "> Daily Sales </h6>
              <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales. </p>
              <div class="pe-2">
                <div class="chart">
                  <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-symbols-rounded text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> updated 4 min ago </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-4 mb-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-0 ">Completed Tasks</h6>
              <p class="text-sm ">Last Campaign Performance</p>
              <div class="pe-2">
                <div class="chart">
                  <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-symbols-rounded text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm">just updated</p>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <div class="row  mt-4 mb-4 m-2">
        <div class="col mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Enter Book Details</h6>
                </div>
                
              
              </div>
            </div>
            <div class="card-body px-5 pb-2 ">
              <div class="table-responsive">
            
              <form method="POST" action="inawardmem.php" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-6">
                <div class="input-group input-group-static mb-4">
                        <label >Name</label>
                        <input type="text" name="name" class="form-control  " required>
                    </div>
                </div>
                <div class="col-md-6">
                     <div class="input-group input-group-static mb-4">
                      <label >Membership ID</label>
                        <input type="text" name="mid" class="form-control  " value="" required>
                    </div>
                </div>
            </div>
      

            <div class="row">
                <div class="col-md-6">
                    <div class="input-group input-group-static mb-4">
                        <label for="exampleFormControlSelect1" class="ms-0">Award Type</label>

                        <select name="type" class="form-control" id="exampleFormControlSelect1" required>
                        <?php

include_once('conn.php');

$sql = "SELECT * FROM awards";
$result = mysqli_query($conn, $sql);
$i = 1;

if (mysqli_num_rows($result) > 0) {
  // Output data of each row
  while ($row = mysqli_fetch_assoc($result)) {
?>
                            <option value="<?= $row['name']; ?>"><?= $row['name']; ?></option>
                            

                            <?php

  }}
?>
                            
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <button type="submit" class="col-2 mt-4 px-2 btn btn-success">Insert</button>
            </div>
        </form>

              </div>
            </div>
          </div>
        </div>
</div>
        
    
        <div class="row  mt-4 mb-4 m-2">
        <div class="col mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Total Annual Member List</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">30 done</span> this month
                  </p>
                </div>
                
              
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                    <th class="text-center text-uppercase text-dark  text-xxl font-weight-bolder opacity-7">#</th>
                    
                      <th class="text-uppercase text-dark text-xxl font-weight-bolder opacity-7 ps-2">Name</th>
                      <th class="text-center text-uppercase text-dark text-xxl font-weight-bolder opacity-7">Member ID</th>
                      <th class="text-center text-uppercase text-dark text-xxl font-weight-bolder opacity-7">Type</th>
                      <th class="text-center text-uppercase text-dark text-xxl font-weight-bolder opacity-7">UTR No.</th>
                      <th class="text-center text-uppercase text-dark text-xxl font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-dark text-xxl font-weight-bolder opacity-7">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php

include_once('conn.php');

$sql = "SELECT * FROM awardmem";
$result = mysqli_query($conn, $sql);
$i = 1;

if (mysqli_num_rows($result) > 0) {
  // Output data of each row
  while ($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
        <td class="align-middle text-center">
            <?= $i; ?>
        </td>

        <td>
            <?= htmlspecialchars($row['name']); ?>
        </td>
        <td class="align-middle text-center text-sm">
            <span class="text-xs font-weight-bold"><?= htmlspecialchars($row['mid']); ?> </span>
        </td>
        <td class="align-middle text-center text-sm">
            <span class="text-xs font-weight-bold"><?= htmlspecialchars($row['type']); ?> </span>
        </td>
        <td class="align-middle text-center text-sm">
            <span class="text-xs font-weight-bold"><?= $row['utr']; ?> </span>
        </td>
        <td class="align-middle text-center">
                        <span class="font-weight-bold"> <?php 
                        
                        if ($row['status'] == 0) {
                        
                          echo "<a href='./status.php?id=" . $row['id'] . "&status=1&mem=3'>
                                  <button class='btn btn-info m-1'>Accept</button>
                              </a>";
                          echo "<a href='./status.php?id=" . $row['id'] . "&status=2&mem=3'>
                                  <button class='btn btn-danger m-1'>Reject</button>
                              </a>";
                          echo '</td>';
                      } elseif ($row['status'] == 1) {
                          echo '<button class="btn btn-success m-1">Accepted</button>';
                      } elseif ($row['status'] == 2) {
                          echo '<button class="btn btn-danger m-1">Rejected</button>';
                      }
                        
                        ?></span>
                      </td>
        <td class="align-middle text-center">
            <span class="font-weight-bold">
                <a href="editawardlist.php?id=<?= $row['id']; ?>">
                    <button class='btn btn-warning m-1'>
                        <i class='material-symbols-rounded opacity-10'>edit</i> Edit
                    </button>
                </a>
                <a href="delete.php?id=<?= $row['id']; ?>&type=5">
                    <button class='btn btn-danger m-1'>
                        <i class='material-symbols-rounded opacity-10'>delete</i> Detele
                    </button>
                </a>
            </span>
        </td>
    </tr>

<?php
    $i++;
  }
} else {
  echo "<tr><td colspan='6' class='px-5 text-dark h6'> No Record Found </td></tr>";
}

mysqli_close($conn);
?>

 
                   
                 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        
  <?php
include('./comp/footer.php');
  ?>