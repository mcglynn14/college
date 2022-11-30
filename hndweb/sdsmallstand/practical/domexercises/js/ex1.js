function headingColours(){

    var i = 0;

    var headingColour = "";

    i = document.getElementById("colours").selectedIndex;

    headingColour = document.getElementById("colours").options[i].value;

    document.body.style.color=headingColour
}