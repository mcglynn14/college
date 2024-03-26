<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $names = ["tom", "Jerry", "butch", "spike"];

        $len = count($names);

        for ($i = 0; $i < $len; $i++){
            echo "item at postion " .$i. " is " .$names[$i]. "<br>";
        }
        echo $names[2];
    ?>
</body>
</html>