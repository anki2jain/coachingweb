
<?php
include 'navbaruser.php';
if(isset($_GET["submit"])  && $_GET["search"]!=""   )
{
    $st=$_GET["search"];
    $link =mysqli_connect("localhost","root","",'test');
    $dub ="SELECT * from `mathematics` where topic LIKE '%".$st."%' ";
   $dub1= "SELECT * FROM `physics` WHERE topic LIKE '%".$st."%' "; 
   $dub2= "SELECT * FROM `chemistry` WHERE topic LIKE '%".$st."%' ";
    $check =mysqli_query($link,$dub);
    $check1 =mysqli_query($link,$dub1);
    $check2 =mysqli_query($link,$dub2);
echo '<br><br><div class="container">
<h4>The result for your search:" '.$st.' "is here::</h4>
</div><br><br> ';
      
    if($check )
    {


        while($row= mysqli_fetch_array($check))
        {$fname= $row['file'];
        echo '<div class="container"><div class="card card-body"><div class="row"><div class"col-md-3">';
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
        </div>
        ';
        
        echo "</div></tr><br><br>";
        }
        
       
    }

    if($check1)
    {
    
        while($row1 = mysqli_fetch_array($check1))
        {$fname1= $row1['file'];
        echo '<div class="container"><div class="card card-body"><div class="row"><div class"col-md-3">';
        echo '<img src="'.$row1['pic'].'"  height=150px width=150px ><br>';
        echo "<h3>".$row1['topic']."</h3></div>";
        
        echo '
        
        <div class="col-md-8">
        <h5>About:</h5>
        <h6>"'.$row1['brief'].'"</h6>
        
        <br>
        
        
        <a href="dfile.php?dow='.$fname1.'"><h1 style="float:right"><i class="fas fa-download"></i></h1></a><br>
        </div>
        </div>
        </div>
        ';
        
        echo "</div></tr><br><br>";
        }
        
       
    }

    
    if($check2)
    {
            
        while($row2 = mysqli_fetch_array($check2))
        {$fname2= $row2['file'];
        echo '<div class="container"><div class="card card-body"><div class="row"><div class"col-md-3">';
        echo '<img src="'.$row2['pic'].'"  height=150px width=150px ><br>';
        echo "<h3>".$row2['topic']."</h3></div>";
        
        echo '
        
        <div class="col-md-8">
        <h5>About:</h5>
        <h6>"'.$row2['brief'].'"</h6>
        
        <br>
        
        
        <a href="dfile.php?dow='.$fname2.'"><h1 style="float:right"><i class="fas fa-download"></i></h1></a><br>
        </div>
        </div>
        </div>
        ';
        
        echo "</div></tr><br><br>";
        }
        
       
    }

    else {

        echo "didint find";
    }



}

?>