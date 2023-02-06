function setCookie(cname, cvalue){
    cvalue = document.getElementById("name").value;

    document.cookie = cname + " = " + cvalue;

    window.location.href = 'next.html';
}

function getCookie(cname){
    var name = cname + " = ";

    var decodedCookie = decodeURIComponent(document.cookie);

    var ca = decodedCookie.split(';');

    for(var i = 0; i <ca.length; i++){
        var c = ca[i];

        c = c.trim();

        if(c.indexOf(name)== 0){
            return c.substring(name.length, c.length)
        }
    }
    return "Cookie not found";
}

function Dt(){
    const d = new Date("2023-02-01");

    document.getElementById("dt").innerHTML = d;
}

function checkCookie(){
    document.getElementById("display").innerHTML = "Today is: " + getCookie("name").toUpperCase();
}