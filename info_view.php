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
</div>