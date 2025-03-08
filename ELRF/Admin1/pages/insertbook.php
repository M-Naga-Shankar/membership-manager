
<?php
include('conn.php');


error_reporting(E_ALL); // Report all types of errors
ini_set('display_errors', 1);

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
        $uploadDir = "../img/book/"; // Directory to store uploaded files

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
            header("Location: book.php?id=$id&status=1");
        } else {

            echo "File upload failed.";
            header("Location: book.php?id=$id&status=2");
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
