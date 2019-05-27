// https://babeljs.io/repl/

// ECMA international

// ECMAScript === JavaScript

// ES6 , ES7
/*
const player = "Ali";
let experience = 100;
let level = false;

if(experience> 90) {
    let level = true;
    console.log(level);
}
console.log(level);
*/
//-----------------------------------------
/*
const player = "Ali";
let experience = 100;
var level = false;

if(experience> 90) {
    var level = true;
    console.log("inside", level);
}
console.log("outside" ,level);

*/

//----------------------------------------------
/*
const a = function () {
    console.log("const func");
}

let b = 1;
a = b;
*/
//------------------------------------------------
/*
const obj = {
    player: "ali",
    exp: 100,
    level: false
}

obj = 3;

*/

//----------------------------------------------------

// destructuring
/*
const obj = {
    player: "ali",
    exp: 100,
    level: false
}

const player = obj.player;
const exp = obj.exp;
let level  = obj.level;

const {player, exp } = obj;
let {level } = obj;
*/
//===================================================
/*
const name = 'ahmed ali';

const obj = {
    [name]: "hello",
    [1  + 3]: "testing"
};
*/

//------------------------------------------------------

/*
const a = "abdullah";
const b = true;
const c = {};

const obj = {
    a: a,
    b: b,
    c: c
}

const obj2 = {a, b, c}

*/
//=========================================================

//Template Strings
/*
const name = "ali";
let score = 3;
let age = 20;

const greetings = "hello" + name;

const greetings2 = `Hello ${name} you age is ${age} and your score is ${score}`;

*/
//==================================================

//Default Arguments
/*
function greet(name='', age=30, score=0) {
    const greetings2 = `Hello ${name} you age is ${age} and your score is ${score}`;
}

*/
//===================================

// Symbols
/*
let sym1 = Symbol();
let sym2 = Symbol("foo");
let sym3 = Symbol("foo");

*/

//=========================================

//Arrow Function

function add(a,b) {
    return a +b ;

}

const add = (a,b) => a+ b;













