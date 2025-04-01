<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>donuts-site</title>
</head>
<body>
  
<?php session_start(); ?>
<?php
$name=$address=$login=$password='';
 if(isset($_SESSION['customer'])) {
  $name=$_SESSION['customer']['name'];
  $address=$_SESSION['customer']['login'];
  $password=$_SESSION['customer']['password'];
 } 
 ?>

</body>
</html>