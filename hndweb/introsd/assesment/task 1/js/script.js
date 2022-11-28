// name: liam mcglynn 
// student id: 20117993
// class: HND web intro to software development 
// program: menu where you can create a username from your first name and last name and calculates and show a times table based on users input

// global varible to hold the string of who the user is
var me = "";

// function for the main menu that comes up that first asks who the person is and then welcomes the user with the name provided and then asks the user to enter a number for one of the options to either create a username, do calculate timestable or exit the program 
function menu(){

    // prompts the user to enter there name before letting to choose a option
    me = prompt("Who are you");

    // welcomes the user with the name they have provided
    alert("Welcome " + me);

    var choice = 0;

    // do loop prompts the user to enter a number from the options shown and then runs the option the user has chosen 
    do{
        choice = parseInt(prompt("Please enter a number from the menu below" + "\n" +  "Option 1: Create username" + "\n" + "option 2: timestable" + "\n" + "Option 3: Exit"));

        switch(choice){
            case 1:
                opt1()
                break;
            case 2:
                opt2()
                break;
            case 3:
                alert("Thanks for using the program");
        }
    }while (choice !=3)
}

// function for option 1 that tells the user that it is option 1 and then prompts the user to enter there full name that goes to the create user name function 
function opt1(){

    alert(me  + " This is option 1");

    var user = "";

    // prompts the user to enter there full name that then runs in the create name function
    user = prompt("Enter your full name");

    create_name(user)
}

// function that create a username from the full name that the user entered into option 1 function
    function create_name(user){

        

        var string1 = user.substr(0,1);

        var pos = user.indexOf(" ");

        var len = user.length;

        var string2 = user.substring(pos+1,len);

        var user = string1 + string2;

        // welcomes the user with the username it has created
        alert("Welcome " + user);


    }

// fuction that tell the user that it is option 2 and runs the times table function
function opt2(){
    alert(me  + " This is option 2");

    times_table()
    
}

// function that prompts the user to enter a number between 1 and 12 and displays the times table the user and entered
function times_table(){

    // prompts the user to enter a a number to display its times table
    user_input = parseInt(prompt("enter a number to display its times table"));

    var count = 1;

    var result = 0;

    var display = "";

    // for loop counts up by 1 upto 12 so it shows times tables up to 12
    for(count = 1; count <=12; count++)
    {
        // multiplys the count and user input to get the results of the times table
        result = count * user_input;

        // display the results of the times table that the user wants to see
        display += (count + " x " + user_input + " = " + result + '\n');
    }
    // displays times table in a alert
    alert(display);
}