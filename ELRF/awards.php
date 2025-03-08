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

        <div class="row">
          <div class="col-md-6">
            <img src="img/speakers/1.jpg" alt="Speaker 1" class="img-fluid"></img>
          
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
<div class="social">
  <button class="col-10 mx-4 mt-4 btn btn-primary">Register</button>
</div>
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