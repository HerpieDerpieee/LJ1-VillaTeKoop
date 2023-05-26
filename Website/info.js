let namecheck = /^[A-Za-z]*$/;
let fnametrue = false;
let lnametrue = false;
let tnumtrue = false;
let bodtrue = false;

function formCheck()
{
    if(document.getElementById(fname) == namecheck){
        console.log("true")
    }
}