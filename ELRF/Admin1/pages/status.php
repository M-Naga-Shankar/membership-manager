<?php
// session_start();
// if (!isset($_SESSION['username'])) {
//     header("Location: login.php");
//     exit;
// }
?>
<?php
include('./conn.php');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get ID and status from GET request
if (isset($_GET['id']) && isset($_GET['status'])) {
    $id = intval($_GET['id']); // Ensure ID is an integer
    $status = intval($_GET['status']); // Ensure status is an integer (1 or 0)
    $mem = intval($_GET['mem']);

    // Update query
if($mem==1){
    $sql = "UPDATE `lifemembers` SET `status`=$status WHERE `id`=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $conn->error;

    }
    header("Location:./lifemem.php");
}
if($mem==2){
    $sql = "UPDATE `annualmembers` SET `status`=$status WHERE `id`=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    header("Location:./anumem.php");
}
if($mem==3){
    $sql = "UPDATE `awardmem` SET `status`=$status WHERE `id`=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    header("Location:./awardlist.php");
}




} else {
    echo "ID or Status not provided.";
}

exit;
// Close the connection
$conn->close();
?>
