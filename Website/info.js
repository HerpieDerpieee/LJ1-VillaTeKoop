document.getElementById("submit").addEventListener("click", (event) => {
    event.preventDefault()
    formCheck()
})

let namecheck = /^[A-Za-z]*$/;
let fnametrue = false;
let lnametrue = false;
let tnumtrue = false;
let bodtrue = false;

function formCheck()
{
    let fname = document.getElementById("fname").value;
    let lname = document.getElementById("lname").value;
    let tnum = document.getElementById("tnum").value;
    let bod = document.getElementById("bod").value;
    if(namecheck.test(fname)){
        fnametrue = true
    }
    if(namecheck.test(lname)){
        lnametrue = true
    }
    if(!isNaN(tnum)){
        tnumtrue = true
    }
    if(!isNaN(bod) && bod > 999999){
        bodtrue = true
    }
}



//SLIDER STUFF

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";
}