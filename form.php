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

$name = $email = $password = '';
$emailerror=$nameerror=$passworderror='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    // print_r($_POST);
    
    // $email=$_POST['email'];
    // $password=$_POST['password'];
    // echo "My name is $name email:$email password:$password";
    if(empty($_POST['name'])){
      $nameerror="Name Required";
    }else{
      $name=$_POST['name'];
      
    }
    if(empty($_POST['email'])){
      $emailerror="Email Required";
    }else{
      $email=$_POST['email'];
    }
    if(empty($_POST['password'])){
      $passworderror="Password Required";
    }else{
      $password=$_POST['password'];
    }
    

    if($nameerror==''&& $emailerror=='' && $passworderror==''){
      $conn=mysqli_connect('localhost', 'root', '', 'student_table');
      if(!$conn){
          die("connection failed: ".mysqli_connect_error());
      }
      else{
          
          $sql="INSERT INTO registration(name,email,password)values('$name', '$email', '$password')";
          $result=mysqli_query($conn, $sql);
          if($result){
              
              echo "data inserted in database";
            
          }
          else{
              die(mysqli_error($conn));
          }
      }
  }


}
?>
    
 <form action="form.php" method="post">

   <label for="name">Name</label><br>
  <input type="text" name="name" id=""><br>
  <span class="error"><?php echo "$nameerror"?></span></br>
  <label for="name" name="email">Email</label><br>
   <input type="text" name="email" id=""><br>
   <span class="error"><?php echo "$emailerror"?></span></br>
   <label for="name">Password</label><br>
   <input type="password" name="password"><br>
   <span class="error"><?php echo "$passworderror"?></span></br>
   
   
   <input type="submit" value="Register">

   
 </form>
</body>
</html>