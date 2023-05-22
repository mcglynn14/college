// login function that get the username and email that the user has entered and checks the email is valid
function login(){
  var usernameinput = "";
  var emailInput = "";

  // gets the username and email from the inputs from the user
  usernameinput = document.getElementById("usernameinput").value;
  emailInput = document.getElementById("emailInput").value;    

  var check = document.getElementById("emailInput").value;

  var regExpression = /^([a-zA-Z0-9\._-]+)@([a-zA-Z0-9])+.(.[a-z]+)+.(.[a-z]+)?$/;

  // if that checks if the email is valid and sends the user to the menu page
  if(emailInput && regExpression.test(check))
  {
    setCookie();
    window.location.href = "menu.html";
    return true;
  }
  // else tells the user the email is invaild and doesnt take the user to the meun page
  else
  {
        tippy('#login', {
          content: 'Your email is: invaild',
          trigger: 'click',
          delay: 0
        });
      return false;
  }
}

// set cookie function that gets the username the user has entered and browser gets the cookie
function setCookie(cname, cvalue){

cvalue = document.getElementById("usernameinput").value;

document.cookie = cname + " = " +cvalue;

}

// function the gets the username cookie from the browser
function getCookie(cname){
var name = cname + "=";

var decodedCookie = decodeURIComponent(document.cookie);

var ca=decodedCookie.split(';');

for(var i = 0; i <ca.length; i++){

    var c =ca[i];

    c = c.trim();

if(c.indexOf(name)== 0)
{
    return c.substring(name.length, c.length)
}


}
return "cookie not found";
}

// function the checks the cookie and display it on the website
function checkCookie(){
  document.getElementById("usernameDisplay").innerHTML = "Username: " + getCookie("name");
}

// function that send the user to the differnt quiz pages that are on the menu page
function changepage(){
    document.getElementById("basicnumeracy").addEventListener("click", function(){
        if (this.id === "basicnumeracy") {
          window.location.href = "basicnumeracy.html";
        }
    });

    document.getElementById("basicLiteracy").addEventListener("click", function(){
        if (this.id === "basicLiteracy") {
          window.location.href = "basicliteracy.html";
        }
    });

    document.getElementById("healthandwellbeing").addEventListener("click", function(){
        if (this.id === "healthandwellbeing") {
          window.location.href = "healthandwellbeing.html";
        }
    });

    document.getElementById("scottishhistory").addEventListener("click", function(){
        if (this.id === "scottishhistory") {
          window.location.href = "scottishhistory.html";
        }
    });

    document.getElementById("socialawareness").addEventListener("click", function(){
        if (this.id === "socialawareness") {
          window.location.href = "socialawareness.html";
        }
    });
}

// var basic numeracy array of questions
var basicnumquestions = [
    ["Q1. What is 5 X 5", "25"],
    ["Q2. What is 20 sweets devided between 4 people", "5"],
    ["Q3. What number is greater 11 or 19", "19"],
    ["Q4. What is the largest number of these 0, 25, 15, 30", "30"],
    ["Q5. What shape has three sides", "triangle"],
 ];
// var basic literacy array of questions
 var basiclitequestions = [
    ["Q1. What is the first letter of the alphabet", "a"],
    ["Q2. How many letters are in the alphabet", "26"],
    ["Q3. Can you name a word that is a type of fruit and starts with the letter B", "banana"],
    ["Q4. What is the opposite of the word happy", "sad"],
    ["Q5. How do you spell the number 5", "five"],
 ]
//  var health and wellbeing array of questions
 var healthandwellquestions = [
  ["Q1. What should you do before crossing the street", "look both ways"],
  ["Q2. What is a way to be safe while riding a bike", "wear a helmet"],
  ["Q3. What food group do apples belong to", "fruits"],
  ["Q4. What fruit is yellow and shaped like a crescent moon", "banana"],
  ["Q5. What is the name of the activity that helps us stay fit and healthy", "exercise"],
 ]
