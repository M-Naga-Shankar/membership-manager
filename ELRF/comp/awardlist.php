 <!--==========================
      Membership Section
    ============================-->
    <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Awarded Members List</h2>
          <p>Here are of our Life Members</p>
        </div>
        <script>
        function searchTable() {
            let input = document.getElementById("searchInput").value.toLowerCase();
            let table = document.getElementById("membersTable");
            let rows = table.getElementsByTagName("tr");

            for (let i = 1; i < rows.length; i++) {
                let cols = rows[i].getElementsByTagName("td");
                let found = false;
                
                for (let j = 0; j < cols.length; j++) {
                    if (cols[j].innerText.toLowerCase().includes(input)) {
                        found = true;
                        break;
                    }
                }
                
                rows[i].style.display = found ? "" : "none";
            }
        }
    </script>

    <style>
      table,tr,td{
        style="border:1px solid black;"
      }
      </style>
      <?php 

      include('./comp/yearaward.php');

      ?>
          <!-- Search Input -->
    <input type="text" id="searchInput" style="border:1px solid black;" class="form-control mb-3" onkeyup="searchTable()" placeholder="Search for members...">

    <!-- Table -->
    <table class="table table-striped table-bordered" id="membersTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Year</th>
      <th scope="col">Name</th>
      <th scope="col">Member ID</th>
      <th scope="col">Type</th>
    </tr>
  </thead>
  <tbody>
  <?php
include('./Admin/conn.php');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `awardmem` where status=1";
//$sql = "SELECT * FROM `annualmembers`";
$result = mysqli_query($conn, $sql);
$i=0;

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $i++;
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".substr($row['date'],0,4)."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['mid']."</td>";
    echo "<td>".$row['type']."</td>";
    echo "</tr>";
    
  }
} else {
  echo "<tr><td colspan='3'>No Results Found</td></tr>";
}

mysqli_close($conn);
?> 


  </tbody>
</table>
      </div>

    </section>