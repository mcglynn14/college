// varibles for menu input and for add, subtract, divide and multiply
var option = 0;

var num1 = 0;

var num2 = 0;

var answer = 0;

// function to show differnt option on the menu so the user can either add, subtract, divide, multiply and exit
function menu(){
    do {
        option = parseInt(prompt("Please enter a number from the menu below:" + '\n' + "Option 1: Add numbers" + '\n' + "Option 2: Subtract numbers" + '\n' + "Option 3: Divide numbers" + '\n' + "Option 4: Multiply numbers" + '\n' + "Option 5: Exit"))

        switch(option){
            case 1:
                addNumbers()
                break;
            case 2:
                subtractNumbers()
                break;
            case 3:
                divideNumbers()
                break;
            case 4:
                multiplyNumbers()
                break;
            case 5:
                Exit()
                break;
            default:
                alert("Please enter a vaild number from the menu below")
                break;
        }
        
    }while (option != 5);
}

// funtion to add 2 numbers together and get the answer
function addNumbers(){
    num1 = parseInt(prompt("Enter a whole number"));
    num2 = parseInt(prompt("Enter a whole number"));

    answer = num1 + num2;

    alert(num1 + " + " + num2 + " = " + answer);
}

// funtion to subtract 2 numbers together and get the answer
function subtractNumbers(){
    num1 = parseInt(prompt("Enter a whole number"));
    num2 = parseInt(prompt("Enter a whole number"));

    answer = num1 - num2;

    alert(num1 + " - " + num2 + " = " + answer);
}

// funtion to divide 2 numbers together and get the answer
function divideNumbers(){
    num1 = parseInt(prompt("Enter a whole number"));
    num2 = parseInt(prompt("Enter a whole number"));

    answer = num1 / num2;

    alert(num1 + " / " + num2 + " = " + answer);
}

// funtion to multiply 2 numbers together and get the answer
function multiplyNumbers(){
    num1 = parseInt(prompt("Enter a whole number"));
    num2 = parseInt(prompt("Enter a whole number"));

    answer = num1 * num2;

    alert(num1 + " * " + num2 + " = " + answer);
}

// funtion to exit the menu
function Exit(){
    alert("Thanks for using the menu");
}