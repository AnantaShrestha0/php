<?php
$filename="file1.txt";
$fh=fopen($filename,"a+");


if($fh){
    $content=fread($fh,filesize($filename));
    echo "Current content : ".$content."<br>";
    $newContent="This is new content that will be append to the end2";
    fwrite($fh,$newContent);
    fseek($fh,0);
   
    $uploadContent=fread($fh,filesize($filename));
    echo "updated content : ".$uploadContent;
    fclose($fh);
}else{
    echo "Unable to open the file";
}


?>