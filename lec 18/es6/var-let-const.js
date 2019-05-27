//ES5
var x = 14;
x = 12;
console.log(x);//12
12;

//ES6
let x = 14;
x = 12;
console.log(x); //12

//ES6
const y = 14;
y = 12; //TypeError: Assignment to constant variable.
console.log(y);




/******************************************
 *
 *             SCOPE
 *
 * ******************************************/



var a   //declaration
a = 5   // initialization
let b //declaration
b = 10  //initialization
var c = 5  //declaration plus initialization in one step
let d = 5  //declaration plus initialization in one step
const a ; // SyntaxError: Missing initializer in const declaration
a = 5;
console.log(a);
const a = 5
console.log(a) //5

/*
1: when we start our variable with var, let is called declaration. e.g: var a; or let a;
2: when we start our variable and assigning value it is declaration and initialization with value
3: const cannot be declared only, you need to initialize it with declaration*/



/*Let and const have a block scope but var has function scope.*/


//ES5
function adult5(age) {
    if (age > 18) {
        var status = 'adult';
    }
    console.log(status); //adult
}
adult5(20);



// ES6
function adult6(age) {
    if (age > 18) {
        let status = 'adult';
    }
    console.log(status); //ReferenceError: status is not defined
}
adult6(20);



/*
1: var and let can change their value and const cannot change its value
2: var can be accessible anywhere in function but let and const can only be   accessible inside the block where they are declared.
*/


//ES5
var num = 10;
for (var num = 0; num < 3; num++) {
    console.log(num); //0 1 2
}
console.log(num); //3


//ES6
let num = 10;
for (let num = 0; num < 3; num++) {
    console.log(num); //0 1 2
}
console.log(num); //10



//ES5
for (var i = 0; i < 5; i++) {
    var btn = document.createElement('button');
    btn.appendChild(document.createTextNode('Button ' + i));
    btn.addEventListener('click', (function() {
        { console.log(i); };
    }));
    document.body.appendChild(btn);
}


for (let i = 0; i < 5; i++) {
    var btn = document.createElement('button');
    btn.appendChild(document.createTextNode('Button ' + i));
    btn.addEventListener('click', function(){ console.log(i); });
    document.body.appendChild(btn);
}

/******************************************
*
*               HOISTING
*
* ******************************************/


console.log(a); // undefined
var a = 2;
console.log(b); // Uncaught ReferenceError: b is not defined
console.log(c); // Uncaught ReferenceError: c is not defined
let c = 2;
