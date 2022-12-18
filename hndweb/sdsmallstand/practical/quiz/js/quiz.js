// global variabl;e declorations

var totalScore = 0;
var totalScoreM = 0;

// function decloration

// get user answers, compair against answers and ajust score

function checkQuiz(){
    var userAns1 = document.getElementById("ansq1").Value;

    if(userAns1 == 8){
        document.getElementById("q1result").innerHTML = "well done santa would be proud";
        document.getElementById("q1result").style.color ="green";
        document.getElementById("q1result").style.fontSize = "25px";

        totalScore++

        document.getElementById("score").innerHTML = "Score: " + totalScore;
        
    }
    else{
        document.getElementById("q1result").innerHTML = "Santa is sad that you know so little about him";
        document.getElementById("q1result").style.color = "red";
        document.getElementById("q1result").style.fontSize = "25px";
        }

    var userAns2 = document.getElementById("ansq2").Value;

    if(userAns2 == 5){
        document.getElementById("q2result").innerHTML = "well done santa would be proud";
        document.getElementById("q2result").style.color ="green";
        document.getElementById("q2result").style.fontSize = "25px";

        totalScore++

        document.getElementById("score").innerHTML = "Score: " + totalScore;
    }
    else{
        document.getElementById("q2result").innerHTML = "Santa is sad that you know so little about him";
        document.getElementById("q2result").style.color = "red";
        document.getElementById("q2result").style.fontSize = "25px";
    }
}