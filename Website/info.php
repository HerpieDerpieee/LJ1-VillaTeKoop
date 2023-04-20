<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="info.css">
    <title>Villas4U</title>
</head>
<body>
<div id="root">
    <?php
    include "Standard/header.php";

    $servername = "localhost";
    $username = "VILLA-DB-BEROEPS";
    $password = "SuperSterkWachtwoord";
    $dbname = "89618_DB_BEROEPS";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, naam FROM VILLA WHERE id=" . $_GET["id"];
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            //echo "id: " . $row["id"]. " - Name: " . $row["naam"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();

    include "info_view.php";

    include "Standard/footer.php";
    ?>
</div>
</body>
</html>
