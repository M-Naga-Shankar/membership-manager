<?php
include 'conn.php'; // Ensure you have a file to handle DB connection

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $ename = $_POST['ename'];
    $star = $_POST['star'];

    // Prepare SQL statement
    $sql = "UPDATE books SET name=?, editor=?, star=? WHERE id=?";
    $stmt = $conn->prepare($sql);

    // Corrected bind_param() - 3 string values and 1 integer (i.e., "sssi")
    $stmt->bind_param("sssi", $name, $ename, $star, $id);

    if ($stmt->execute()) {
        echo "Record updated successfully";
        header("Location: editbook.php?id=$id&status=1");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
        header("Location: editbook.php?id=$id&status=2");
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>
