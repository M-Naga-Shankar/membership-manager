<?php
if(!empty($_POST)){
$servername = "localhost"; 
$username = "root";   // Change if using a different user
$password = "";       // Set password if needed
$dbname = "elrf";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data

$name = $_POST['name'];
$village = $_POST['village'];

// Prepare and execute the SQL statement
$sql = "INSERT INTO lifemembers (name, mid) VALUES ('$name', '$village')";
$sql = "INSERT INTO annualmembers (name, mid) VALUES ('$name', '$village')";

if ($conn->query($sql) === TRUE) {
    echo "New member added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Close connection
$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life Membership Form</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; text-align: center; }
        form { max-width: 400px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; }
        input, button { width: 100%; padding: 10px; margin: 10px; }
    </style>
</head>
<body>

    <h2>Life Membership Form</h2>

    <form action=" " method="POST">
        <input type="text" name="name" placeholder="Enter Member name" required>
        <input type="text" name="village" placeholder="Enter Member ID" required>
        <button type="submit">Submit</button>
    </form>

</body>
</html>