//  var sottish history array of questions
 var scottishhisquestions = [
  ["Q1. What animal is the Kelpies landmark", "horses"],
  ["Q2. Who was the Scottish missionary to Africa", "david livingstone"],
  ["Q3. Who was Scotland's national poet", "robert burns"],
  ["Q4. Who was the famous Scottish architect who designed the Glasgow School of Art", "rennie mackintosh"],
  ["Q5. Who was the Scottish inventor who developed the first television", "john logie baird"],
 ]
//  var social awareness array of questions
 var socialawarequestions = [
  ["Q1. What should you do if a stranger approaches you", "walk away"],
  ["Q2. What should you do if you get lost in a public place", "find help"],
  ["Q3. What should you do if someone is bullying you or making you feel uncomfortable", "speak up"],
  ["Q4. What is bullying", "harmful behavior"],
  ["Q5. What is kindness", "positive behavior"],
 ]

//  questions function that generates all the questions from the different arrays and addes them on the right quiz pages
function questions(){
  var i = 0;
  // for that gets the questions from the basic numercy array
  for (i = 0; i<basicnumquestions.length; i++) {
    if(document.getElementById("basicnumq"+i))
    {
      document.getElementById("basicnumq"+i).innerHTML = basicnumquestions[i] [0];
    }
  }
  // for that gets the questions from the basic literacy array
  for (i = 0; i<basiclitequestions.length; i++) {
    if(document.getElementById("basicliteq"+i))
    {
      document.getElementById("basicliteq"+i).innerHTML = basiclitequestions[i] [0];
    }
  }
  // for that gets the questions from the health and wellbeing array
  for (i = 0; i<healthandwellquestions.length; i++) {
    if(document.getElementById("healthandwellq"+i))
    {
      document.getElementById("healthandwellq"+i).innerHTML = healthandwellquestions[i] [0];
    }
  }
  // for that gets the questions from the scottish history array
  for (i = 0; i<scottishhisquestions.length; i++) {
    if(document.getElementById("scottishhisq"+i))
    {
      document.getElementById("scottishhisq"+i).innerHTML = scottishhisquestions[i] [0];
    }
  }
  // for that gets the questions from the social awareness array
  for (i = 0; i<socialawarequestions.length; i++) {
    if(document.getElementById("socialawareq"+i))
    {
      document.getElementById("socialawareq"+i).innerHTML = socialawarequestions[i] [0];
    }
  }

}

// function that checks the users answers against the array answers for the basic numeracy questions
function checkNum(){
  // var that gets the user answer
  var useranswerinput = "";
  // var for the score
  var score = 0;
  // var for the total score
  var totalscore = 0;
  var i = 0;
  // for that gets the questions from the basic numeracy array
  for(i = 0; i<basicnumquestions.length; i++)
  {
    // if that checks the users answers for all the questions is see if the are correct or incorrect if correct they get a point for each question and get a correct feedback 
    if(useranswerinput + document.getElementById("basicnuma"+i).value == basicnumquestions[i] [1])
    {
      score++
      document.getElementById("feedbacknum"+i).innerHTML = "Correct";
    }
    // else that gives feedback to the user is there answers are incorrect
    else
    {
      document.getElementById("feedbacknum"+i).innerHTML = "Incorrect the correct answer is: " + basicnumquestions[i][1]
    }
  }
  // calculates the score with the total score
  totalscore += score;
  // displays the total score to the user
  document.getElementById("basicnumtotalscore").innerHTML = "Your score : " + totalscore;
  // if the total score is 3 and above then it displays a you passed and the text gets bigger
  if(totalscore > 2)
  {
    document.getElementById("basicnumgrade").innerHTML = "You have passed";
    document.getElementById("basicnumgrade").style.color = "black"
    document.getElementById("basicnumgrade").style.fontSize = "30px";
    document.getElementById("backtomenu").style.display = "inline"
    document.getElementById("basicnumsubmit").disabled = true;
  }
  // else the total score is 2 and below then it displays a you failed and the text gets bigger and turns red
  else
  {
    document.getElementById("basicnumgrade").innerHTML = "You have failed";
    document.getElementById("basicnumgrade").style.color = "red";
    document.getElementById("basicnumgrade").style.fontSize = "25px";
    document.getElementById("basicnumsubmit").disabled = true;
    document.getElementById("clearinputs").style.display = "inline";
    document.getElementById("takeanotherquiz").style.display = "inline";
    document.getElementById("clearinputs").addEventListener("click", function(){
      for (i = 0; i <basicnumquestions.length; i++) {
        document.getElementById("basicnuma"+i).value = "";
      }
      
      for (i = 0; i<basicnumquestions.length; i++) {
        document.getElementById("feedbacknum"+i).innerHTML = "";
      }
      document.getElementById("basicnumgrade").innerHTML = "";
      document.getElementById("basicnumtotalscore").innerHTML = "Your score : "
      document.getElementById("basicnumsubmit").disabled = false;
      document.getElementById("clearinputs").style.display = "none";
      document.getElementById("takeanotherquiz").style.display = "none";
    })
  }


}

