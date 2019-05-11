var hs = document.getElementById("height-switch");
var ws = document.getElementById("weight-switch");
var btnBMI = document.getElementById("calcBMI");
var cmInput = document.getElementById("centimeters");
var ftInput = document.getElementById("feet");
var inInput = document.getElementById("inches");
var pdInput = document.getElementById("pounds");
var kgInput = document.getElementById("kg");
var un = document.getElementById("username");
var users = document.getElementById("users");

function toggleHeightInput(){

}

function toggleWeightInput(){
    pdInput.classList.toggle("hide");
    kgInput.classList.toggle("hide");
    ws.innerText = ws.innerText === "Switch to Kg"? "Switch to Pounds" : "Switch to Kg";
}

function getHeightUnit(){
    if(cmInput.classList.contains("hide"))
        return "ft";
    return "cm";
}

function getWeightUnit(){
    if(pdInput.classList.contains("hide"))
        return "kg";
    return "pd";
}

hs.addEventListener("click",function () {
    toggleHeightInput();
});

/*Code below for Question 3 Part 1 */

function computeBMI()
{
    var meter = 0;
    var kg = 0;
    //Convert all units to metric
    if(getHeightUnit()==="cm") {
        meter = Number(document.getElementById("centimeters").value)/100.00;
    }else {
        meter = (Number(document.getElementById("feet").value)*12 + Number(document.getElementById("inches").value))/39.370;
    }
    if(getWeightUnit()==="pd") {
        kg = Number(document.getElementById("pounds").value)/2.2046;
    }
    else {
        kg = Number(document.getElementById("kg").value);
    }

    //Perform calculation
    var BMI=kg/Math.pow(meter,2);
    var output =  Math.round(BMI*100)/100;

    /*Code below for Question 3 Part 2 */



}
function displayResult(bmiValue, bmiMsg, imgName) {
    /*Code below for Question 3 Part 3 */
}

function clearFields() {
    /*Code below for Question 3 Part 4 */
}