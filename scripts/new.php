<?php
    // Create connection
    $conn = new mysqli("localhost:3306", "root", "Admin", "notes");



    // sql to create table
    $sql = "CREATE TABLE note (
        id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(24),
        body VARCHAR(64)
        )";

    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
<meta http-equiv="refresh" content="2;url=../index.php">