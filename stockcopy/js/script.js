var username = "admin";

var userinput = "";

var counter = 0;

var choice = 0;

var stockTotal = 1000;

var addstock = 0;

var deletestock = 0;

do
{
    userinput = parseInt(document.getElementById("login").value);
    if (userinput == username)
    {
        alert("Access granted");
        menu();
        break;
    }
    else
    {
        alert("incorrect try again");
        counter++
    }
    if(counter ==3)
    {
        alert("You have been locked out of the system");
        exit();
    }
}while(counter <3);

function menu()
{
    do
    {
        choice = parseInt(prompt("Please make a selection from the menu below" + "\n" + "1. display current stock" + "\n" + "2. add stock" + "\n" + "3. delete stock" + "\n" + "4. exit"));
        switch(choice)
        {
            case 1:
                alert("You have chosen option 1 - display balance")
                alert(stockTotal)
                break;
            case 2:
                alert("You have chosen option 2 - add stock")
                addStock()
                break;
            case 3:
                alert("You have chosen option 3 - delete stock")
                deleteStock()
                break;
            case 4:
                alert("You have chosen option 4 - exit")
                Exit()
                break;
            default:
                alert("You must enter a number between 1-4");
                break;
        }
    }while(choice!=4)
}

function addStock()
{
    addstock = parseInt(prompt("How much stock do you want to add"));
    stockTotal = stockTotal + addstock;
    alert(stockTotal);
}
function deleteStock()
{
    deletestock = parseInt(prompt("How much stock do you want to be deleted"));
    stockTotal = stockTotal - deletestock;
    alert(stockTotal);
}
function Exit()
{
    alert("You have logged out of the system");
}
