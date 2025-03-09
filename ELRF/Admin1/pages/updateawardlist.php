<?php
include 'conn.php'; // Ensure you have a file to handle DB connection

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $ename = $_POST['mid'];
    $star = $_POST['type'];
echo $id;
    // Prepare SQL statement
    $sql = "UPDATE awardmem SET name=?, mid=?, type=? WHERE id=?";
    $stmt = $conn->prepare($sql);

    // Corrected bind_param() - 3 string values and 1 integer (i.e., "sssi")
    $stmt->bind_param("sssi", $name, $ename, $star, $id);

    if ($stmt->execute()) {
        echo "Record updated successfully";
       header("Location: editawardlist.php?id=$id&status=1");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
      header("Location: editawardlist.php?id=$id&status=2");
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>
