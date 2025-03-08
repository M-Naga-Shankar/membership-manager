<!--==========================
      Awards Section
    ============================-->
    <div id="Award"> 
      <section id="speakers" class="wow fadeInUp">
        <div class="container">
          <div class="section-header">
            <h2>Awards</h2>
          </div>
          <div class="section-header">
            <h2>Overview</h2>
            <p>The Eklavya Literary Award is the most prestigious and highest Indian literary award presented annually by Eklavya Literary Research Foundation (ELRF) to the Indian Authors, Academicians, and Scholars for their outstanding contribution towards English Language and Literature and made a meaningful difference in society through their dedication, hard work, and efforts.

The awards are designed to promote literary excellence on account of William Shakespeare's birth anniversary. The awards emphasize fairness and merit-based selection to ensure deserving individuals are honored.</p>
          </div>
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
              <div class="speaker">
                <img  style="height: 300px; width: 500px;" src="./img/ekl.png"  alt="Speaker 1" class="img-fluid">
                <div class="details">
                  <h3><a><?= $row['name'] ?> </a></h3>
                  <p><?= $row['name'] ?>                  </p>
                </div>
              </div>
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

