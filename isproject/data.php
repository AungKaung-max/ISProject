<?php
include './connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['email'];
    $password = $_POST['password'];

    $sql="INSERT INTO user (name,password,created_date)
        VALUES ('$name','$password',now())";
    }
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="./styles.css">
</head>
<body>
  <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
    <?php  if ($conn->query($sql) === TRUE): ?>
    <strong>You Have Been Hacked!</strong> 
    <?php endif; ?>
  </div>
</body>
</html>
    

