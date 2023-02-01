const person = {
    name:{n1:"Gerry", n2:"David"},
    lastName:{ln1:"Shevlin", ln2:"Stewart"},
    age:{a1:102, a2:21},
    show:function(){
        return this.name.n1 + " " + this.lastName.ln1 + " " + this.age.a1;
    }
}