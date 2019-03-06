<?php
//arrays
//indexed,associative
$weights =[07,03,73.44,41,54,24,97,38.45,43,28,19];
$names =["juma","jack","musa","mary","tommy","vicky","miry"];
//function



//print values
echo  $weights[5];
echo "<br>";
echo $names[2];//second name
echo "<br>";
foreach ($names as $monkey);
{
    echo  strtoupper($monkey);
    echo  "<hr>";

}


//assoc array
$person =["names"=>"juma","gender"=>"male","age=>39"];
    echo "<h2>Associative Arrays</h2>";
    echo $person["names"];
echo "<br>";

echo  sizeof($weights);//count the # of items in an array
echo  "<hr>";
echo  array_sum($weights);
//sort
sort($weights);
var_dump($weights);

array_push($names,"peter");
var_dump($names);
echo  "<hr>";
array_pop($names);
var_dump($names);

