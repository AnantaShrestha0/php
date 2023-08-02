<?php


$file=fopen("myFile.txt","w");
$text="Hello PHP!!!"."<br>";
fwrite($file,$text);
fclose($file);
echo "file written successfully";
?>