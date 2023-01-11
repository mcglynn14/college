var rand1 = 0;
var rand2 = 0;
var answer = 0;
var guess = 0;

function generate(){
    
  

    rand1 = Math.floor(Math.random() * 10);
    rand2 = Math.floor(Math.random() * 10);

    document.getElementById("num1").innerHTML = rand1;
    document.getElementById("num2").innerHTML = rand2;


}


function guessNumber(){

   guess = parseInt(document.getElementById("UserInput").value);
  

   answer = rand1 * rand2;


   if(guess == answer){
    document.getElementById("result").innerHTML = "You are correct !!"
    document.getElementById("result").style.color = "Green"
    document.getElementById("result").style.fontSize = "20"
   }
   else
   {
    document.getElementById("result").innerHTML = "Please learn your times tables"
    document.getElementById("result").style.color = "Red"

     tableFunction();
   }

}



function tableFunction(){
 var counter = 1
 var tableTotal = 0;
 var display = "";

 for(counter=1; counter <=12; counter++){
    tableTotal = counter * rand2;

    display += (counter + " X " + rand2 + " = " + tableTotal + "<br>");

    document.getElementById("TimesTable").innerHTML = display;
 }



}