function subtract()
{
    var num1 = 0;
    var num2 = 0;

    var total = 0;

    num1 = parseInt(prompt("enter a number"));
    num2 = parseInt(prompt("enter a number"));

    total = num1 - num2;

    alert(num1 + " - " + num2 + " = " + total);
}
subtract()