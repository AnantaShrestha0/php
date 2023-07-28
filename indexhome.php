<?php
$userEmail=$_COOKIE['userEmail'];
?>

<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

echo $_SESSION['email'];
echo $_SESSION['password'];

?>
    
    <h1>Welcome:<?php echo $_COOKIE['userEmail']; ?></h1>

    <a href="logout.php">lOG Out</a>
    
</body>
</html>