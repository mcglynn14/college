var pin = "999";

var inputPin = "";

var counter = 0;

var option = 0;

var balance = 1000;

var deposit = 0;

var withdraw = 0;

function pininput(){
    do{
        inputPin = parseInt(prompt("Enter pin"));

        if(inputPin == pin)
        {
            alert("Access granted");
            menu();
            break;
        }
        else
        {
            alert("You have entered the wrong pin try again");
            counter++;
        }
        if(counter == 3)
        {
            alert("You are locked out of the system");

        }
    }while(counter<3);
}

function menu(){
    do{
        option = parseInt(prompt("Please enter a number from the menu options" + '\n' + "Option 1: Balance" + '\n' + "Option 2: Add funds" + '\n' + "Option 3: Withdraw funds" + '\n' + "Option 4: Exit"));
        switch(option)
        {
            case 1:
                balanceFunds();
                break;
            case 2:
                addFunds();
                break;
            case 3:
                withdrawFunds();
                break;
            case 4:
                exit();
                break;
            default:
                alert("Please enter a vaild number from the menu options");
                break;
        }
    }while(option != 4);
}

function balanceFunds(){
    alert("You have chosen to view balance");
    alert("Current balance " + balance);
}

function addFunds(){
    alert("You have chosen to add funds");
    deposit = parseInt(prompt("Please enter the amount of funds you would like to add"));
    balance = balance + deposit;
    alert("Your new balance is " + balance);
}

function withdrawFunds(){
    alert("You have chosen to withdraw funds");
    withdraw = parseInt(prompt("Please enter the amount of funds you would like to withdraw"));
    balance = balance - withdraw;
    alert("your new balance is " + balance);
}

function exit(){
    alert("You have chosen to exit the menu");
    alert("You have exited the menu");
}

