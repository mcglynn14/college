function table(){
    var display = "";
    var i = 1;
    var userinput = document.getElementById("multiplyer").value;
    var total = 0;

    for(i=1; i<=12; i++)
    {
        total = i*userinput;

        display += (i + " x " + userinput + " = " + total + "<br>");
    }
    document.getElementById("output").innerHTML=display;
}

function randomtable(){
    var printdisplay = "";
    var i = 1;
    var rndnum = Math.floor((Math.random() *10)+1)
    var newtotal = 0;

    for(i=1; i<=12; i++)
    {
        newtotal = i*rndnum;

        printdisplay += (i + " x " + rndnum + " = " + newtotal + "<br>");
    }
    document.getElementById("output1").innerHTML=printdisplay;
}

function indexclear(){
    document.getElementById("multiplyer").value="";
    document.getElementById("output").innerHTML="";
}