// function that checks the users answers against the array answers for the basic literacy questions
function checkLite(){
  // var that gets the user answer
  var useranswerinput = "";
  // var for the score
  var score = 0;
  // var for the total score
  var totalscore = 0;
  var i = 0;
  // for that gets the questions from the basic literacy array
  for(i = 0; i<basiclitequestions.length; i++)
  {
    // if that checks the users answers for all the questions is see if the are correct or incorrect if correct they get a point for each question and get a correct feedback
    if(useranswerinput + document.getElementById("basiclitea"+i).value == basiclitequestions[i] [1])
    {
      score++
      document.getElementById("feedbacklite"+i).innerHTML = "Correct";
    }
    // else that gives feedback to the user is there answers are incorrect
    else
    {
      document.getElementById("feedbacklite"+i).innerHTML = "Incorrect the correct answer is: " + basiclitequestions[i][1]
    }
  }
  // calculates the score with the total score
  totalscore += score;
  // displays the total score to the user
  document.getElementById("basiclitetotalscore").innerHTML = "Your score : " + totalscore;
  // if the total score is 3 and above then it displays a you passed and the text gets bigger
  if(totalscore > 2)
  {
    document.getElementById("basiclitegrade").innerHTML = "You have passed";
    document.getElementById("basiclitegrade").style.fontSize = "30px";
  }
  // else the total score is 2 and below then it displays a you failed and the text gets bigger and turns red
  else
  {
    document.getElementById("basiclitegrade").innerHTML = "You have failed";
    document.getElementById("basiclitegrade").style.color = "red";
    document.getElementById("basiclitegrade").style.fontSize = "25px";
    document.getElementById("basiclitesubmit").disabled = true;
    document.getElementById("clearinputs").style.display = "inline";
    document.getElementById("takeanotherquiz").style.display = "inline";
    document.getElementById("clearinputs").addEventListener("click", function(){
      for (i = 0; i<basiclitequestions.length; i++) {
        document.getElementById("basiclitea"+i).value = "";
      }
      
      for (i = 0; i<basiclitequestions.length; i++) {
        document.getElementById("feedbacklite"+i).innerHTML = "";
      }
      document.getElementById("basiclitegrade").innerHTML = "";
      document.getElementById("basiclitetotalscore").innerHTML = "Your score : "
      document.getElementById("basiclitesubmit").disabled = false;
      document.getElementById("clearinputs").style.display = "none";
      document.getElementById("takeanotherquiz").style.display = "none";
    })

  }
}

