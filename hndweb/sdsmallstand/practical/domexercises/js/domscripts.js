// domexercises.html

function setUp(){
    document.getElementById("innerHTML").innerHTML = "It's cold outside!!!";
}

function Window(){
    document.getElementById("window").innerHTML = "Close the window!!!";
}

// Class code.html
function classCode(){

    document.getElementById("heading").innerHTML = "My class code is: HNDWEBEN-F221A-L";

    document.getElementById("heading").style.color = "red"

    document.getElementById("heading").style.fontFamily = "papyrus";

    document.getElementById("heading").style.backgroundColor = "black";

    document.getElementById("heading").style.fontSize = "48px";

    document.getElementById("body").style.backgroundColor = "black";
}

// input.html
function multiply(){

    var input1 = parseInt(document.getElementById("num1").value);
    var input2 = parseInt(document.getElementById("num2").value);

    var total = input1 * input2;

    document.getElementById("total").innerHTML = total;


}