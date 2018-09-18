<?php
include 'navbaruser.php';
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css" />
<script src="myscripts.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
 <?php
    
     $link =mysqli_connect("localhost","root","",'test');
     $f=$_SESSION['email'];
     $name= "SELECT * from `user` where email='$f'";
     $get=mysqli_query($link,$name);
     $result=mysqli_fetch_assoc($get);      
      if( $result["unid"]=="" ||    $result["unid"]=="0"    )
      echo '<div class="alert alert-danger">please update your profile</div>';
      
?>




<div class="row">
<div class="col-md-4" style="padding-left:150px; padding-top:50px;">

<div class="vertical-menu">
  <a onmouseover=""  class="cp" id="reply" >personal details</a>
  <a onmouseover=""   class="update" id="reply"  >Update settings</a>
  <a onmouseover=""   id="reply" class="pd" >Change password</a>
  <a onmouseover=""   id="reply">complaint section</a>
 
<hr>
<h5>upcoming test</h5>
</div>

</div>
<div class="col-md-6" >
<h5 id="display"></h5>
<h5 id="abcd"></h5>
<h3 style="display:none">profile</h3>
<h1 style="display:none">hii student</h1>
</div>

</div>




</body>
</html>

