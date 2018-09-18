<?php

include 'navbar.php';

?>



<html>
<style>
body{
    background-image:linear-gradient(black,white);
}

.card{
    padding-top:20;
    background-color:white;
}
</style>
<body>
<div class="row" style="padding-top:30px">
<div class="card card-body-center col-md-8 mx-auto">

<h4 style="text-align:center"> To Apply fill the form!</h4>
<form  method="post" enctype="multipart/form-data">
  
  <label>-----------------------------------------------------student's details--------------------------------------------</label>
 <br>
 <br> <div class="row" >
    <div class="form-group col-md-6">
      
      
    <input type="text"  name="name" class="form-control form-control-sm col-10-sm"  placeholder="first name" required>
    </div>
    <div class="form-group col-md-6">
     
      <input type="text"  name="lname" class="form-control form-control-sm col-10-sm"  placeholder="last name" required>
    </div>
  </div>


  <div class="row">
<div class="form-group col-md-6">

        <select  name="gender" class="form-control form-control-sm col-10-sm"  required>
        <option selected>Gender</option>
            <option>male</option>
            <option>female</option>
            <option>other</option>
    </select>


</div>
<div class="form-group col-md-6">
      
      <input type="text"  name="school" class="form-control form-control-sm col-10-sm"  placeholder="school name" required>
</div>
</div>




  <div class="row">
    <div class="form-group col-md-6">
      <input type="text" name="smobi" class="form-control form-control-sm col-10-sm " placeholder="mobile no." required>
    </div>


  <div class="form-group col-md-6">
      
      <input type="email"  name="semail" class="form-control form-control-sm col-10-sm"  placeholder="email address" required>
</div>
</div>


<div class="row">
    <div class="form-group col-md-6">
      <input type="text" name="cgpa" class="form-control form-control-sm col-10-sm " placeholder="%age or cgpa of last standard" required>
    </div>
    <div class="form-group col-md-6">
      <input type="text" name="course" class="form-control form-control-sm col-10-sm " placeholder="Course to be enroll" required>
    </div>
</div>

  
    <div class="form-group col-md-6">
     <label for="pic">Student passport size pic</label>
      <input type="file" name="pic" class="form-control form-control-sm col-10-sm" placeholder="Display pic here!" id="inputZip" >
    </div>
    <label>------------------------------------------------------------------father's details-------------------------------------------------</label>
  <div class="row">
    <div class="form-group col-md-6">
     
      
    <input type="text"  name="fname" class="form-control form-control-sm col-10-sm"  placeholder="father's first name" required >
    </div>
    <div class="form-group col-md-6">
   
      <input type="text"  name="flname" required="required " class="form-control form-control-sm col-10-sm"  placeholder="last name" required>
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-6">
      <input type="text" name="fmobi" class="form-control form-control-sm col-10-sm " placeholder="mobile no."required>
    </div>


  <div class="form-group col-md-6">
      
      <input type="email"  name="femail" class="form-control form-control-sm col-10-sm"  placeholder="email address">
</div>
</div>

<label>-----------------------------------------------------Mother's details------------------------------------------------------------</label>
  <div class="row">
    <div class="form-group col-md-6">
     
      
    <input type="text"  name="mname" class="form-control form-control-sm col-10-sm"  placeholder="mother's first name" required>
    </div>
    <div class="form-group col-md-6">

      <input type="text"  name="mlname" class="form-control form-control-sm col-10-sm"  placeholder="last name" >
    </div>

    
  </div>

  <div class="row">
    <div class="form-group col-md-6">
      <input type="text" name="mmobi" class="form-control form-control-sm col-10-sm " placeholder="mobile no." required>
    </div>


  <div class="form-group col-md-6">
      
      <input type="email"  name="memail" class="form-control form-control-sm col-10-sm"  placeholder="email address">
</div>
</div>
  <button type="submit" name="submit"   data-toggle="modal" data-target="#exampleModal" style="text-align:center" class="btn btn-dark"> Click here to submit</button>




 </form>

</div>
</div>
</body>
</html>



<?php

if(isset($_POST['submit']))
{


  $link =mysqli_connect("localhost","root","",'test');

  $sname = $_POST['name'];
  $slname = $_POST['lname'];
  $fname = $_POST['fname'];
  $flname = $_POST['flname'];
  $mname = $_POST['mname'];
  $mlname = $_POST['mlname'];
  $smobi = $_POST['smobi'];
  $semail = $_POST['semail'];
  $mmobi = $_POST['mmobi'];
  $memail = $_POST['memail'];
  $fmobi = $_POST['fmobi'];
  $femail = $_POST['femail'];
  $gender = $_POST['gender'];
  $course = $_POST['course'];
  $school = $_POST['school'];
  $cgpa = $_POST['cgpa'];

  // $dub ="SELECT * from `application` where email ='$semail' ";
  // $check =mysqli_query($link,$dub);
    
// $add ="INSERT INTO `applications` (sname) VALUES ('$sname')";
     $add = "INSERT INTO `applications` (sname,slname,fname,flname,mname,mlname,smobi,semail,fmobi,femail,mmobi,memail,school,gender,course,cgpa) VALUES ('$sname','$slname','$fname','$flname','$mname','$mlname','$smobi','$semail','$fmobi','$femail','$mmobi','$memail','$school','$gender','$course','$cgpa')";
    if(mysqli_query($link,$add))
    { 
echo '<script>alert("congrats '.$sname.' ! Your response is recorded successfully. soon  you`ll get a confirmation mail");</script>';

    }
    else {
      echo "<script>alert('unsuccess');</script>";
    }

  
}
?>
