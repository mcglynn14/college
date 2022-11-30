function changecolours(){

    var i = 0;

    var bgColour = "";

    i = document.getElementById("colours").selectedIndex;

    bgColour = document.getElementById("colours").options[i].value;

    document.body.style.backgroundColor=bgColour;
}