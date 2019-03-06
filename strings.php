<?php

$sentence ="the quick brown fox jumped over a lazy dog";
//functions
//uppercase
echo  strtoupper($sentence);//call a function
echo "<hr>";
echo $sentence;
echo "<hr>";
echo str_word_count($sentence);//argument
echo "<hr>";
echo strlen($sentence);
echo "<hr>";
echo str_replace("dog","cow",$sentence);
echo "<hr>";
echo str_ireplace("dog","cow",$sentence);
echo "<hr>";

$password="pro254";
$scrambled =md5($password);
echo $scrambled;
$scrambled2 = sha1($password);

echo "<hr>";
echo $scrambled2;
echo "<hr>";
echo crypt($password,"rhrughthghtrtgrrdwe3w");

$name ="mary jay";
echo "<hr>";
echo ucwords($name);

echo "<hr>";
$number= 100.27;
echo sqrt($number);

echo "<hr>";
echo pow($number,1.4);

$x =63.755484;
echo "<hr>";
echo round($x,3);
echo "<hr>";
echo floor($x);//down
echo "<hr>";
echo ceil($x);//up
echo "<hr>";
$rad =deg2rad(45);
echo sin($rad);
