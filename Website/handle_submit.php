
<div>
    hallo :)
    <?php
    $servername = "localhost";
    $username = "VILLA-DB-BEROEPS";
    $password = "SuperSterkWachtwoord";
    $dbname = "89618_DB_BEROEPS";


    // Create connection
    $conn = new mysqli($servername,
        $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: "
            . $conn->connect_error);
    }

    try{
        $idVar = $_POST["id"];
        $voornaam = $_POST['fname'];
        $achternaam = $_POST['lname'];
        $tnummer = $_POST['tnum'];
        $mail = $_POST['mail'];
        $bod = $_POST['bod'];



        $sql = "INSERT INTO BIDDEN VALUES ($idVar, '$voornaam $achternaam', $bod, '$mail', '$tnummer')";

        if ($conn->query($sql) === TRUE) {
            echo "record inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } catch (Exception $e){
        echo "error";
    }

    header("Location: "."index.php");
    ?>
</div>
