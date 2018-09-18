<?php

 session_start();
 $link =mysqli_connect("localhost","root","",'test');
 $f=$_SESSION['email'];
 $name= "SELECT * from `user`WHERE email='$f' ";
 $get=mysqli_query($link,$name);
 $result=mysqli_fetch_assoc($get); 
echo' <br><br>

<!------------------------------------------Name--------------------------------->
<div id="accordion">
<h5 class="mb-0">
  <button class="" style="width:800px; height:35px;"data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
  ';
echo "<h6 ><bold>Name:<bold></h6> <h6 id='name'>$result[name]</h6> ";
echo' </button>
</h5>    
<div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
<div class="card-body">
<div class="card">
<div class="card-body">
<label><h5>Name:</h5></label>
<input type="text" name="name" class="name" value='; 
echo $result['name'] ;
echo'>
<button class="btn" id="name" onclick="update1(this);" >Review change</button>
</div>
</div>
</div>
</div>


<!----------------------------------email------------------------------------------>
<h5 class="mb-0">
<button class="" style="width:800px; height:35px;" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
';
echo "<h6 ><bold>Email:<bold></h6> <h6 id='email'>$result[email]</h6> "; 
echo '</button>
</h5>

<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
<div class="card-body">

<div class="card">
<div class="card-body">

<label><h5>Email:</h5></label>
<input type="txt"  name="email" class="email" value='; 
echo $result['email'] ;
echo'>
<button class="btn" id="email" >Review change</button>
<br>
<h6>*you cannot change your email id without permission</h6>
</div>
</div>
</div>
</div>


<!----------------------------------unid------------------------------------------>

<h5 class="mb-0">
  <button class="" style="width:800px; height:35px;" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
  ';
echo "<h6 ><bold>Unique Id:<bold></h6> <h6 id='unid'>$result[unid]</h6> ";
echo'
  </button>
</h5>

<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
<div class="card-body">
<div class="card">
<div class="card-body">

<label><h5>change unid:</h5></label>
<input type="text" name="unid" class="unid" value=';
echo $result['unid'];
echo'>
<button  class="btn " id="unid" onclick="update1(this);">Review change</button>

</div>
</div>
  </div>
</div>


<!----------------------------------batch------------------------------------------>

<h5 class="mb-0">
  <button class="" style="width:800px; height:35px;" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
  '; 
  echo "<h6 ><bold>Batch:<bold></h6> <h6 id='batch'>$result[batch]</h6> ";
  echo' 
  </button>
</h5>

<div id="collapsefour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
<div class="card-body">
<div class="card">
<div class="card-body">

<label><h5>change Batch:</h5></label>
<input type="text" class="batch"  value='; 
echo $result['batch'] ;
echo'>
<button class="btn" id="batch" onclick="update1(this);">Review change</button>

</div>
</div>
  </div>
</div>



</div>

<br><br><br>
***<bold>NOTE:</bold><h6>To change your details click on the respective field and make the required changes. Please verify before confirming the same</h6>
';


?>
<html>

<script src="myscripts.js"></script>
<body>
<style>
button:hover{
    color:white;
    background-color:black;
 

}
h6{
    padding-left:25px;
    float: left;
}
button{
    border-bottom: 0.5px solid black;
    border-top: none;
    border-left: none;
    border-right: none;
   background-color:white;
   color:black;

}


</style>

</body>
</html>
