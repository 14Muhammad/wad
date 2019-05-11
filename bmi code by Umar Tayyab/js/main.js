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
var clr = document.getElementById("clearFields");

// EVENT LISTENERS FOR QUESTION 2
hs.addEventListener("click", () => {
    toggleHeightInput();
})

ws.addEventListener("click", () => {
    toggleWeightInput();
})

// HEIGHT INPUT TOGGLER FOR QUESTION 2
function toggleHeightInput() {
    const unit = getHeightUnit();

    inInput.classList.toggle("hide");
    cmInput.classList.toggle("hide");
    ftInput.classList.toggle("hide");

    
    hs.innerText = hs.innerText === "Switch to Ft, in" ? "Switch to cm" : "Switch to Ft, in";
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

/*Code below for Question 3 Part 1 */

btnBMI.addEventListener("click", () => {
    computeBMI();
})



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
    let imageName = '';
    let message  = '';
    if (output < 18.5) {
        imageName = 'under.jpg';
        message = `${un.value} is underweight with BMI ${output}`;
    } else if (output > 18.5 && output < 24.9) {
        imageName = 'normal.jpg';        
        message = `${un.value} is normal with BMI ${output}`;
    } else if (output > 25 && output < 29.9) {
        imageName = 'overweight.jpg';        
        message = `${un.value} is overweight with BMI ${output}`;
    } else if (output > 30 && output < 39.9) {
        imageName = 'obesity.jpg';        
        message = `${un.value} is obesity with BMI ${output}`;
    } else if (output > 40) {
        imageName = 'morbid-obesity.jpg';        
        message = `${un.value} is morbid with BMI ${output}`;
    } else {
        imageName = 'bmi.jpg';        
        message = `Unknown BMI value of ${output}`;
    }

    displayResult(output, message, imageName);

}
function displayResult(bmiValue, bmiMsg, imgName) {
    /*Code below for Question 3 Part 3 */
    let fig = document.createElement("figure");

    let image = document.createElement("img");
    image.src = `./images/${imgName}`;
    image.alt = `${bmiMsg}`
    fig.appendChild(image);

    let figcaption = document.createElement("figcaption");
    figcaption.innerText = bmiMsg;
    fig.appendChild(figcaption);

    users.appendChild(fig);
}


clr.addEventListener("click", () => {
    clearFields();
})

function clearFields() {
    /*Code below for Question 3 Part 4 */
    while(users.lastElementChild) {
        users.removeChild(users.lastElementChild);
    }
}