// function that checks the users answers against the array answers for the health and wellbeing questions
function checkWell(){
  // var that gets the user answer
  var useranswerinput = "";
  // var for the score
  var score = 0;
  // var for the total score
  var totalscore = 0;
  var i = 0;
  // for that gets the questions from the health and wellbeing array
  for(i = 0; i<healthandwellquestions.length; i++)
  {
    // if that checks the users answers for all the questions is see if the are correct or incorrect if correct they get a point for each question and get a correct feedback
    if(useranswerinput + document.getElementById("healthandwella"+i).value == healthandwellquestions[i] [1])
    {
      score++
      document.getElementById("feedbackwell"+i).innerHTML = "Correct";
    }
    // else that gives feedback to the user is there answers are incorrect
    else
    {
      document.getElementById("feedbackwell"+i).innerHTML = "Incorrect the correct answer is: " + healthandwellquestions[i][1]
    }
  }
  // calculates the score with the total score
  totalscore += score;
  // displays the total score to the user
  document.getElementById("healthwelltotalscore").innerHTML = "Your score : " + totalscore;
  // if the total score is 3 and above then it displays a you passed and the text gets bigger
  if(totalscore > 2)
  {
    document.getElementById("healthwellgrade").innerHTML = "You have passed";
    document.getElementById("healthwellgrade").style.fontSize = "30px";
  }
  // else the total score is 2 and below then it displays a you failed and the text gets bigger and turns red
  else
  {
    document.getElementById("healthwellgrade").innerHTML = "You have failed";
    document.getElementById("healthwellgrade").style.color = "red";
    document.getElementById("healthwellgrade").style.fontSize = "25px";
    document.getElementById("healthandwellsubmit").disabled = true;
    document.getElementById("clearinputs").style.display = "inline";
    document.getElementById("takeanotherquiz").style.display = "inline";
    document.getElementById("clearinputs").addEventListener("click", function(){
      for (i = 0; i<healthandwellquestions.length; i++) {
        document.getElementById("healthandwella"+i).value = "";
      }
      
      for (i = 0; i<healthandwellquestions.length; i++) {
        document.getElementById("feedbackwell"+i).innerHTML = "";
      }
      document.getElementById("healthwellgrade").innerHTML = "";
      document.getElementById("healthwelltotalscore").innerHTML = "Your score : "
      document.getElementById("healthandwellsubmit").disabled = false;
      document.getElementById("clearinputs").style.display = "none";
      document.getElementById("takeanotherquiz").style.display = "none";
    })
  }
}

// function that checks the users answers against the array answers for the scottish history questions
function checkHis(){
  // var that gets the user answer
  var useranswerinput = "";
  // var for the score
  var score = 0;
  // var for the total score
  var totalscore = 0;
  var i = 0;
  // for that gets the questions from the scottish history array
  for(i = 0; i<scottishhisquestions.length; i++)
  {
    // if that checks the users answers for all the questions is see if the are correct or incorrect if correct they get a point for each question and get a correct feedback
    if(useranswerinput + document.getElementById("scottishhisa"+i).value == scottishhisquestions[i] [1])
    {
      score++
      document.getElementById("feedbackhis"+i).innerHTML = "Correct";
    }
    // else that gives feedback to the user is there answers are incorrect
    else
    {
      document.getElementById("feedbackhis"+i).innerHTML = "Incorrect the correct answer is: " + scottishhisquestions[i][1]
    }
  }
  // calculates the score with the total score
  totalscore += score;
  // displays the total score to the user
  document.getElementById("scottishhistotalscore").innerHTML = "Your score : " + totalscore;
  // if the total score is 3 and above then it displays a you passed and the text gets bigger
  if(totalscore > 2)
  {
    document.getElementById("scottishhisgrade").innerHTML = "You have passed";
    document.getElementById("scottishhisgrade").style.fontSize = "30px";
  }
  // else the total score is 2 and below then it displays a you failed and the text gets bigger and turns red
  else
  {
    document.getElementById("scottishhisgrade").innerHTML = "You have failed";
    document.getElementById("scottishhisgrade").style.color = "red";
    document.getElementById("scottishhisgrade").style.fontSize = "25px";
    document.getElementById("scottishhissubmit").disabled = true;
    document.getElementById("clearinputs").style.display = "inline";
    document.getElementById("takeanotherquiz").style.display = "inline";
    document.getElementById("clearinputs").addEventListener("click", function(){
      for (i = 0; i<scottishhisquestions.length; i++) {
        document.getElementById("scottishhisa"+i).value = "";
      }
      
      for (i = 0; i<scottishhisquestions.length; i++) {
        document.getElementById("feedbackhis"+i).innerHTML = "";
      }
      document.getElementById("scottishhisgrade").innerHTML = "";
      document.getElementById("scottishhistotalscore").innerHTML = "Your score : "
      document.getElementById("scottishhissubmit").disabled = false;
      document.getElementById("clearinputs").style.display = "none";
      document.getElementById("takeanotherquiz").style.display = "none";
    })
  }
}

