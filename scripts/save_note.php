<?php
    // Create connection
    $conn = new mysqli("localhost:3306", "root", "Admin", "notes");



    // Containerize the data
    $title = $_POST['note-title'];
    $body = $_POST['note-body'];

    // Insert the data
    $sql = "INSERT INTO note (`title`, `body`) VALUES ('$title', '$body');";




    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
<meta http-equiv="refresh" content="2;url=../index.php">
