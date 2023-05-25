
<div>
    hallo :)
    <?php
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

    if(isset($_POST['submit'])) {
        $idVar = $_GET["id"];
        $voornaam = $_POST['fname'];
        $achternaam = $_POST['lname'];
        $tnummer = $_POST['tnum'];
        $mail = $_POST['mail'];
        $bod = $_POST['bod'];

        $sql = "INSERT INTO BIDDEN VALUES ($idVar, '$voornaam $achternaam', $bod, '$mail' '$tnummer')";
        $result = $conn->query($sql);

        header("Location: "."index.php");
    }
    ?>
</div>
