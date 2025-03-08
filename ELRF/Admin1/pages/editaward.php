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
    <div class="container-fluid py-4">
      <div class="row">
        <div class="ms-3">
          <h3 class="mb-0 h4 font-weight-bolder">Edit Award Details</h3>
          <p class="mb-4">
            Check the Book.
          </p>
        </div>
       
      <div class="row  mt-4 mb-4">
        <div class="col mb-md-0 mb-4">
            <?php
if($_GET['status']==1){

    ?>
      
  
      <div class="alert alert-success alert-dismissible text-white fade show mx-4" role="alert">
        <span class="alert-icon align-middle">
          <span class="material-symbols-rounded text-md">
          thumb_up_off_alt
          </span>
        </span>
        <span class="alert-text"><strong>Successfully! </strong>Updated</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php 

}
if($_GET['status']==2){

    ?>
      <div class="alert alert-danger alert-dismissible text-white fade show mx-4" role="alert">
        <span class="alert-icon align-middle">
          <span class="material-symbols-rounded text-md">
          thumb_down_off_alt
          </span>
        </span>
        <span class="alert-text"><strong>Error! </strong>Something went worng</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
}
?>
          <div class="card">
         
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
               
<div class='p-5'>

<?php

include_once('conn.php');

$id=$_GET['id'];
$sql = "SELECT * FROM awards where id=$id";

$result = mysqli_query($conn, $sql);
$i=1;
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
?>


<form method="POST" action="updateaward.php">

<input type="hidden" value="<?= $mem ?>" name="mem" >
            <input type="hidden" name="id" value="<?= $id; ?>"> <!-- Change this dynamically -->
            <div class="row">
                <div class="col-md-6">
                <div class="input-group input-group-static mb-4">
                        <label >Name</label>
                        <input type="text" name="name" class="form-control  " value="<?= $row['name'] ?>" required>
                    </div>
                </div>
                <div class="col-md-12">
                     <div class="input-group input-group-static mb-4">
                      <label >Requirements</label>
                      <textarea row='3' name="req" class="form-control"  ><?= $row['req']; ?> 

  </textarea>
                    </div>
                    <div class="col-md-12">
                     <div class="input-group input-group-static mb-4">
                      <label >Documents Required</label>
                      <textarea name="doc_req" class="form-control  " ><?= $row['doc_req'] ?>

  </textarea>
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
</div>


       
        
  <?php
include('./comp/footer.php');
  ?>