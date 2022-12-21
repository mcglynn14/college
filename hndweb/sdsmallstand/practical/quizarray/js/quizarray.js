var quiz = [
    ["Q1: How Many Reindeer Does Santa Have????????", "8"],
    ["Q2: Where Does Santa Live", "North Pole"],
];

var i = 0;

var totalScore = 0;
function checkAnswers(){
    var score = 0;

    var q1correct = 8;

    var userAnswer1 = document.getElementById("userq1").value;

    if(userAnswer1==q1correct)
    {
        document.getElementById("q1feedback").innerHTML = "Answer: Correct Well Done Santa is Putting You On The NIce List!!";
        score++;
        alert(score);

    }
    else
    {
        document.getElementById("q1feedback").innerHTML = "Answer: Incorrect Santa is Putting You On The Naughty List!!";   
    }
}


function questions(){
    for(i=0; i<quiz.length; i++)
    {
        document.getElementById("p2q"+i).innerHTML = quiz[i] [0];
    }
}




function arrayAnswers()
{
    for(i = 0; i<quiz.length; i++)
    {
        if(document.getElementById("p2userq"+i).value ==quiz [i][1])
        {
            totalScore++;
            document.getElementById("p2q"+i+"feedback").innerHTML = "Well Done the correct answer is " + quiz[i][1]; 
        }

        else
        {
            document.getElementById("p2q"+i+"feedback").innerHTML = "Incorrect the correct answer is " + quiz[i][1];
        }

        // document.getElementById="finalscore".innerHTML = "You scored " + totalScore + " Out of " + quiz.score;
    }
}