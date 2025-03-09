
<?php
include('conn.php');



// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data
    $name = $_POST['name'] ?? '';
    $mid = $_POST['mid'] ?? '';
    $type = $_POST['type'] ?? '';  
    $utr = $_POST['utr'] ?? '';  
    $tyno=$_POST['typeno'];
    $query="insert into `awardmem` ( `name`,`utr`, `mid`, `type`) values ('$name','$utr','$mid','$type')";
    try {
        $sql=mysqli_query($conn,$query);
        if($sql){
            echo "done";
            header("Location: ../../awards.php?id=$tyno&status=1");
        }
        else{
            echo "error";
            header("Location: ../../awards.php?id=$tyno&status=2");
        }
      }
      
      //catch exception
      catch(Exception $e) {
        echo "error";
        header("Location: ../../awards.php?id=$tyno&status=2");
      }


}
?>
