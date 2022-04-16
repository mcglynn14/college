function forLoop()
{
    for(var count=2; count <= 10; count+=2)
    {
        document.write(count + "<br>");
    }
}

function dowhileLoop()
{
    var count = 1;

    do{
        document.write(count +"<br>");
        count++;
    }while(count<=10);
}

function dowhileBackwards()
{
    var count = 10;

    do{
        document.write(count + "<br>")
        count--;
    }while(count >=1);
}

function forLoopBackwards()
{
    for(var count =10; count >=1; count--)
    {
        document.write(count + "<br>")
    }
}

function timesTable()
{
    for(var count =1; count <=12; count++)
    {
        var table = 5;

        var total = count + table;

        var print = "";

        print += count + " x " + table + " = " + total;

        document.write(print + "<br>")
    }
}