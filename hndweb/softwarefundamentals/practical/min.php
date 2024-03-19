<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nums = [2, 3, 8, 33, 9, 15, 99, 89, 22, 10];

        $min = 100;

        foreach($nums as $number)
        {
            if($number < $min)
            {
                $min = $number;
            }
            echo $number. "<br>";
        }
        echo "The lowest number is " .$min;
    ?>
</body>
</html>