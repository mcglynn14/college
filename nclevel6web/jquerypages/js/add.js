function addNumbers()
{
    var number1=parseInt(document.getElementById("num1").value);

    var number2=parseInt(document.getElementById("num2").value);

    var result = number1+number2;

    document.getElementById("answer").innerHTML=result;

}

function clears()
{
    document.getElementById("num1").value="";
    document.getElementById("num2").value="";
    document.getElementById("answer").innerHTML="";
}