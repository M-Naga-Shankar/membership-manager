<?php
include('conn.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $mobile = $_POST['mobile'] ?? '';
    $designation = $_POST['designation'] ?? '';
    $hq = $_POST['hq'] ?? '';
    $aff = $_POST['affiliation'] ?? '';
    $utr = $_POST['utr'] ?? '';

    // Get the last ID count to create unique MID
    $query1 = "SELECT COUNT(id) AS total FROM `annualmembers`"; 
    $result = mysqli_query($conn, $query1);
    $row = mysqli_fetch_assoc($result);
    $last = $row['total'] + 1; // Count rows and add 1
    
    $year = date("Y");
    $mid = "AM/$last/$year";

    // Default photo name (Will be updated later)
    $photo = $last.".png";

    // Insert data first (without photo) to get auto-incremented ID
    $query = "INSERT INTO annualmembers (name, mid, email, mobile, designation, affiliation, hq, photo, utr) 
              VALUES ('$name', '$mid', '$email', '$mobile', '$designation', '$aff', '$hq', '$photo', '$utr')";
    
    if (!mysqli_query($conn, $query)) {
        echo "Database insert error: " . mysqli_error($conn);
        exit;
    }

    // File upload handling
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $uploadDir = "img/lifephoto/"; // Directory to store uploaded files

        // Ensure the upload directory exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Get the original file extension
        $fileExt = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

        // Generate a unique filename
        $newFileName = $photo;

        // Full path for the new file
        $uploadFile = $uploadDir . $newFileName;

        if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadFile)) {
            echo "File uploaded successfully as: " . htmlspecialchars($newFileName);
            header("Location: ../annualmem.php?status=1");
        } else {
            echo "File upload failed.";
            header("Location: ../annualmem.php?status=2");
        }
    } else {
        echo "No file uploaded or upload error: " . ($_FILES["file"]["error"] ?? "Unknown error");
        header("Location: ../annualmem.php?status=2");
    }
} else {
    header("Location: ../annualmem.php?status=2");
    echo "Invalid request.";
}

mysqli_close($conn);
?>
