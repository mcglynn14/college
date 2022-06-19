function addition()
{
    var number1 = parseInt(document.getElementById("num1").value);
    var number2 = parseInt(document.getElementById("num2").value);

    var total = number1 + number2;

    document.getElementById("result").innerHTML = "Answer: " + total;
}
function subtraction()
{
    var number1 = parseInt(document.getElementById("num1").value);
    var number2 = parseInt(document.getElementById("num2").value);

    var total = number1 - number2;

    document.getElementById("result").innerHTML = "Answer: " + total;
}