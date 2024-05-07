<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /**
        * This function sorts an array of speeds in ascending order using the selection sort algorithm.
        * It then prints the sorted speeds in the order of their magnitude.
        */
        function speedorder()
        {
            // Array of speeds
            $speeds = array(21.23, 23.45, 23.71, 22.22, 24.12, 21.23, 21.23, 21.45);

            // Get the size of the array
            $s = count($speeds);

            // Selection sort algorithm
            for ($i = 0; $i < $s - 1; $i++) {
                $minIndex = $i;
                for ($j = $i + 1; $j < $s; $j++) {
                    // Find the index of the minimum speed
                    if ($speeds[$j] < $speeds[$minIndex])
                    {
                        $minIndex = $j;
                    }
                }
                
                // Swap the current speed with the minimum speed
                $temp = $speeds[$i];
                $speeds[$i] = $speeds[$minIndex];
                $speeds[$minIndex] = $temp;
            }
            
            // Print the speeds in the order of their magnitude
            
            echo "Times in order of speed : <br>";
            
            foreach ($speeds as $speed)
            {
                echo $speed, "<br>";
            }
        }
        
        // Call the function to sort and print the speeds
        speedorder();
    ?>
</body>
</html>