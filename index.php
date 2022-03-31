<?php

echo "<H2>Assignment 03</H2>";
/*
======================
Question 01:
======================
*/ 

$subject_A = 75 ;
$subject_B = 80;
$subject_C = 65;
$subject_D = 90;

$total_mark = $subject_A+$subject_B+$subject_C+$subject_D;
echo $total_mark /4;
$avg_mark =77.5;

echo "<br>";

$mark = $avg_mark;

if($mark <= 32){
    echo "F Grade"; 
}elseif($mark <= 39){
    echo "Result D grade";
}elseif($mark <= 49){
    echo "Result C grade";
}elseif($mark <= 59){
    echo "Result B grade";
}elseif($mark <= 69){
    echo "Result A- grade";
}elseif($mark <= 79){
    echo "Result A grade";
}elseif($mark <= 100 ){
    echo "Result A+ grade";
}elseif($mark > 100){
    echo "Result Invalid";
}

/*
======================
Question 02:
======================
*/ 
echo "<br>";
echo "<br>";

$bike = "Headlight";

switch($bike){
    case" start";
    echo " your bike takes a start";
    break;

    case "stop";
    echo "your bike takes a stop";
    break;

    case "break";
    echo "your bike take break ";
    break;

    case "gear";
    echo "your bike move faster and faster";
    break;

    case "signal";
    echo "your bike shows a signal light.";
    break;

    case "Headlight";
    echo "your bike’s headlight will start.";
    break; 
}   

?>