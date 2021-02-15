function days()
{
    var days = 0;

    days = parseInt(prompt("enter a number from 1 to 7"));

    switch(days)
    {
        case 1:
            alert("it is monday");
            break;
        case 2:
            alert("it is tuesday");
            break;
        case 3:
            alert("it is wednesday");
            break;
        case 4:
            alert("it is thursday");
            break;
        case 5:
            alert("it is friday");
            break;
        case 6:
            alert("it is saturday");
            break;
        case 7:
            alert("it is sunday");
            break;
        default:
            alert("only enter numbers between 1 and 7")
    }
}
days()