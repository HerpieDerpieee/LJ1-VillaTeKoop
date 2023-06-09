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
            <form onsubmit="event.preventDefault(); formCheck()" id="formu">

                <label for="fname">Voornaam:</label>
                <input type="text" id="fname" name="fname" >
                <label for="lname">Achternaam:</label>
                <input type="text" id="lname" name="lname" >
                <label for="tnum">Telefoonnummer:</label>
                <input type="tel" id="tnum" name="tnum" placeholder="06 xxxxxxxx" value="06">
                <label for="mail">E-mail:</label>
                <input type="text" id="mail" name="mail" >
                <label for="bod">Bod:</label>
                <input type="number" id="bod" name="bod" value="1000000" min="1000000">
                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

                <input type="submit" id="verzend" value="Bied" class="mouseOverBigger">
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>  <!-- sweetalert import-->
<script>
    function formCheck() {
        let namecheck = /^[A-Za-z]*$/;
        let fnametrue = false;
        let lnametrue = false;
        let tnumtrue = false;
        let bodtrue = false;
        let fname = document.getElementById("fname").value;
        let lname = document.getElementById("lname").value;
        let tnum = document.getElementById("tnum").value;
        let bod = document.getElementById("bod").value;
        let email = document.getElementById("mail").value;

        if (namecheck.test(fname)) {
            fnametrue = true;
        } else {
            alert("First name does not follow critera")
        }
        if (namecheck.test(lname)) {
            lnametrue = true;
        } else {
            alert("Last name does not follow critera")
        }
        tnum = tnum.replace(/\s/g, '');
        if (!isNaN(tnum) && tnum.length == 10) {
            tnumtrue = true;
        } else {
            alert("Phone number does not follow critera")
        }
        if (!isNaN(bod) && bod > 999999 && bod > parseInt(<?php foreach($bidding as $name => $value){ echo $value; break; }  ?>)) {
            bodtrue = true;
        } else {
            alert("Money spent does not follow critera")
        }

        if (fnametrue && lnametrue && tnumtrue && bodtrue) {
            // Send an AJAX request to the PHP script
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "verify.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    let response = xhr.responseText;
                    if (response.startsWith("success:")) {
                        let verificationCode = response.split(":")[1];
                        // Prompt for verification code
                        Swal.fire({
                            title: 'Submit your verification code',
                            input: 'text',
                            showCancelButton: false,
                            showLoaderOnConfirm: true,
                            preConfirm: (code) => {
                                if (code && code.trim() === verificationCode) {
                                    // Code is correct, proceed to insert data into the database

                                    Swal.fire(
                                        'Succes!',
                                        'Je bod is geplaatst',
                                        'success'
                                    ).then((result) => {
                                        /* Read more about isConfirmed, isDenied below */
                                        if (result.isConfirmed) {
                                            location.reload()
                                        }
                                    });

                                    let id = "<?php echo $_GET['id']; ?>";

                                    let data = "id=" + encodeURIComponent(id) + "&fname=" + encodeURIComponent(fname) + "&lname=" + encodeURIComponent(lname) + "&bod=" + encodeURIComponent(bod) + "&email=" + encodeURIComponent(email) + "&tnum=" + encodeURIComponent(tnum);

                                    fetch("insert.php", {
                                        method: "POST",
                                        headers: {
                                            "Content-Type": "application/x-www-form-urlencoded"
                                        },
                                        body: data
                                    })
                                    .then(response => response.text())
                                    .then(insertResponse => {
                                        //do stuff i guess
                                    })
                                    .catch(error => {
                                        // Handle any error in the AJAX request
                                        console.error("Error:", error);
                                    });
                                } else {
                                    // Code is incorrect
                                    alert("Incorrect verification code. Please try again.");
                                }
                            }
                        });
                    } else {
                        // Handle any error in the verification process
                        alert("Verification process failed. Please try again later.");
                    }
                }
            };
            let requestData = "email=" + encodeURIComponent(email);
            xhr.send(requestData);
        }
    }
</script>