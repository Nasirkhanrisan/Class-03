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

// $mark = $avg_mark;

// if($mark <= 32){
//     echo "F Grade"; 
// }elseif($mark <= 39){
//     echo "Result D grade";
// }elseif($mark <= 49){
//     echo "Result C grade";
// }elseif($mark <= 59){
//     echo "Result B grade";
// }elseif($mark <= 69){
//     echo "Result A- grade";
// }elseif($mark <= 79){
//     echo "Result A grade";
// }elseif($mark <= 100 ){
//     echo "Result A+ grade";
// }elseif($mark > 100){
//     echo "Result Invalid";
// }

$mark    = $avg_mark;
    if($mark < 32  && $mark <= 32){
        echo "F Grade";
    }
    elseif($mark >=33 && $mark <=39){
        echo "D Grade";
   }
   elseif($mark >=40 && $mark <=49){
        echo "C Grade";
   }
   elseif($mark >=50 && $mark <=59){
        echo "B Grade";
   }
   elseif($mark >=60 && $mark <=69){
        echo "A- Grade";
   }elseif($mark >=70 && $mark <=79){
    echo "A Grade";
   }elseif($mark >=80 && $mark <=100){
    echo "Golden A Grade";
   }else{
       echo "Invalid Number";
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

echo "<br>";
echo "<br>";

$bangla = 72;
$english = 82;
$math = 93;
$physics = 65;
$total_marks = $bangla = 72+ $english+$math+$physics;
$average_mark = $total_marks /4; 

echo "Average Mark: $average_mark";

echo "<br>";
$marks =  $average_mark;

if( $marks <= 32 ){
    echo "Result :F Grade";
}elseif( ($marks >= 33) && ($marks <= 39) ){
    echo "Result :D Grade";
}elseif( ($marks >= 40) && ($marks <= 49) ){
    echo "Result :C Grade";
}elseif( ($marks >= 50) && ($marks <= 59) ){
    echo "Result :B Grade";
}elseif( ($marks >= 60) && ($marks <= 69) ){
    echo "Result :A- Grade";
}elseif( ($marks >= 70) && ($marks <= 79) ){
    echo "Result :A Grade";
}elseif( ($marks >= 80) && ($marks <= 100) ){
    echo "Result :C Grade";
}else{
   echo "Invalid Number";
}

?>