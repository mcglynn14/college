<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // The function storageSize that prints storage sizes and calls the maxsize function
        function storageSize(){
            // Array of storage sizes 
            $size = [232, 241, 324, 216, 221, 298, 334, 212, 235, 324, 264, 141];
            // foreach loop to print each size in the array
            foreach($size as $sizes){
                echo $sizes . "<br>"; // Print each size in the array and break line
            }
            // Calls the maxsize function to find and print the maximum size of the size array
            maxsize($size);
        }
        
        // The function maxsize to find the maximum size in the size array
        function maxsize($sizes){
            $max = $sizes[0]; // The first element as the maximum size
            
            // for loop through the size array to find the maximum size
            for($i = 1; $i < count($sizes); $i++){
                // If loop to check if the maximum size is less than the current size in the size array
                if($max < $sizes[$i]){
                    // If true, the maximum size is updated to the current size in the size array
                    $max = $sizes[$i];
                }
            }
            // Print the maximum size found in the size array
            echo ("The largest size in the array is " .$max);
        }
        // Call the storageSize function to execute the code
        storageSize();
  
    ?>
</body>
</html>