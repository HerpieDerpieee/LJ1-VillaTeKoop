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