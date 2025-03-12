<?php
include('conn.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Enable MySQLi Exception Mode
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Get form data
        $name = $_POST['name'] ?? '';
        $mid = $_POST['mid'] ?? '';
        $type = $_POST['type'] ?? '';  
        $details = $_POST['detail'] ?? '';

        // Insert into database using Prepared Statement to prevent SQL injection
        $query = "INSERT INTO `awardmem` (`name`, `mid`, `type`, `details`) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("siss", $name, $mid, $type, $details);
        $stmt->execute();
        
        // ✅ Get the last inserted ID
        $last = $conn->insert_id;

        // ✅ Handle File Upload
        if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
            $uploadDir = "../img/awardee/"; // Target directory

            // Ensure the directory exists
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            // Get file extension
            $fileExt = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
            $newFileName = $last . ".png"; // Save as last ID.png

            // Full path for the new file
            $uploadFile = $uploadDir . $newFileName;

            if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadFile)) {
                echo "File uploaded successfully as: " . htmlspecialchars($newFileName);
                header("Location: awardlist.php?id=$id&status=1");
            } else {
                throw new Exception("File upload failed.");
                header("Location: awardlist.php?id=$id&status=2");
            }
        } else {
            throw new Exception("No file uploaded or upload error: " . ($_FILES["file"]["error"] ?? "Unknown error"));
        }

        echo "Data inserted successfully.";
    }
} catch (mysqli_sql_exception $e) {
    echo "Database Error: " . $e->getMessage();
    header("Location: awardlist.php?id=$id&status=2");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
    header("Location: awardlist.php?id=$id&status=2");
}
?>
