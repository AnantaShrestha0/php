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


    
 <form action="up.php" method="post">

   <label for="name">Name</label><br>
  <input type="text" name="name" id=""><br>
  <span class="error"><?php echo "$nameerror"?></span></br>
  <label for="name" name="email">Email</label><br>
   <input type="text" name="email" id=""><br>
   <span class="error"><?php echo "$emailerror"?></span></br>
   <label for="name">Password</label><br>
   <input type="password" name="password"><br>
   <span class="error"><?php echo "$passworderror"?></span></br>
   <!-- <input type="radio" value="" name="" id=""> -->
   <input type="hidden" name="id">
   
   <input type="submit" value="Register">

   
 </form>
</body>
</html>