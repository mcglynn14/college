var Username = "Spyro";

var Password = "GCCnuggets";

var Userinput = "";

var Passinput = "";

attempt = 0;

var set = 0;

var record = [];

var option;

function login(){
    
    var Userinput = document.getElementById("userinput").value;
    var Passinput = document.getElementById("passinput").value;

    attempt++;

            if(Userinput == Username && Passinput == Password)
            {
                document.getElementById("feedback").innerHTML = "Access Granted";
                changePage();
            }
            else{
                document.getElementById("feedback").innerHTML = "Access Denied try again";
                document.getElementById("attempts").innerHTML = "Attempts: " + attempt;
            }
            if(attempt == 3)
            {
                document.getElementById("feedback").innerHTML = "You have been locked out";
                document.getElementById("login").disabled = true;
            }

}

function changePage() {
    
    window.location.href = "search.html";

    setTimeout(changePage, 60000);
}

function welcome(){
    document.cookie = Username;

    document.getElementById("welcome").innerHTML = "Welcome: " + document.cookie;
}

class Todo{
    constructor(gametitle, genre, gameage, price){
        this.gametitle = gametitle;
        this.genre = genre;
        this.gameage = gameage;
        this.price = price;
    }
}

function data(){

    var getgameTitle = document.getElementById("gametitle").value;
    var getGenre = document.getElementById("genre").value;
    var getgameAge = document.getElementById("gameage").value;
    var getPrice = document.getElementById("price").value;

    var rec = new Todo(getgameTitle, getGenre, getgameAge, getPrice);

    record.push(rec)


}
function search(){
    option = parseInt(document.getElementById("find").value);

    document.getElementById("data").innerHTML = "Game title: " + record[option].gametitle + "<br>" + "Genre: " + record[option].genre + "<br>" + "Game age: " + record[option].gameage + "<br>" + "Price: " + record[option].price;
}
  