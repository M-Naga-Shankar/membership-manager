
<?php
include('conn.php');


error_reporting(E_ALL); // Report all types of errors
ini_set('display_errors', 1);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data
    $name = $_POST['name'] ?? '';
    $req = $_POST['req'] ?? '';
    $reqs = $_POST['doc_req'] ?? '';  

    $query="insert into awards (name,req,doc_req) values ('$name','$req','$reqs')";
    echo $query;
    $sql=mysqli_query($conn,$query);
    if($sql){
        echo "done";
        header("Location: book.php?id=$id&status=1");
    }
    else{
        echo "error";
        header("Location: book.php?id=$id&status=2");
    }

}
?>
