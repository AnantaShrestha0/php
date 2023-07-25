<?php

$strvalue="This is my first cookie";
setcookie("mycookie",$strvalue);
echo "Cokkie set <br>";
?>

<?php
foreach($_COOKIE as $key=>$val){
    echo $key."=>".$val."</br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<table border="1">
<thead>
    <tr>
        <th>
            id
        </th>
       <th>
        name
       </th>
       <th>
        email
       </th>
       <th>
        password
       </th>

       <th>
        Action
       </th>
    </tr>
</thead>

<tbody>
    <?php

    include 'connect.php';

    $sql="select * from registration";
    $result=mysqli_query($con,$sql);

    if(mysqli_num_rows($result)>0){

        while($row=mysqli_fetch_assoc($result)){
            $id=$row['SN'];
            $name=$row['name'];
            $email=$row['email'];
            $password=$row['password'];
            echo "<tr>
             <td>
            $id
             </td>
             <td>
             $name
              </td>
              <td>
              $email
               </td>
               <td>
               $password
                </td>

                
            <td>
            <a href='update.php?id=$id'><button>Update</button></a>
            <a href='delete.php?id=$id'><button>Delete</button></a>
            </td>
            </tr>

            
            ";
        }
    }

    ?>
</tbody>

</table>
</body>
</html>