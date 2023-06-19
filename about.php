<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>koko</h1>
    <?php
    $name="Ananta Kumar Shrestha";

    echo "<h1>".$name."</h1><br>";
    echo "Anisha Khanal";
    echo "<h3>My name is {$name}</h3>";
    echo "<h1>My name is $name</h1>";

    $txt="Hello World!";  //String
    $x=5;   //integer
    $y=4;   //float
    $a_bool=true;  //boolean

    echo "<h1>$txt $x $y $a_bool</h1>";

    $statements=["Ram","Hari","Gopal"];
    $emp=null;


    for($i=0;$i<5;$i++){
        echo $name."</br>";
    }
    ?>
</body>
</html>