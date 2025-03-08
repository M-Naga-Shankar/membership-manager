<?php
$conn = mysqli_connect("localhost", "root", "", "elrf");

// Insert a test user (username: admin, password: 123456)
$passwordHash = password_hash("123456", PASSWORD_DEFAULT);
mysqli_query($conn, "INSERT INTO users (username, password) VALUES ('admin', '$passwordHash')");
echo "Test user added!";
?>
