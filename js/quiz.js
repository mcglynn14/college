function checkAnswers()
{
    var score=0;
    var total = 0;

    if(document.getElementById("radio-3").checked==true)
    {
        score++;
        document.getElementById("score").innerHTML="Score " + score;
    }

    if(document.getElementById("radio-4").checked==true)
    {
        score++;
        document.getElementById("score").innerHTML="Score " + score;
    }
    
    if(document.getElementById("radio-7").checked==true)
    {
        score++;
        document.getElementById("score").innerHTML="Score " + score;
    }

    if(document.getElementById("radio-10").checked==true)
    {
        score++;
        document.getElementById("score").innerHTML="Score " + score;
    }

    total += score;
    document.getElementById("score").innerHTML="Score " + total

}
