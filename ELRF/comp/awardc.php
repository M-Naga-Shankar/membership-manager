<!--==========================
      Awards Section
    ============================-->
    <div id="Award"> 
      <section id="speakers" class="wow fadeInUp">
        <div class="container">
         
          <div class="section-header">
            <h2>Award Categories</h2>
            <p>Here are some of our Award</p>
          </div>
          <div class="row">
          <?php

            include('./Admin/conn.php'); // Ensure $conn is properly defined in this file

            $sql = "SELECT * FROM `awards`";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // Set image path dynamically
                    //$imagePath = !empty($row['photo']) ? "./Admin/img/book/" . $row['photo'] : "img/default-book.png";
            ?>
            <div class="col-lg-4 col-md-6">
            <a href="awards.php?id=<?= $row['id']?>">     <div class="speaker">
              <img src="img/awards/<?= $row['id'] ?>.png" alt="Speaker 1" class="img-fluid"></img>
                <div class="details" style="background-color:#f82249;">
                  <h3><?= $row['name'] ?> </h3>
                  <p><?= $row['name'] ?>                  </p>
                </div>
              </div></a>
            </div>
          
<?php
                }
              }
?>

            </div>
          </div>
        </div>
  
      </section>
  
  </div>

