<?php
session_start();
if(!isset($_SESSION['email1']))
{
    header('Location:adminpanel.php');
    exit();
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
    <link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <title>Hello, world!</title>
  <script src="myscripts.js"></script>
  <style>
    a{
      font-family: 'Arvo', serif;
    }
    tr:hover{
      background-color:blue;
      cursor:pointer;
      color:white;
        }
    </style>
  </head>
  <body>
 
  <nav class="navbar navbar-expand-sm navbar-dark bg-primary mb-3">
        <div class="container">
  <a class="navbar-brand" href="index.php">Admin Panel!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="">home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addtut.php">add tut </a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link " href="">add topic</a>
      </li>

  <li class="nav-item">
        <a class="nav-link " href="addcourse.php">add course</a>
      </li>


    
    </ul>
   </div>
   </div>
</nav>


<?php
 $link =mysqli_connect("localhost","root","",'test');
 $dub ="SELECT * from `applications` WHERE status='' ";

 $check =mysqli_query($link,$dub);
if($check)
{
  echo "<h5 style='font-family: Arvo, Serif; padding-left:100px'>following students has applied for the various courses:</h5><br><br>";

  
  echo "<div style='overflow-x:auto;'><div class='container'> <table class='table'><tr><th></th> <th>NAME</th>  <th>COURSE</th><th>  Mobile </th><th> Email</th> <th>CGPA </th><th>  SCHOOL</th><th> Parent's no.</th></tr></div>";
  while($row = mysqli_fetch_array($check))
{  echo "<div class='container hey'><tr><td>*</td><td> $row[sname] </td><td> $row[course] </td><td> $row[smobi] </td><td> $row[semail] </td><td> $row[cgpa] </td><td> $row[school] </td><td> $row[fmobi] </td></tr></div>";
// echo "<br><br>";
}
echo '</table></div>';
}
else {
  echo '<h5 style="padding:50px 600px ">No Applictions</h5>';
  }

mysqli_close($link);
?>


<h6 style="display:none">ankitjain</h6>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>