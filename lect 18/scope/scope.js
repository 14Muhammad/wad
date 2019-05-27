//SCOPE

function aa() {
    console.log("test");
}
//This will be available in window scope/root scope

function bb() {
    var a = "hello";
}

console.log(a); // a is not defined

//---------------------------------------------


var b = "Can I access this ?";
function bb() {
    var a = "hello";
    console.log(a);
    console.log(b);
}
//------------------------------------


var b = "Can I access this ?";
function bb() {
    var b = "hello";
    console.log(b);
}
console.log(b);
//--------------------------------------------------

var x = 100;

//root/parent/window scope
function test1() {
    //child scope
    var x = "ali";
    console.log('1',x);
}

function test2() {
    //child scope
    var x = "john";
    console.log('2',x);
}

function test3() {
    //child scope
    x = "iqbal";
    console.log('3',x);
}

console.log("window",x);


 //---------------------------------------------

var fun = 4;  //last check is always root scope.

function funFunction() {
    console.log(fun);
}

//--------------------------------------------
