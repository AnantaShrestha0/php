<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Hello world</h1> </br>";

    //compair operator 
    $Hariage="18";
    $Ramage="18";
    if($Hariage===$Ramage){
        echo "They have equal age.</br>";
    }else{
        echo "They have different age.</br>";
    }

    $a=45;
    if($a%2==0){
        echo "Even";
    }else{
        echo "Odd";
    }

    $b=2;

    // switch($b){
    //     case 1:
    //         echo "Namaste";
    //         break;
    //         case 2:
    //             echo "Good Morning";
    //             break;
    //             case 3:
    //                 echo "Bye"
    //                 break;

    //                 default:
    //                 echo "mm";
    //                 break;

    // }

    $counter=1;
    while($counter<=10){
        echo "hello world!</br>";
        $counter++;
    }


    $tableData=
    [
        ['Johnny','johndoe@gmail.com'],
        ['Mia','Mia@gmail.com'],
        ['Danial','Denial@gmail.com']
  

    ];
    echo "<table>";
    echo "<tr><th>NAME</th><th>EMAIL</th>";

    //LOOP THROUGH the table data array
    $i=0;
    while($i<count($tableData)){
        echo "<tr>";
 
        $j=0;
        while($j<count($tableData[$i])){
            echo "<td>".$tableData[$i][$j]."</td>";
            $j++;
        }
        echo "</tr>";
        $i++;

    }

    $i=0;

    ?>
</body>
</html>