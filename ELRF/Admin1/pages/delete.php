
<?php
include('conn.php');


error_reporting(E_ALL); // Report all types of errors
ini_set('display_errors', 1);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    // Get form data
    $id=$_GET['id'];
    $type=$_GET['type'];
    if($type==1){
    $query="DELETE FROM `annualmembers` WHERE id='$id'";
    }

    if($type==2){
        $query="DELETE FROM `lifemembers` WHERE id='$id'";
    }
    if($type==3){
        $query="DELETE FROM `books` WHERE id='$id'";
    }
    if($type==4){
        $query="DELETE FROM `awards` WHERE id='$id'";
    }
    echo $query;
    $sql=mysqli_query($conn,$query);
    if($sql){
        echo "done";
        if($type==1)
        header("Location: anumem.php?id=$id&status=1");
        if($type==2)
        header("Location: lifemem.php?id=$id&status=1");
        if($type==3)
        header("Location: book.php?id=$id&status=1");
        if($type==4)
        header("Location: awards.php?id=$id&status=2");
    }
    else{
        echo "error";
        header("Location: anumem.php?id=$id&status=2");
    }

}
?>
