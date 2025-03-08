<?php
include 'conn.php'; // Ensure you have a file to handle DB connection

error_reporting(E_ALL); // Report all types of errors
ini_set('display_errors', 1); // Display errors on the screen

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mem=$_POST['mem'];
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $designation = $_POST['designation'];
    $affiliation = $_POST['affiliation'];
    $hq = $_POST['hq'];
    $utr = $_POST['utr'];
    $status = $_POST['status'];
    if($mem==1){
    $sql = "UPDATE annualmembers SET name=?, email=?, mobile=?, designation=?, affiliation=?, hq=?, utr=?, status=? WHERE id=?";
    }
    if($mem==2){
        $sql = "UPDATE lifemembers SET name=?, email=?, mobile=?, designation=?, affiliation=?, hq=?, utr=?, status=? WHERE id=?";
    }
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssi", $name, $email, $mobile, $designation, $affiliation, $hq, $utr, $status, $id);
    
    if ($stmt->execute()) {
        echo "Record updated successfully";
        header("Location: editmember.php?id=$id&status=1&mem=$mem");
    } else {
        echo "Error updating record: " . $conn->error;
        header("Location: editmember.php?id=$id&status=2&mem=$mem");
    }
    
    $stmt->close();
    $conn->close();
}
?>
