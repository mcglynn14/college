var set = 0;
var record = [];
var option;

class Todo{
    constructor(student, course, dob, email){
        this.student = student;
        this.course = course;
        this.dob = dob;
        this.email = email;
    }
}

function build(){
    var getStudent = document.getElementById("student").value;
    var getCourse = document.getElementById("course").value;
    var getDoB = document.getElementById("dob").value;
    var getEmail = document.getElementById("email").value;

    var rec = new Todo(getStudent, getCourse, getDoB, getEmail);

    record.push(rec);

    // document.getElementById("student").value="";
    // document.getElementById("course").value="";
    // document.getElementById("dob").value="";
    // document.getElementById("email").value="";
}

function choice(){
    option = parseInt(document.getElementById("find").value);

    document.getElementById("results").innerHTML = "Student No: " + record[option].student + "<br>" + "Course: " + record[option].course + "<br>" + "DOB: " + record[option].dob + "<br>" + "Email: " + record[option].email;
}