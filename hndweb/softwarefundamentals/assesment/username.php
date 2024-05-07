<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <!-- Label and input field for the foreName (first name) -->
    <label for="foreName">First Name</label>
    <input type="text" name="foreName">

    <!-- Label and input field for the surname -->
    <label for="surname">Surname</label>
    <input type="text" name="surname">

    <!-- Submit button to submit the form -->
    <input type="submit">
</form>

<?php
// Define a function to get user input
function getuserInput(){
    // Retrieve the value of the "foreName" input field from the form
    $foreName = $_POST["foreName"];
    
    // Retrieve the value of the "surname" input field from the form
    $surname = $_POST["surname"];

    // Call the create_Username function with the user input
    create_Username($foreName, $surname);
}

// Define a function to create a username
function create_Username($foreName, $surname){
    // Get the first character of the forename
    $initial = $foreName[0]; 

    // Concatenate the initial with the surname to create the username
    $username = $initial . $surname; 

    // Display the username
    echo "username: " . $username;
}

// Check if the form has been submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Call the getuserInput function to process the form data
    getuserInput();
}
?>

</body>
</html>


