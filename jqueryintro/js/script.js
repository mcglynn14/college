function add(){
    var num1 = parseInt(document.getElementById("num1").value);

    var num2 = parseInt(document.getElementById("num2").value);

    var total = num1 + num2;

    document.getElementById("answer").innerHTML="Answer: " + total;
}

function empty(){
    document.getElementById("num1").value="";
    document.getElementById("num2").value="";

    document.getElementById("answer").innerHTML="Answer:";
}