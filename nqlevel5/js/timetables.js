function timeTable()
{
    var table = document.getElementById("number").value;
    for(var count = 1; count <=12; count++)
    {
        

        var total = count * table;

        var print = "";

        print += count + " x " + table + " = " + total;

        //document.write(print + "<br>")

        document.getElementById("result").innerHTML += print + "<br>";

    }
}
function change()
{
    document.getElementById("result").innerHTML = "";
}
