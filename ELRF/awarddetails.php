<?php
  //header
include('./comp/header.php');
$status="";
  ?>


  <main id="main" class="main-page">

    <!--==========================
      Speaker Details Section
    ============================-->
<?php


            include('./Admin/conn.php'); // Ensure $conn is properly defined in this file
            $id=$_GET['id'];
            $sql = "SELECT * FROM `awardmem` where id=$id";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
?>

    <section id="speakers-details" class="wow fadeIn">
      <div class="container">
        <div class="section-header">
          <h2>Awardiee Details</h2>
          <p>From Eklayva Literacy Research Foundation.</p>
        </div>
        <?php
if($_GET['status']==1){
  ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  Application submitted <strong>Successfully.</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  <?php

}
?>
<?php
if($_GET['status']==2){
  ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error </strong>Something went Worng ! Try again
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  <?php

}
?>
        <div class="row p-2">
        <div class="details">
        <h2 class='m-3'><?= $row['name']; ?></h2>
        
        <style>
            .responsive-img {
    width: 1000px; /* Default size for large screens */
    height: 500px;
    max-width: 100%; /* Ensures it never overflows */
}

@media (max-width: 1200px) { /* For medium screens (laptops) */
    .responsive-img {
        width: 800px;
        height: 400px;
    }
}

@media (max-width: 992px) { /* For tablets */
    .responsive-img {
        width: 600px;
        height: 300px;
    }
}

@media (max-width: 768px) { /* For mobile devices */
    .responsive-img {
        width: 320px; /* Full width */
        height: 200px; /* Maintain aspect ratio */
        max-width: 400px; /* Set max size on mobile */
    }
}

            </style>
        <div class="col-md-12 d-flex justify-content-center">
    <img src="./Admin1/img/awardee/<?= $row['id'] ?>.png" 
         alt="Speaker 1" 
         class="responsive-img img-fluid">
</div>


</div>
                
          <div class="col-md-12 mt-4">
            <div class="details">
             
            <!-- <h4 class='h4 text-dark mt-4 text-bold'> Highlights </h4> -->
<?php
    $paragraphs = explode("\n", $row['details']);
    
    echo "<div style='font-family: Arial, sans-serif; line-height: 1.6;'>";
    foreach ($paragraphs as $para) {
        if (!empty(trim($para))) {
            echo "<p style='margin-bottom: 15px;'>" . htmlspecialchars($para) . "</p>";
        }
    }

              ?>

             
</div>
</div>
          
        </div>
      </div>


 <!-- Register Modal -->
 <div id="buy-ticket-modal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Award Nomination Form</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                      <center>      <p class="text-center" style="color:black; font-size:15px;">Please complete the payment first.</p> </center>
                      <form method="POST" action="Admin1/pages/inawardmem.php" enctype="multipart/form-data">
    <div class="form-group">
        <input type="number" class="form-control" name="utr" placeholder="Enter Transaction UTR Number" required>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Your Full Name" required>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="mid" placeholder="Your Member ID" required>
    </div>
    <input type="hidden" name="type" value="<?= $row['name']; ?>">
    <input type="hidden" name="typeno" value="<?= $row['id']; ?>">
    <div class="text-center">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</form>       
                        </div>
                    </div>
                </div>
            </div>


    </section>


    <?php
                }}
    ?>

  </main>


  <?php
include('./comp/footer.php')
  ?>