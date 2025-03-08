<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<?php
include('conn.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data
    $name = $_POST['name'] ?? '';
    $editor = $_POST['ename'] ?? '';
    $star = $_POST['star'] ?? '';  // Corrected variable name

    // Get the last ID count to create unique filename
    $query1 = "SELECT COUNT(id) AS total FROM `books`"; 
    $result = mysqli_query($conn, $query1);
    $row = mysqli_fetch_assoc($result);
    $last = $row['total'] + 1; // Count rows and add 1

    // Default photo name
    $photo = $last . ".png";

    // ✅ Fix: Correct SQL Syntax
    $query = "INSERT INTO books (name, editor, star, photo) 
              VALUES ('$name', '$editor', '$star', '$photo')";

    if (!mysqli_query($conn, $query)) {
        echo "Database insert error: " . mysqli_error($conn);
        exit;
    }

    // ✅ Fix: Handle File Upload Correctly
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $uploadDir = "img/book/"; // Directory to store uploaded files

        // Ensure the upload directory exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Get the original file extension
        $fileExt = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

        // Generate a unique filename
        $newFileName = $last . ".png"; // Preserve extension

        // Full path for the new file
        $uploadFile = $uploadDir . $newFileName;

        if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadFile)) {
            echo "File uploaded successfully as: " . htmlspecialchars($newFileName);
        } else {
            echo "File upload failed.";
        }
    } else {
        // Fetch and display books
        $conn = mysqli_connect("localhost", "root", "", "elrf");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "No file uploaded or upload error: " . ($_FILES["file"]["error"] ?? "Unknown error");
    }
} 

?>

<?php
include('./comp/head.php');
include('./comp/nav.php');
?>

<div class="p-5 mx-5">
    <div class="container-fluid shadow p-3 mb-5 bg-body-tertiary rounded">
        <h3>Enter Book Details</h3>
        <br>  
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Enter Book Name</label>
                <input type="text" class="form-control" name="name" placeholder="Book Name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Enter Editor Name</label>
                <input type="text" class="form-control" name="ename" placeholder="Editor Name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Give Rating</label>
                <select name="star" class="form-select" required>
                    <option value="1">1 Star</option>
                    <option value="2">2 Star</option>
                    <option value="3">3 Star</option>
                    <option value="4">4 Star</option>
                    <option value="5">5 Star</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Upload Book Cover Page</label>
                <input class="form-control" type="file" name="file" accept="image/*">
            </div>
            <button type="submit" class="btn btn-outline-success">Submit</button>
        </form>
    </div>
</div>

<div class="container">
    <div class="section-header">
        <h2>Books List</h2>
        <p>Here are some books</p>
    </div>

    <!-- Search Input -->
    <input type="text" id="searchInput" class="form-control mb-3" onkeyup="searchTable()" placeholder="Search for books...">

    <!-- Table -->
    <table class="table table-striped table-bordered" id="membersTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Editor</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
            <?php

            include('conn.php');

            $sql = "SELECT * FROM `books`";
            $result = mysqli_query($conn, $sql);
            $i = 0;

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $i++;
                    echo "<tr>";
                    echo "<td>".$i."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['editor']."</td>";
                    echo "<td>".$row['star']."</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No Results Found</td></tr>";
            }

            mysqli_close($conn);
            ?>
        </tbody>
    </table>
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
<br>
<br>

<?php include('./comp/footer.php'); ?>
