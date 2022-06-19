// Global variables

// random number variable
var randNum = 0;

// attemps variable
var tries = 0;

// random number function generates a random number and multiplies with the users number
function randomNum()
{
    var userNum = parseInt(document.getElementById("usernuminput").value);
    // generates random number
    randNum = Math.floor(Math.random() * 12) + 1;

    // multiplies the random number with the users number
    var total = userNum * randNum;
    document.getElementById("randomnum").innerHTML = total;
}

// guess number function looks at the users guess to see if it correct with the random number and if it in the number of attemps
function guessNum()
{
    var userGuess = parseInt(document.getElementById("userguessinput").value);

    // attempts
    tries++;

    document.getElementById("attempts").innerHTML = tries;
    
    // correct answer if
    if(userGuess == randNum)
    {
        document.getElementById("feedback").innerHTML = "Well done you know your times table";
        document.getElementById("usernuminput").disabled = true;
        document.getElementById("userguessinput").disabled = true;
        document.getElementById("randnumbutton").disabled = true;
        document.getElementById("guessnumbutton").disabled = true;
    }
    // wrong answer else
    else
    {
        document.getElementById("feedback").innerHTML = "Incorrect, try again";
    }
    // time table if tries is 3
    if(tries == 3)
    {
        document.getElementById("feedback").innerHTML = "Learn your times tables";
        document.getElementById("usernuminput").disabled = true;
        document.getElementById("userguessinput").disabled = true;
        document.getElementById("randnumbutton").disabled = true;
        document.getElementById("guessnumbutton").disabled = true;

        timesTable();
    }
}

// times table function shows the timetable for the correct answer if the user gets the answer incorrect
function timesTable()
{
    // counter for the timetable
    var counter = 1;
    for(counter = 1; counter<=12; counter++)
    {
        var sum = counter* randNum;

        document.getElementById("timestable").innerHTML += counter + " * " + randNum + " = " + sum + "<br>"; 
    }
}
