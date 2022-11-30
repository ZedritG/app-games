<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GsGames</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!-- funcion para darle un fondo a al cuerpo de la web -->
<style>
    body{
        background-image: url(https://www.itl.cat/pngfile/big/11-117908_retro-gaming-wallpaper-90s-arcade.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed; 
        background-size: cover;
    }
</style>
<style>
  .navbar li a {
    color:white;
  }
</style>
</head>
<body>
<br>
<div id="background1">
<nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo site_url()?>">GsGames</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo site_url("games/index")?> ">Games List</a></li>
      <li><a href="<?php echo site_url("workers/index")?> ">Workers</a></li>
      <li><a href="<?php echo site_url("peripherals/index")?>">Peripherals</a></li>
      <li><a href="<?php echo site_url("invoices/index")?>">Invoice</a></li>
      <li><a href="<?php echo site_url("tournaments/index")?>">Tournaments</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo site_url("logins/index")?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
    </ul>
  </div>
</nav>
</div>

    
</body>
</html> 