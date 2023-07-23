<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color:red;
        }
        </style>
</head>
<body>
    <?php
    
     $username=$email=$password="";
     $username_error=$email_error=$password_error="";

     if($_SERVER['REQUEST_METHOD']=="POST"){

        if(empty($_POST['username'])){
            $username_error="Enter your username";
        }else{
            $username=$_POST['username'];
        }


        if(empty($_POST['email'])){
            $email_error="Enter your email";
        }else{
            $email=$_POST['email'];
        }


        if(empty($_POST['password'])){
            $password_error="Enter your password";
        }else{
            $password=$_POST['password'];
        }

        if($username_error=="" && $email_error=="" && $password_error==""){

            $con=mysqli_connect('localhost','root','','student_table');
            if(!$con){
                die("No connection: ".mysqli_connect_error());
            }else{
                $sql="INSERT INTO registration(name,email,password)values('$username','$email','$password')";

                $result=mysqli_query($con,$sql);
                if($result){
                    echo "Data inserted into database";
                }else{
                    die(mysqli_error($con));
                }
            }


        }


     }

    ?>

    <form action="formm.php" method="post">
      
    <label for="username">Username</label><br>
    <input type="text" name="username"><br>
    <span class="error"><?php echo "$username_error"?></span><br>
    <label for="email">Email</label><br>
    <input type="email" name="email"><br>
    <span class="error"><?php echo "$email_error"?></span><br>
    <label for="password">Password</label><br>
    <input type="password" name="password"><br>
    <span class="error"><?php echo "$password_error"?></span><br>
    <input type="submit" value="submit">

    </form>




</body>
</html>