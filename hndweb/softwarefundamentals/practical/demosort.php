<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function bubbleSort($numbers){
        $n = count($numbers);

        // iterate through the number of the elements in the array

        for($i = 0; $i < $n - 1; $i++)
        {
            // lieate through the unsorted parts of the array

            for($j = 0; $j < $n - $i - 1; $j++)
            {
                // compare adjacent elsements and swap if necessary

                if($numbers[$j] > $numbers[$j + 1])
                {
                    $temp = $numbers[$j];
                    $numbers[$j] = $numbers[$j + 1 ];
                    $numbers[$j + 1] = $temp;
                }
            }
        }

        // print sorted array

        echo "Sorted array Using bubble sort: <br>";

        foreach($numbers as $nums)
        {
            echo $nums, "<br>";
        }
    }

    function selectionSort($numbers){
        $n = count($numbers);

        // iterate through the array for each pass

        for($i = 0; $i < $n - 1; $i++)
        {

            $minIndex = $i;
            // find the index on the minium element in the unsorted part of the array

            for($j = $i + 1; $j < $n; $j++)
            {
                
                if($numbers[$j] < $numbers[$minIndex])
                {
                    $minIndex = $j;
                }
            }
            $temp = $numbers[$i];
            $numbers[$i] = $numbers[$minIndex];
            $numbers[$minIndex] = $temp;
        }

        echo "Sorted array - selection sort: <br>";

        foreach($numbers as $nums)
        {
            echo $nums, "<br>";
        }
    }

    $numbers = array(5, 2, 9, 3, 7);

    foreach($numbers as $nums)
        {
            echo $nums, "<br>";
        }

        bubbleSort($numbers);

        selectionSort($numbers);
    ?>
</body>
</html>