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


function toggleWeightInput(){
    pdInput.classList.toggle("hide");
    kgInput.classList.toggle("hide");
    ws.innerText = ws.innerText === "Switch to Kg"? "Switch to Pounds" : "Switch to Kg";
}

ws.addEventListener('click', toggleWeightInput)


function toggleHeightInputs(){

    if(ftInput.classList.contains('hide')){
        this.innerHTML = 'Switch to centimeters';
        ftInput.classList.remove('hide')
        inInput.classList.remove('hide')
        cmInput.classList.add('hide')
    }
    else{
        this.innerHTML = 'Switch to Ft, in ';
        ftInput.classList.add('hide')
        inInput.classList.add('hide')
        cmInput.classList.remove('hide')
    }

}


hs.addEventListener('click' , toggleHeightInputs)


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
    var imgSrc = ''
    var message  = un.innerText + ' is '


    if(output< 18.5){
        imgSrc = 'images/under.jpg'
        message += ' underweight '
    }
    if(output>= 18.5 && output< 25){
        imgSrc = 'images/normal.jpg'
        message += ' normal weight '
    }
    if(output>= 25 && output < 30){
        imgSrc = 'images/over.jpg'
        message += ' overweight '
    }
    if(output>= 30 && output <40){
        imgSrc = 'images/obesity.jpg'
        message += ' obesity '
    }
    if(output>40){
        imgSrc = 'images/morbid-obesity.jpg'
        message += ' morbid obesity '
    }

    message += " with <br/> BMI " + output

    console.log(message)

    displayResult(output, message, imgSrc)

}
function displayResult(bmiValue, bmiMsg, imgName) {
    /*Code below for Question 3 Part 3 */
    var figure = document.createElement('figure')
    var img = document.createElement('img')
    var figcaption = document.createElement('figcaption')

    img.src = imgName
    figcaption.innerHTML = bmiMsg

    figure.appendChild(img)
    figure.appendChild(figcaption)
    users.appendChild(figure)

    clearFields()
}

function clearFields() {
    /*Code below for Question 3 Part 4 */

    cmInput.value = ''
    ftInput.value = ''
    inInput.value = ''
    pdInput.value = ''
    kgInput.value = ''

}



btnBMI.addEventListener('click', computeBMI)