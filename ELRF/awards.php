<?php
  //header
include('./comp/header.php');
  ?>


  <main id="main" class="main-page">

    <!--==========================
      Speaker Details Section
    ============================-->
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

            include('./Admin/conn.php'); // Ensure $conn is properly defined in this file
            $id=$_GET['id'];
            $sql = "SELECT * FROM `awards` where id=$id";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
?>

    <section id="speakers-details" class="wow fadeIn">
      <div class="container">
        <div class="section-header">
          <h2>Award Details</h2>
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
        <div class="row">
          <div class="col-md-6">
            <img src="img/awards/<?= $row['id'] ?>.png" alt="Speaker 1" class="img-fluid"></img>
          
          </div>

                
          <div class="col-md-6">
            <div class="details">
              <h2 class='mt-2'><?= $row['name']; ?></h2>
            <h4 class='h4 text-dark mt-4 text-bold'>Requirements:</h4>
              <p><?= $row['req']; ?></p>

              <h4 class='h4 text-dark mt-4 text-bold'>Documents Required:</h4>
              <p><?= $row['doc_req']; ?></p>

              <h4 class='h4 text-dark mt-4 text-bold'>Processing of awards:</h4>
              <p>1.Nomination through website<br>
2.Screening of nominations<br>
3.Selection of winners<br>
4.Intimation to the winners<br>
5.Presentation of Awards</p>
 
<h4 class='h4 text-dark mt-4 text-bold'>Awards Cover:</h4>
<p>    1.Brass Memento with the Awardee’s Name and award details<br>
2.Certificate with the selected Award Title (Soft Copy/ Hard Copy)<br>
3.Publication of Awardees details along with photo on the ELRF Website</p>

<h4 class='h4 text-dark mt-4 text-bold'>Benefits of the Award :</h4>
<p>
Recipients of the award are entitled to several benefits:<br>

1.Boost to social prestige and professional profile<br>
2.Increased visibility on search engines, global recognition, and personal brand development<br>
3.Luxury memento and framed certificate<br>
4.Social media and news article promotion<br>
5.Enhanced resume credentials<br>
6.Shipping of the award directly to the recipient’s doorstep in premium packaging

</p>


<div class="social">
<button type="button" style="background-color:#f82249; color:white;" class="btn mt-4" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="pro-access">Register Now</button>
        
</div>
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