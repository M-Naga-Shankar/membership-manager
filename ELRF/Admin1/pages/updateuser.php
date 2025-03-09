
<?php
include 'conn.php'; // Ensure you have a file to handle DB connection

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id=1;
    $name = $_POST['username'];
    $password = $_POST['password'];
$passwordHash = password_hash($password, PASSWORD_DEFAULT);
    // Prepare SQL statement
    $sql = "UPDATE users SET username=?, password=? WHERE id=?";
    $stmt = $conn->prepare($sql);

    // Corrected bind_param() - 3 string values and 1 integer (i.e., "sssi")
    $stmt->bind_param("ssi", $name, $passwordHash, $id);

    if ($stmt->execute()) {
        echo "Record updated successfully";
        header("Location: profile.php?id=$id&status=1");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
        header("Location: profile.php?id=$id&status=2");
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>
