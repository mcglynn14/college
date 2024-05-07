<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // Define a function named "memory" that displays the memory sizes
        function memory(){
            // Create an array of memory values
            $memory = array(232,241,324,216,221,298,334,212,235,324,264,141);

            // Print a message indicating that the array will be displayed
            echo "Below is a print out of the array ", "<br>";

            // Iterate over each element in the memory array and display it
            foreach($memory as $mem){
                echo $mem, "<br>";
            }

            // Call the "memoryused" function and pass the memory array as an argument
            memoryused($memory);

            // Call the "files" function and pass the memory array as an argument
            files($memory);
        }

        // Define a function named "memoryused" that calculates and displays the total memory used
        function memoryused($memory){
            // Initialize a variable to store the total memory used
            $total = 0;

            // Iterate over each element in the memory array and add it to the total
            foreach($memory as $memoryused){
                $total += $memoryused;
            }

            // Print the total memory used
            echo "The total of the memory used is ", $total, "MB", "<br>";

            // Call the "avg" function and pass the memory array and total memory used as arguments
            avg($memory, $total);
        }

        // Define a function named "avg" that calculates and displays the average memory used
        function avg($memory, $total){
            // Initialize a variable to store the average memory used
            $average = 0;

            // Calculate the average by dividing the total memory used by the number of elements in the memory array
            $average = $total / count($memory);

            // Print the average memory used
            echo "The average of the memory used is ", $average,"MB", "<br>";
        }

        // Define a function named "files" that calculates and displays the number of files in the memory array
        function files($memory){
            // Count the number of elements in the memory array
            $files = count($memory);

            // Print the number of files
            echo "The number of files in the array is ", $files, "<br>";
        }

        // Call the "memory" function to start the calculations and display the results
        memory();

        // Call the "memoryused" function without passing any arguments
        memoryused();
        
        // Call the "avg" function without passing any arguments
        avg();

        // Call the "files" function without passing any arguments
        files();

    ?>
</body>
</html>