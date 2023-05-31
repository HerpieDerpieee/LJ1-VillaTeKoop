<div id="main">
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="./img/<?= $data['imgSrc'] ?>2.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="./img/<?= $data['imgSrc'] ?>3.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="./img/<?= $data['imgSrc'] ?>4.jpg" style="width:100%">
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
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
                <iframe src="<?= $data["location"] ?>" width="80%" height="85%" frameBorder="0"></iframe>
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

                <input type="button" id="submit" name="submit" value="Bied">
            </form>
        </div>
    </div>
</div>
