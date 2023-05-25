<div id="main">
    <?php
        foreach($bidding as $name => $value){
            echo $name . " - " . $value . "<br>";
        }
    ?>
    <br>
    <br>
    <?php
        echo $data["quote"].'<br>';
        echo $data["indeling"].'<br>';
        echo $data["imgSrc"].'<br>';
        echo $data["location"].'<br>';
        echo $data["adres"].'<br>';
        echo $data["postcode"].'<br>';
        echo $data["plaats"].'<br>';
    ?>

    <div id="form">
        <form method="post" action="handle_submit.php">

            <label for="fname">Voornaam:</label><br>
            <input type="text" id="fname" name="fname" required><br>
            <label for="lname">Achternaam:</label><br>
            <input type="text" id="lname" name="lname" required><br>
            <label for="tnum">Telefoonnummer:</label><br>
            <input type="tel" id="tnum" name="tnum" placeholder="+31 6 xxxxxxxx" pattern="+31[6]{1}[0-9]{8}" required><br>
            <label for="mail">E-mail:</label><br>
            <input type="text" id="mail" name="mail" required><br>
            <label for="bod">Bod:</label><br>
            <input type="number" id="bod" name="bod" value="1000000" min="1000000"required><br>
            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

            <input type="submit" name="submit" value="Bied">
        </form> 

    </div>
</div>
