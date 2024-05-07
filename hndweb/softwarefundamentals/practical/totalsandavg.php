<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function genNumbers(){
            $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

            echo "Below is a print out of the array ", "<br>";

            foreach($numbers as $num){
                echo $num, "<br>";
            }

            total($numbers);

        }

        function total($numbers){
            $tot=0;

            foreach($numbers as $nums){
                $tot += $nums;
            }

            echo "The total of the array is ", $tot, "<br>";

            avg($numbers, $tot);
        }

        function avg($numbers, $tot){
            $aver = 0;

            $aver = $tot /count($numbers);

            echo "The average of the array is ", $aver, "<br>";
        }

        genNumbers();

        total();

        avg();
    ?>
</body>
</html>