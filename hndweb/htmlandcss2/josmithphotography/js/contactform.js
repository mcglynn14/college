function submitForm(){
    var name = document.getElementById("name").value;

    var email = document.getElementById("email").value;

    var message = document.getElementById("message").value;

    console.log("name: " + name);
    console.log("email: " + email);
    console.log("message: " + message);

    document.getElementById("contactForm").reset();
}