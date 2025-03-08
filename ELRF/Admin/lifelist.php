<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<?php
include('./comp/head.php');
include('./comp/nav.php');
?>

<div class='container-fluid p-5'>

    <!--==========================
        Membership Section
    ============================-->
    <section id="speakers p-5" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Life Membership List</h2>
                <p>Here are our Life Members</p>
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
                td {
                    word-wrap: break-word;
                    white-space: normal;
                    max-width: 200px;
                    overflow-wrap: break-word;
                }
                .pagination {
                    display: flex;
                    justify-content: center;
                    margin-top: 20px;
                }
                .pagination a {
                    padding: 10px 15px;
                    margin: 5px;
                    border: 1px solid #007bff;
                    color: #007bff;
                    text-decoration: none;
                    border-radius: 5px;
                }
                .pagination a.active {
                    background-color: #007bff;
                    color: white;
                }
                .pagination a:hover {
                    background-color: #0056b3;
                    color: white;
                }
            </style>

            <!-- Search Input -->
            <input type="text" id="searchInput" style="border:1px solid black;" class="form-control mb-3" onkeyup="searchTable()" placeholder="Search for members...">

            <!-- Table -->
            <table class="table table-striped table-bordered" id="membersTable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Affiliation</th>
                        <th scope="col">Qualification</th>
                        <th scope="col">UTR No.</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
         include('conn.php');
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    // Pagination settings
                    $limit = 25; // Records per page
                    $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
                    $offset = ($page - 1) * $limit;

                    // Count total records
                    $countQuery = "SELECT COUNT(*) AS total FROM `lifemembers`";
                    $countResult = mysqli_query($conn, $countQuery);
                    $totalRows = mysqli_fetch_assoc($countResult)['total'];
                    $totalPages = ceil($totalRows / $limit);

                    // Fetch records with pagination
                    $sql = "SELECT * FROM `lifemembers` LIMIT $limit OFFSET $offset";
                    $result = mysqli_query($conn, $sql);
                    $i = $offset;

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $i++;
                            echo "<tr>";
                            echo "<td>".$i."</td>";
                            echo "<td>".$row['date']."</td>";
                            echo "<td>".$row['mid']."</td>";
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['email']."</td>";
                            echo "<td>".$row['mobile']."</td>";
                            echo "<td>".$row['designation']."</td>";
                            echo "<td>".$row['affiliation']."</td>";
                            echo "<td>".$row['hq']."</td>";
                            echo "<td>".$row['utr']."</td>";

                            if ($row['status'] == 0) {
                                echo '<td>';
                                echo "<a href='status.php?id=" . $row['id'] . "&status=1&mem=1'>
                                        <button class='btn btn-primary m-1'>Accept</button>
                                    </a>";
                                echo "<a href='status.php?id=" . $row['id'] . "&status=2&mem=1'>
                                        <button class='btn btn-danger m-1'>Reject</button>
                                    </a>";
                                echo '</td>';
                            } elseif ($row['status'] == 1) {
                                echo '<td><button class="btn btn-success m-1">Accepted</button></td>';
                            } elseif ($row['status'] == 2) {
                                echo '<td><button class="btn btn-danger m-1">Rejected</button></td>';
                            }
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='11'>No Results Found</td></tr>";
                    }

                    mysqli_close($conn);
                    ?>
                </tbody>
            </table>

            <!-- Pagination Links -->
            <div class="pagination">
                <?php if ($page > 1) { ?>
                    <a href="?page=1">First</a>
                    <a href="?page=<?php echo $page - 1; ?>">&laquo; Prev</a>
                <?php } ?>

                <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                    <a href="?page=<?php echo $i; ?>" class="<?php echo ($i == $page) ? 'active' : ''; ?>">
                        <?php echo $i; ?>
                    </a>
                <?php } ?>

                <?php if ($page < $totalPages) { ?>
                    <a href="?page=<?php echo $page + 1; ?>">Next &raquo;</a>
                    <a href="?page=<?php echo $totalPages; ?>">Last</a>
                <?php } ?>
            </div>
        </div>
    </section>
</div>

<?php
include('./comp/footer.php');
?>
