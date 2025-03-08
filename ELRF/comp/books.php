<!--==========================
      Books Section
    ============================-->
    <section id="books" class="section-with-bg wow fadeInUp" style="background:white;">
      <br>
      <br>
      
    <div class="container">
        <div class="section-header">
            <h2>Book Publications</h2>
            <p>Here are some of our books</p>
        </div>

        <div class="row">
            <?php
            include('./Admin/conn.php'); // Ensure $conn is properly defined in this file

            $sql = "SELECT * FROM `books`";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // Set image path dynamically
                    $imagePath = !empty($row['photo']) ? "./Admin/img/book/" . $row['photo'] : "img/default-book.png";
            ?>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="hotel shadow p-3 my-2 bg-body-tertiary rounded">
                            <div class="hotel-img">
                                <img style="height:300px;" src="<?php echo $imagePath; ?>" alt="<?php echo htmlspecialchars($row['name']); ?>" class="img-fluid">
                            </div>
                            <h5 style='font-weight:500;' class='my-2'><a href="#"><?php echo htmlspecialchars($row['name']); ?></a></h5>
                            <div class="stars">

                            <style>
                                .star{
color:gold;
                                }
                            </style>
                                <?php 
                                // Generate star rating dynamically
                                $rating = intval($row['star']);
                                for ($i = 0; $i < 5; $i++) {
                                    echo $i < $rating ? '<i class="star fa fa-star"></i>' : '<i class="fa fa-star-o"></i>';
                                }
                                ?>
                            </div>
                            <p>Editor : <?php echo htmlspecialchars($row['editor']); ?></p>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "<p>No books available.</p>";
            }
            ?>
        </div>
    </div>
    <br>
    <br>
</section>
