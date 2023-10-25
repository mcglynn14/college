<?php
    function calculateArea($length, $width){
        $area = $length * $width;
        return $area;
    }
    $result = calculateArea(3, 10);
    // $result = calculateArea(€, 6);
    echo "the area is:" .$result
?>