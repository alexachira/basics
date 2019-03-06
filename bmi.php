<?php
$weight =85;
$height =1.8;

$bmi = $weight /($height * $height);
//conditional statements
if ($bmi <15)
{
  echo "very serverely underweight";
}
elseif ($bmi>=15 and $bmi<16)
{
    echo "serverely underweight";
}
elseif ($bmi>=18.5 and $bmi<25)
{
    echo "normal(healthy weight)";
}
elseif ($bmi>=25 and $bmi<30)
{
    echo "overweight";
}
elseif ($bmi>=30 and $bmi<35)
{
    echo "obese classI (moderately obese)";
}
elseif ($bmi>=35 and $bmi<40)
{
    echo "obese classII(serverely obese";
}
elseif ($bmi>=45 and $bmi<50)
{
    echo "obese classIII(very serverely obese";
}
elseif ($bmi>=50 and $bmi<55)
{
    echo "obese classIV(morbidly obese)";
}
elseif ($bmi>=55 and $bmi<60)
{
    echo "obese classV(super obese)";
}
elseif ($bmi>60)
{
    echo "obese classVI()";
}