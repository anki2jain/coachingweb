<?php
session_start();
if (isset($_SESSION['email']))
{
    header('Location:navbaruser.php');
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


  <nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
        <div class="container">
  <a class="navbar-brand" href="index.php">Talkwidme!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="in.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#courses">courses </a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">Gallery </a>
      </li>
      
      
      <li class="nav-item">
        <a class="nav-link" href="applyhere.php">Apply here! </a>
      </li>

    </ul>
    <ul class="navbar-nav ml-auto">


    <li class="nav-item">
        <a class="nav-link " href="login.php">login </a>
      </li>

  <li class="nav-item">
        <a class="nav-link " href="register.php">register </a>
      </li>
      <li class="nav item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbarDropdown/menuLink">About Us!</a>
      <div class="dropdown-menu">
        <a href="/ideas" class="dropdown-item">Aim/mission</a>
        <a href="/ideas/add" class="dropdown-item">faculty</a> 
        <a href="/ideas" class="dropdown-item">Alumni batch</a>
      </div>
      </li>
    </ul>
   </div>
   </div>
</nav>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>