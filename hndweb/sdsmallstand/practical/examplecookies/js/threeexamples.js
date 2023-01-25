function welcome(){
    document.cookie = "name = liam";

    document.cookie = "name2 = freddy";

    document.getElementById("hello").innerHTML = document.cookie;

}
function campus(){
    var location = document.getElementById("name").value;

    document.cookie = "campus = " + location;
}

function mouse(){
    document.cookie = "Cookie = monster";
}