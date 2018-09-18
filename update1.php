<?php
  session_start();
  $link =mysqli_connect("localhost","root","",'test');
  $f=$_SESSION['email'];
  $un=$_POST['txt'];
 $id=$_POST['id'];
  // $test="INSERT into `user` (name) VALUES ('ankit')  ";
  //mysql"\i_query($link,$test);
  $name= "UPDATE  `user` SET  $id ='$un' WHERE email='$f'";
  mysqli_query($link,$name);
  echo  $un;
  echo $id;
  

  //echo '<script>alert("asdfghjkl")</script>';
  ?>