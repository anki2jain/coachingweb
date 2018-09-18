<?php
include 'adminprofile.php';
?>
<h4 style="text-align:center; padding-top:5%">ADD NEW TOPICS</h4>
<div class="row">
    <div class="col-md-8 mx-auto">
<form  method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="form-group col-md-6">
      <label for="topic" ></label>
      
    <input type="text"  name="topic" class="form-control form-control-sm col-10-sm"  placeholder="Topic !">
    </div>
    <div class="form-group col-md-6">
      <label for="subject"></label>
      <select  name="subject" class="form-control form-control-sm col-10-sm" >
      <option selected>subject...</option>
        <option>physics</option>
        <option>chemistry</option>
        <option>mathematics</option>
</select>
    </div>
  </div>
  
  <div class="form-group">
    <label for="brief"></label>
    <textarea type="text" name="description" class="form-control"  placeholder="Something about the topic......."></textarea>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Any pdf,img?</label>
      <input type="file" name="file" class="form-control form-control-sm col-10-sm " id="inputCity">
    </div>
    <div class="form-group col-md-6">
      <label for="pic"> Dsiplay pic</label>
      <input type="file" name="pic" class="form-control form-control-sm col-10-sm" placeholder="Display pic here!" id="inputZip">
    </div>
  </div>  
  <button type="submit" name="submit" style="text-align:center" class="btn btn-outline-primary">add it</button>
</form>
</div>
</div>

<?php

if(isset($_POST["submit"])){
     
$link =mysqli_connect("localhost","root","",'test');
$topic= $_POST['topic'];
$subject= $_POST['subject'];
$brief= $_POST['description'];
//$pic=$_POST['pic'];
$dub ="SELECT * from `$subject` where topic ='$topic' ";
$check =mysqli_query($link,$dub);
$filename=$_FILES['file']['name'];
$tempname=$_FILES['file']['tmp_name'];
$folder = "fileupload/".$filename ;
move_uploaded_file($tempname,$folder);
$filename1=$_FILES['pic']['name'];
$tempname1=$_FILES['pic']['tmp_name'];
$folder1 = "fileupload/".$filename1 ;
move_uploaded_file($tempname1,$folder1);
if(mysqli_num_rows($check)>0)
{
    echo '<div class="alert alert-danger"> Topic already exist</div>';
}
else {
    $add = "INSERT INTO `$subject` (topic, brief,file,pic) VALUES ('$topic','$brief','$folder','$folder1')";
if (mysqli_query($link,$add)) {
    echo '<script> alert("Done!")</script>'; 
}
 else {
echo '<script> alert("Not Done!")</script>';

//echo "Error: " . $add . "<br>" . $link->error;
}

}


}


?>