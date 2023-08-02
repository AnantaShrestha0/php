<?php


$file=fopen("myFile.txt","r") or die("Unable to open file!");
echo fgetc($file);
fclose($file);
echo "<br>";

$file=fopen("myFile.txt","r") or die("Unable to open file!");
echo fgets($file);
fclose($file);
echo "<br>";

$file=fopen("myFile.txt","r") or die("Unable to open file!");
while(!feof($file)){
    echo fgets($file)."<br>";
}

fclose($file);

?>