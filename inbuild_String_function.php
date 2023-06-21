<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IN-build string function</title>
</head>
<body>
    
<?php

$name="Ananta Shrestha";
$length=strlen($name);
echo "The length of $name is $length";
echo "The number of word in this sentance are ".str_word_count($name)."</br>";

$a=1;
$b=3;

echo "$a + $b = ".$a+$b."</br>";
echo "$a + $b = ".$a-$b."</br>";
echo "$a * $b = ".$a*$b."</br>";
echo "$a / $b = ".$a/$b."</br>";
echo "$a % $b = ".$a%$b."</br>";
echo "$a ** $b = ".$a**$b."</br>";

$a=$b;
$a+=$b;
$a-=$b;
$a/=$b;



?>
</body>
</html>