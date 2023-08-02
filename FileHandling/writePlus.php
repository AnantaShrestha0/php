<?php


$fp=fopen("file1.txt","w+");
if($fp){
    fwrite($fp,"This is content to write into the file.");
    fseek($fp,0);//Move the file pointer to the beginning of the file.
    echo fgets($fp);//Read and output the first line of the file.
    fclose($fp);
}else{
    echo "Unable to open the file";
}


?>