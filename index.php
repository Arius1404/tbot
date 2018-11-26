<?php
session_start();
if(isset($_GET['session_destroy'])) unset($_SESSION['user']);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Site helper bot</title>
	

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style>
    body{
      background-image: url('img/kevin-schmid-1179713-unsplash.jpg');
       background-size: 100%;
    }
  </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>

  
<body class="text-center bg-light">


<?php
include_once 'pages/menu.php';

if(isset($_GET['page'])){
  if($_GET['page']=='reg') include_once 'pages/reg.php';
  if($_GET['page']=='login') include 'pages/login.php';
  if($_GET['page']=='main') include 'pages/main.php';
  if($_GET['page']=='about') include 'pages/about.php';
}
?>

</body>
</html>
