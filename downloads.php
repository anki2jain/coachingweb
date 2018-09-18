<?php
include 'navbaruser.php';
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="myscripts.js" ></script>
<style>
.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #ccc; 
}

.panel {
    padding: 20px 18px;
    display: none;
    background-color: white;
    overflow: hidden;
}

.accordion{
   text-align:center;
width:1100px;
 padding-left:50px;
   
}

.accordion {
   background-color:white;
   min-width: 50px; 
   max-width: 1300px; 
}
.accordion:hover{
color:white;
background-color:black;
}
</style>
</head>
<body>





<!-------------------physics-------------------------->
<div class="container">
<br>
<div>

<form method="get" action="backend.php" class="form-inline my-2 my-lg-0">
<h2>subjects</h2>
      <input class="form-control mr-sm-2 ml-auto" type="text" placeholder="Search topic"   name="search" aria-label="Search">
      <button class="btn  my-2 my-sm-0" style="color:white;
      background-color:black;" type="submit"name="submit">Search</button>
    </form>
    </div>
<br>


<button class="accordion">Physics</button>

<div class="panel">
<div class="container">
<?php
 $link =mysqli_connect("localhost","root","",'test');
 $dub ="SELECT * from `physics` ";

 $check =mysqli_query($link,$dub);


while($row = mysqli_fetch_array($check))
{$fname= $row['file'];
echo '<tr><div class="card card-body"><div class="row"><div class"col-md-3">';
echo '<img src="'.$row['pic'].'"  height=150px width=150px ><br>';
echo "<h3>".$row['topic']."</h3></div>";

echo '

<div class="col-md-8  col-xs-8">
<h5>About:</h5>
<h6>"'.$row['brief'].'"</h6>

<br>


<a href="dfile.php?dow='.$fname.'"><h3 style="float:right"><i class="fas fa-download"></i></h3></a><br>
</div>
</div>
';

echo "</div></tr><br><br>";
}


mysqli_close($link);
?>
</div>
</div>

<br>



<!-------------------chemistry-------------------------->
<button class="accordion" >Chemistry</button>
<div class="panel">
<div class="container">
<?php
 $link =mysqli_connect("localhost","root","",'test');
 $dub ="SELECT * from `chemistry` ";

 $check =mysqli_query($link,$dub);


 while($row = mysqli_fetch_array($check))
 {$fname= $row['file'];
 echo '<tr><div class="card card-body"><div class="row"><div class"col-md-3">';
 echo '<img src="'.$row['pic'].'"  height=150px width=150px ><br>';
 echo "<h3>".$row['topic']."</h3></div>";
 
 echo '
 
 <div class="col-md-8">
 <h5>About:</h5>
 <h6>"'.$row['brief'].'"</h6>
 
 <br>
 
 
 <a href="dfile.php?dow='.$fname.'"><h1 style="float:right"><i class="fas fa-download"></i></h1></a><br>
 </div>
 </div>
 ';
 
 echo "</div></tr><br><br>";
 }
 
 
mysqli_close($link);
?>
</div>
</div>
<!-------------------mathematics-------------------------->
<button class="accordion">Mathematics</button>
<div class="panel">
<div class="container">
<?php
 $link =mysqli_connect("localhost","root","",'test');
 $dub ="SELECT * from `mathematics` ";

 $check =mysqli_query($link,$dub);


 while($row = mysqli_fetch_array($check))
 {$fname= $row['file'];
 echo '<tr><div class="card card-body"><div class="row"><div class"col-md-3">';
 echo '<img src="'.$row['pic'].'"  height=150px width=150px ><br>';
 echo "<h3>".$row['topic']."</h3></div>";
 
 echo '
 
 <div class="col-md-8">
 <h5>About:</h5>
 <h6>"'.$row['brief'].'"</h6>
 
 <br>
 
 
 <a href="dfile.php?dow='.$fname.'"><h1 style="float:right"><i class="fas fa-download"></i></h1></a><br>
 </div>
 </div>
 ';
 
 echo "</div></tr><br><br>";
 }
 
 
mysqli_close($link);
?>
</div>
 



</div>
<br><br><br>
<br><br><br>
<br><br><br><br><br><br>
<h6><bold>**NOTE:</bold>you can download notes of the respectve topic by jst clicking on the icon  <i class="fas fa-download"></i></h6>

</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>

</body>
</html> 





