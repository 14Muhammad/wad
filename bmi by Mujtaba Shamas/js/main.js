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

hs.addEventListener("click", () =>{
    cmInput.classList.toggle("hide");
    ftInput.classList.toggle("hide");   
    inInput.classList.toggle("hide");   
    hs.innerText = hs.innerText === "Switch to Ft, in"? "Switch to centimeters" : "Switch to Ft, in";
});

ws.addEventListener("click", () => {
    pdInput.classList.toggle("hide");
    kgInput.classList.toggle("hide");
    ws.innerText = ws.innerText === "Switch to Kg"? "Switch to Pounds" : "Switch to Kg";
});

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

/*Code below for Question 3 Part 1 */

btnBMI.addEventListener("click", () => {
    computeBMI();
});

function computeBMI()
{
    console.log("button clicked");
    var meter = 0;
    var kg = 0;
    var userName = un.value;
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
    var weightMsg = "";
    var imgName = "";
    if(output < 18.5){
        weightMsg = "underweight";
        imgName = "images/under.jpg";
    } else if (output >= 18.5 && output <= 24.9) {
        weightMsg = "normal weight";
        imgName = "images/normal.jpg";
    } else if (output >= 25 && output <= 29.9) {
        weightMsg = "overweight";
        imgName = "images/over.jpg";
    } else if (output >= 30 && output <= 39.9) {
        weightMsg = "obesity";
        imgName = "images/obesity.jpg";
    } else if (output > 40) {
        weightMsg = "morbid obesity";
        imgName = "images/morbid-obesity.jpg";
    }

    var bmiMsg = userName + " is " + weightMsg + " with BMI " + output + ".";
    
    displayResult(output, bmiMsg, imgName);
    clearFields();
}

function displayResult(bmiValue, bmiMsg, imgName) {
    /*Code below for Question 3 Part 3 */
    var imageElement = document.createElement("img");
    var figcElement = document.createElement("figcaption");
    var div = document.createElement("div");

    figcElement.innerText = bmiMsg;
    imageElement.setAttribute("src", imgName);

    div.classList.add("col-4");
    div.classList.add("mb-30");
    div.appendChild(imageElement);
    div.appendChild(figcElement);

    users.appendChild(div);
}

function clearFields() {
    /*Code below for Question 3 Part 4 */
    cmInput.value = ""
    ftInput.value = ""
    inInput.value = ""
    pdInput.value = ""
    kgInput.value = ""; 
    un.value = ""; 
}