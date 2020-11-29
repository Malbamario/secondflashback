<?php

$name = "Mario Alfredo Bawu";
echo $name."<br>";
var_dump($name);
echo "<br>";
echo "<br>";


// operator

    //aritmatika

    $calculation = (10 + 5 - 6) * 10 / 5  + (14%3);
    $calculation2 = (10.0 + 5 - 6) * 10 / 5  + (14%3);
    echo $calculation."<br>";
    var_dump($calculation);
    echo "<br>";
    echo $calculation2."<br>";
    var_dump($calculation2);
    echo "<br><br>";

    //assignment

    $samadengan = 1;
    echo $samadengan." += 1 -> ";
    $samadengan += 1;
    echo $samadengan." -= 1 -> ";
    $samadengan -= 1;
    echo $samadengan." *= 2 -> ";
    $samadengan *= 2;
    echo $samadengan." /= 2 -> ";
    $samadengan /= 2;
    echo $samadengan." %= 3 -> ";
    $samadengan %= 3;
    echo $samadengan." .=  33 -> ";
    $samadengan .= " 33";
    echo $samadengan;
    echo "<br><br>";

    //perbandingan

    $compare1 = 10;
    $compare2 = 20;
    echo $compare1." & ".$compare2."<br>";
    $compareResult = $compare1 < $compare2;
    echo "< ";
    var_dump($compareResult);
    echo "<br>";
    $compareResult = $compare1 > $compare2;
    echo "> ";
    var_dump($compareResult);
    echo "<br>";
    $compareResult = $compare1 <= $compare2;
    echo "<= ";
    var_dump($compareResult);
    echo "<br>";
    $compareResult = $compare1 >= $compare2;
    echo ">= ";
    var_dump($compareResult);
    echo "<br>";
    $compareResult = $compare1 == $compare2;
    echo "== ";
    var_dump($compareResult);
    echo "<br>";
    $compareResult = $compare1 != $compare2;
    echo "!= ";
    var_dump($compareResult);
    echo "<br><br>";

    // identitas

    $compare3 = 30;
    $compare4 = "30";
    var_dump($compare3);
    echo " & ";
    var_dump($compare4);
    echo "<br>";
    $compareResult = $compare3 == $compare4;
    echo "== ";
    var_dump($compareResult);
    echo "<br>";
    $compareResult = $compare3 != $compare4;
    echo "!= ";
    var_dump($compareResult);
    echo "<br>";
    $compareResult = $compare3 === $compare4;
    echo "=== ";
    var_dump($compareResult);
    echo "<br>";
    $compareResult = $compare3 !== $compare4;
    echo "!== ";
    var_dump($compareResult);
    echo "<br><br>";

    // logika

    $logic1 = ($compare1 == $compare1) && true;
    var_dump($logic1);
    echo "<br>";
    $logic2 = ($compare1 == $compare2) && true;
    var_dump($logic2);
    echo "<br>";
    $logic3 = ($compare1 != $compare1) && false;
    var_dump($logic3);
    echo "<br>";
    $logic4 = true || ($compare3 != $compare1);
    var_dump($logic4);
    echo "<br>";
    $logic5 = false || ($compare3 == $compare3);
    var_dump($logic5);
    echo "<br>";
    $logic6 = false || ($compare4 === $compare3);
    var_dump($logic6);
    echo "<br>";
    $logic7 = !$logic1;
    var_dump($logic7);
    echo "<br>";
    $logic8 = !$logic6;
    var_dump($logic8);
    echo "<br><br>";