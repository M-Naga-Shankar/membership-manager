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
          <h3 class="mb-0 h4 font-weight-bolder">Awarded Members</h3>
          <p class="mb-4">
            Check the Book.
          </p>
        </div>
    <?php
    include_once('conn.php');

    $id=$_GET['id'];

$sql1 = "SELECT * FROM awardmem where id=$id";
$result1 = mysqli_query($conn, $sql1);
$j = 1;

if (mysqli_num_rows($result1) > 0) {
  // Output data of each row
  while ($rows = mysqli_fetch_assoc($result1)) {
?>


      <div class="row  mt-4 mb-4 m-2">
        <div class="col mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Enter Member Details</h6>
                </div>
                
              
              </div>
            </div>
            <div class="card-body px-5 pb-2 ">
              <div class="table-responsive">
            
              <form method="POST" action="updateawardlist.php" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-6">

                <input type="hidden" name="id" value="<?= $id; ?>">
                <div class="input-group input-group-static mb-4">
                        <label >Name</label>
                        <input type="text" name="name" class="form-control  " value="<?= $rows['name']; ?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                     <div class="input-group input-group-static mb-4">
                      <label >Membership ID</label>
                        <input type="text" name="mid" class="form-control  " value="<?= $rows['mid']; ?>" required>
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
                <button type="submit" class="col-2 mt-4 px-2 btn btn-success">Update</button>
            </div>
        </form>
<?php

  }}
?>
              </div>
            </div>
          </div>
        </div>
</div>
        
    
       
          
  <?php
include('./comp/footer.php');
  ?>