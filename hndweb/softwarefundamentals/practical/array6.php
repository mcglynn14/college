<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = ["1", "2", "3", "4", "5", "6"];

        $len = count($num);

        for ($i = 0; $i < $len; $i++){
            echo "item at postion " .$i. " is " .$num[$i]. "<br>";
        }
    ?>
</body>
</html>