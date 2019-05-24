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
//btnBMI.addEventListener("click",computeBMI());


ws.addEventListener("click",function(){
    pdInput.classList.toggle("hide");
    kgInput.classList.toggle("hide");
    ws.innerText = ws.innerText === "Switch to Kg"? "Switch to Pounds" : "Switch to Kg";
})

hs.addEventListener("click",function()
{
    ftInput.classList.toggle("hide");
    inInput.classList.toggle("hide");
    cmInput.classList.toggle("hide");
    hs.innerText = hs.innerText === "Switch to centimeters"? "Switch to Ft,in" : "Switch to centimeters";
})

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
function computeBMI()
{
    clearFields();
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

    if(output<18.5)
    {
        displayResult(output," underweight with bmi ","images/under.jpg");
    }
    else if(output>=18.5 && output<=24.9)
    {
        displayResult(output," normal with bmi ","images/normal.jpg");
    }
    else if(output>=30 && output<=39.9)
    {
        displayResult(output," obese with bmi ","images/obesity.jpg");
    }
    else if(output>40)
    {
        displayResult(output,"morbid obese with bmi","images/morbid-obesity.jpg");
    }
    /*Code below for Question 3 Part 2 */
}
function displayResult(bmiValue, bmiMsg, imgName) {
    var figure=document.createElement("figure");
    var cap=document.createElement("figcaption")
    var img=document.createElement("img");
    img.src=imgName;
    img.classList.add("img");
    cap.innerHTML=(bmiMsg+" "+bmiValue);
    figure.append(img);
    figure.append(cap);
    users.append(figure);
    /*Code below for Question 3 Part 3 */
}

function clearFields() {
    cmInput.input='';
    ftInput.input='';
    inInput.input='';
    pdInput.input='';
    kgInput.input='';
    /*Code below for Question 3 Part 4 */
}