function onetoFifty(){
    var counter = 1;

    var display = "";

    for(counter = 10; counter >=0; counter--)
    {
        display +=(counter + '\n');
    }

    alert(display);
}

function tt(){
    var rand = Math.floor(Math.random() * 10) + 1;

    var result = 0;

    var display = "";

    var counter = 1;

    for(counter = 1; counter <=10; counter++)
    {
        result = counter * rand;

        display += (counter + " x " + rand + " = " + result + '\n');
    }

    alert(display);
}