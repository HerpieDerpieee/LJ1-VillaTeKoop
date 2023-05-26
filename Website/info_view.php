<div id="main">
    <div class="slider">

    </div>
    <div id="mainContent">
        <div id="quote">
            <h1><?= $data["quote"] ?></h1>
        </div>
        <div id="indeling">
            <h2>Indeling</h2><br>
            <span><?= $data["indeling"] ?></span><br>
        </div>
        <div id="boden">
            <h2>Hoogste Biedingen</h2>
            <ol>
                <?php
                    foreach($bidding as $name => $value){
                        echo "<li>" . $name . " - $" . $value . "</li>";
                    }
                ?>
            </ol>
        </div>
        <div id="maps">
            <h2>Locatie</h2>
            <div class="temp">
                <iframe src="<?= $data["location"] ?>" width="80%" height="85%"></iframe>
            </div>
        </div>
        <div id="form">
            <h2>Doe een bod</h2>
            <form>

                <label for="fname">Voornaam:</label><br>
                <input type="text" id="fname" name="fname" ><br>
                <label for="lname">Achternaam:</label><br>
                <input type="text" id="lname" name="lname" ><br>
                <label for="tnum">Telefoonnummer:</label><br>
                <input type="tel" id="tnum" name="tnum" placeholder="06 xxxxxxxx" pattern="[06]{1}[0-9]{8}" value="06"><br>
                <label for="mail">E-mail:</label><br>
                <input type="text" id="mail" name="mail" ><br>
                <label for="bod">Bod:</label><br>
                <input type="number" id="bod" name="bod" value="1000000" min="1000000"><br>
                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

                <input type="button" onclick="formcheck()" name="submit" value="Bied">
            </form>
        </div>
    </div>
</div>
