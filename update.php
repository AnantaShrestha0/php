


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .error{
        color:red;
\      }
    </style>
</head>
<body>

<?php

include 'connect.php';
$name = $email = $password = '';
$emailerror=$nameerror=$passworderror='';


if(isset($_GET['id'])){
    $sn=$_GET['id'];

    $sql="SELECT * FROM registration WHERE SN=$sn";
    $result=mysqli_query($con, $sql);
    if($result){

      if(mysqli_num_rows($result)>0){

        while($row=mysqli_fetch_assoc($result)){
            $id=$row['SN'];
            $name=$row['name'];
            $email=$row['email'];
            $password=$row['password'];
           
        }
    }
    
      
    }
    else{
        die(mysqli_error($con));
    }

}




if($_SERVER['REQUEST_METHOD']=='POST'){
    // print_r($_POST);

    // print_r($_GET);
    
   $id=$_POST['id'];
    
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

        $sql="UPDATE registration SET name='$name',email='$email',password='$password' WHERE SN=$id";
          $result=mysqli_query($conn, $sql);
          if($result){
              echo "data updated in database";
              header('location:userlist.php');
          }
          else{
              die(mysqli_error($conn));
          }
      }
  }

}

?>

    
 <form action="update.php" method="post">

   <label for="name">Name</label><br>
  <input type="text" name="name" id="" value="<?php echo $name ?>"><br>
  <span class="error"><?php echo "$nameerror"?></span></br>
  <label for="name" name="email">Email</label><br>
   <input type="text" name="email" id="" value="<?php echo $email ?>"><br>
   <span class="error"><?php echo "$emailerror"?></span></br>
   <label for="name">Password</label><br>
   <input type="password" name="password" value="<?php echo $password ?>"><br>
   <span class="error"><?php echo "$passworderror"?></span></br>
  <input type="hidden" name="id" value="<?php echo $id?>">
   
   <input type="submit" value="Register">

   
 </form>
</body>
</html>