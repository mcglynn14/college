function menu()
{
    var choice;

    do{
        choice = parseInt(prompt("Enter an option from the menu below:" + "\n" + "Option 1: Convert Euros to Sterling" + "\n" + "Option 2: Convert Euros to Us Dollars" + "\n" + "Option 3: Convert Sterling to Euros" + "\n" + "Option 4: Convert Us Dollars to Euros" + "\n" + "Option 5: Convert Us Dollars to Canadian Dollars" + "\n" + "Option 6: Convert Canadian Dollars to Us Dollars" + "\n" + "Option 7: EXIT"));

        switch(choice)
        {
            case 1:
                eurostopounds()
                break;
            case 2:
                eurostousdollars()
                break;
            case 3:
                poundstoeuros()
                break;
            case 4:
                usdollarstoeuros()
                break;
            case 5:
                usdollarstocanadadollars()
                break;
            case 6:
                canadadollarstousdollars()
                break;
            case 7:
                exit()
                break;
            default:
                alert("You must enter a option between 1-7")

        }
        
    }while(choice !=7)
}
function eurostopounds()
{
    var euros = 0;
    var pounds = 0;

    euros = parseInt(prompt("enter a amount of euros"));

    pounds = euros * 0.84;

    alert(euros + " euros converted to pounds = " + pounds);
}
function eurostousdollars()
{
    var euros = 0;
    var usdollars = 0;

    euros = parseInt(prompt("enter a amount of euros"));

    usdollars = euros * 1.16;

    alert(euros + " euros converted to us dollars = " + usdollars);
}
function poundstoeuros()
{
    var pounds = 0;
    var euros = 0;

    pounds = parseInt(prompt("enter a amount of pounds"));

    euros = pounds * 1.19;

    alert(pounds + " pounds converted to euros = " + euros);
}
function usdollarstoeuros()
{
    var usdollars = 0;
    var euros = 0;

    usdollars = parseInt(prompt("enter a amount of us dollars"));

    euros = usdollars * 0.86;

    alert(usdollars + " us dollars converted to euros = " + euros);
}
function usdollarstocanadadollars()
{
    var usdollars = 0;
    var canadadollars = 0;

    usdollars = parseInt(prompt("enter a amount of us dollars"));

    canadadollars = usdollars * 1.24;

    alert(usdollars + " us dollars converted to canadian dollars = " + canadadollars);
}
function canadadollarstousdollars()
{
    var canadadollars = 0;
    var usdollars = 0;

    canadadollars = parseInt(prompt("enter a amount of canadian dollars"));

    usdollars = canadadollars * 0.81;

    alert(canadadollars + " canadian dollars converted to us dollars = " + usdollars);
}
function exit()
{
    alert("thank you for using the currency conversion program");
}