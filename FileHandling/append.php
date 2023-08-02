<?php

$fp=fopen("file1.txt","a");
fwrite($fp,"This is additional text.");
fwrite($fp,"appending data");
fclose($fp);
echo "File appended successfully";

?>