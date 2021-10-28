function menu()
{
    var choice;

    do{
        choice = parseInt(prompt("Enter an option from the menu below:" + "\n" + "Option 1: Add Numbers" + "\n" + "Option 2: Subtract Numbers" + "\n" + "Option 3: Divide Numbers" + "\n" + "Option 4: Multiply Numbers" + "\n" + "Option 5: EXIT"));


        switch(choice)
        {

            case 1:
                add();
                break;

            case 2:
                subtract();
                break;

            case 3:
                divide();
                break;
            case 4:
                multiply();
                break;
            case 5:
                exit()
                break;
            default:
                alert("You must enter a number between 1-5");
        }
    }while(choice !=5)
}
function add()
{
    alert("You have choosen Option 1: Add Numbers");

    var addNum1 = parseInt(prompt("enter a whole number"));
    var addNum2 = parseInt(prompt("enter a whole number"));

    var addTotal = addNum1 + addNum2;

    alert(addNum1 + " + " +  addNum2 + " = " + addTotal);
}
function subtract()
{
    alert("You have choosen Option 2: Subtract Numbers");

    var subNum1 = parseInt(prompt("enter a whole number"));
    var subNum2 = parseInt(prompt("enter a whole number"));

    var subTotal = subNum1 - subNum2;

    alert(subNum1 + " - " + subNum2 + " = " + subTotal);
}
function divide()
{
    alert("You have choosen Option 3: Divide Numbers");

    var divideNum1 = parseInt(prompt("enter a whole number"));
    var divideNum2 = parseInt(prompt("enter a whole number"));

    var divideTotal = divideNum1 / divideNum2;

    alert(divideNum1 + " / " + divideNum2 + " = " + divideTotal);
}
function multiply()
{
    alert("You have choosen Option 4: Multiply Numbers");

    var multiNum1 = parseInt(prompt("enter a whole number"));
    var multiNum2 = parseInt(prompt("enter a whole number"));

    var multiTotal = multiNum1 * multiNum2;

    alert(multiNum1 + " * " + multiNum2 + " = " + multiTotal);
}
function exit()
{
    alert("thank you!!");
}