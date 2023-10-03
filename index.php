<?php
    // Create connection
    $conn = new mysqli("localhost:3306", "root", "Admin", "notes");

    // Count the amount of notes
    $sql = "SELECT * from notes";

    // Return the amount of records
    $recordcount = mysqli_num_rows($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Practice</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <button type="button" class=" nav-button" type="button" onclick="window.location.href='scripts/new.php'">New</button>
    </nav>
    <article>
    <!-- <div id="note1" class="note"></div> -->
    <div id="note1" class="note">
        <form action="/notes/scripts/save_note.php" method="post">
            <div class="row">
                <div class="col">
                    <input name="note-title" type="text" class="note-title form-control" placeholder="Title" aria-label="Title">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <textarea name="note-body" class="note-body form-control" placeholder="Note" aria-label="Note"></textarea>
                </div>
            </div>
            
            <input type="submit" name="Submit" id="Submit" value="Submit" class="submit">
        </form>
    </div>
    </article>

</body>
</html>
<!-- <script type="text/javascript" src="scripts/display_notes.js"></script> -->