// function that checks the users answers against the array answers for the social awareness questions
function checkAware(){
  // var that gets the user answer
  var useranswerinput = "";
  // var for the score
  var score = 0;
  // var for the total score
  var totalscore = 0;
  var i = 0;
  // for that gets the questions from the social awareness array
  for(i = 0; i<socialawarequestions.length; i++)
  {
    // if that checks the users answers for all the questions is see if the are correct or incorrect if correct they get a point for each question and get a correct feedback
    if(useranswerinput + document.getElementById("socialawarea"+i).value == socialawarequestions[i] [1])
    {
      score++
      document.getElementById("feedbackaware"+i).innerHTML = "Correct";
    }
    // else that gives feedback to the user is there answers are incorrect
    else
    {
      document.getElementById("feedbackaware"+i).innerHTML = "Incorrect the correct answer is: " + socialawarequestions[i][1]
    }
  }
  // calculates the score with the total score
  totalscore += score;
  // displays the total score to the user
  document.getElementById("socialawaretotalscore").innerHTML = "Your score : " + totalscore;
  // if the total score is 3 and above then it displays a you passed and the text gets bigger
  if(totalscore > 2)
  {
    document.getElementById("socialawaregrade").innerHTML = "You have passed";
    document.getElementById("socialawaregrade").style.fontSize = "30px";
  }
  // else the total score is 2 and below then it displays a you failed and the text gets bigger and turns red
  else
  {
    document.getElementById("socialawaregrade").innerHTML = "You have failed";
    document.getElementById("socialawaregrade").style.color = "red";
    document.getElementById("socialawaregrade").style.fontSize = "25px";
    document.getElementById("socialawaresubmit").disabled = true;
    document.getElementById("clearinputs").style.display = "inline";
    document.getElementById("takeanotherquiz").style.display = "inline";
    document.getElementById("clearinputs").addEventListener("click", function(){
      for (i = 0; i<socialawarequestions.length; i++) {
        document.getElementById("socialawarea"+i).value = "";
      }
      
      for (i = 0; i<socialawarequestions.length; i++) {
        document.getElementById("feedbackaware"+i).innerHTML = "";
      }
      document.getElementById("socialawaregrade").innerHTML = "";
      document.getElementById("socialawaretotalscore").innerHTML = "Your score : "
      document.getElementById("socialawaresubmit").disabled = false;
      document.getElementById("clearinputs").style.display = "none";
      document.getElementById("takeanotherquiz").style.display = "none";
    })
  }
}

// function that gets the current date and time and displays it to the user and updates the innerhtml if the minitue has changed
function dt() {
    // var that gets the current date and time
    var d = new Date();
    // const that shows the time on the id on the webpage
    const dateTimeElement = document.getElementById("dateTime");
  
    // check if minute has changed
    if (d.toLocaleTimeString() !== dt.prevTime) {
      dt.prevTime = d.toLocaleTimeString();
      dateTimeElement.innerHTML = d;
    }
    
  }
  setInterval(dt, 1000);