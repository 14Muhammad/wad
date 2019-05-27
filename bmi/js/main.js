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
    inInput.classList.toggle("hide");
    ftInput.classList.toggle("hide");
    cmInput.classList.toggle("hide");
    hs.innerText = hs.innerText === "Switch to centimeters"? "Switch to Ft, in" : "Switch to centimeters";
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
ws.addEventListener("click",function () {
    toggleWeightInput();
});
/*Code below for Question 3 Part 1 */

btnBMI.addEventListener("click",function () {
    computeBMI();
});

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
    if (output<18.5) {
        displayResult(output,"Underweight","under");
    }
    else  if (output>=18.5 && output<25) {
        displayResult(output,"Normal","normal");
    }
    else   if (output>=25 && output<30) {
        displayResult(output,"Overweight","over");
    }
    else   if (output>=30 && output<40) {
        displayResult(output,"Obese","obesity");
    }
    else if (output>40) {
        displayResult(output,"Morbid Obese","morbid-obesity");
    }



}
function displayResult(bmiValue, bmiMsg, imgName) {
    /*Code below for Question 3 Part 3 */
    var fig = document.createElement("figure");
    var caption = document.createElement("figcaption");
    caption.innerHTML = un.value + " is " + bmiMsg + " with BMI " + bmiValue;
    var img = document.createElement("img");
    img.setAttribute("src","./images/"+imgName+".jpg");
    img.classList.add("col-3");
    fig.append(img);
    fig.append(caption);
    users.append(fig);
    clearFields();
}

function clearFields() {
    /*Code below for Question 3 Part 4 */
    un.value = "";
    cmInput.value = "";
    ftInput.value = "";
    inInput.value = "";
    pdInput.value = "";
    kgInput.value = "";
}