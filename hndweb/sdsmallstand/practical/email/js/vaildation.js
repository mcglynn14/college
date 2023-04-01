function vaildate(){
    var check = document.getElementById("email").value;

    var regExpression = /^([a-zA-Z0-9\._-]+)@([a-zA-Z0-9])+.(.[a-z]+)?$/;

    if(regExpression.test(check))
    {
        document.getElementById("feedback").innerHTML = "Your email is: Vaild";
        return true;
    }
    else
    {
        document.getElementById("feedback").innerHTML = "Your email is: invaild"
        return false;
    }
}