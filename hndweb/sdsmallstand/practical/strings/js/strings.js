// // find script
// var str = "where does the word blah appear";
// var pos = str.indexOf("word");

// document.write(pos);

// // length script
// var str = "I love Monday and Wednesday mornings";
// var length = str.length;

// document.write(length);

// // firstlast script
// var text = "I cannot think of a sentance cannot to write!";
// var firstPosition = text.indexOf("cannot");

// document.write(firstPosition);

// document.write("<br>");

// var lastPosition = text.lastIndexOf("cannot");

// document.write(lastPosition);

// search script
var str = "Javascript is better than Java";

var low = str.toLowerCase();

var search = "JaVa";

var lower = search.toLowerCase();

document.write("Low string is: " + lower);

document.write("<br>");

document.write("Search term is " + lower);

var pos = low.indexOf(lower);

document.write("<br>");

document.write(pos);