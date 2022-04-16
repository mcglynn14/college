function timetables()
{
    var num = parseInt(prompt("enter a number to display its times table"));

    var counter = 1;

    var total = 0;

    var display = "";

    for(counter = 1; counter <=12; counter++)
    {
        total = counter * num;

        display += (counter + " x " + num + " = " + total + "\n" );
    }
    alert(display);
}