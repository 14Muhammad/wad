/*
https://developer.mozilla.org/en-US/docs/Web/Events
https://www.cambiaresearch.com/articles/15/javascript-char-codes-key-codes
*/

/*var b1 = document.getElementsByTagName("button")[0];

b1.addEventListener("mouseenter",function () {
    console.log("mouse entered !")
})*/

var button=document.getElementById("enter");
var ul=document.getElementsByTagName("ul")[0];

button.addEventListener("click",function () {
    console.log("clicked");
    var input =document.getElementById("user-input").value;

    var li=document.createElement("li");
    li.append(document.createTextNode(input.value));
    ul.append(li);
    input.value='';
});

