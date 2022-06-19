var randNum = 5;

var tries = 0;

function setQuestion()
{
    var userNum = parseInt(document.getElementById("question").value);
    var total = userNum*randNum;
    document.getElementById("ans").innerHTML = total;
}
function guessanswer()
{
    var userGuess = parseInt(document.getElementById("guess").value);
    
    tries++;

    document.getElementById("attempts").innerHTML = tries;
    
    if(userGuess == randNum)
    {
        document.getElementById("feedback").innerHTML = "Well done you know your times table";
    }
    else
    {
        document.getElementById("feedback").innerHTML = "Incorrect, try again";
    }
    if(tries == 3)
    {
        document.getElementById("feedback").innerHTML = "Learn your times tables";
        document.getElementById("question").disabled = true;
        document.getElementById("guess").disabled = true;

        timesTable();
    }
}
function timesTable()
{
    var counter = 1;
    for(counter = 1; counter<=12; counter++)
    {
        var sum = counter* randNum;

        document.getElementById("timestable").innerHTML += counter + " * " + randNum + " = " + sum + "<br>"; 
    }
}