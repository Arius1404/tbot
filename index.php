<?php
session_start();
$msgs = file_get_contents('tmp/sessages_log.txt');
echo $msgs;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
