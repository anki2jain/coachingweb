 <?php


$link =mysqli_connect("localhost","root","",'test');

if(isset($_GET['dow'])){
    $fname=$_GET['dow'];

  
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($fname) . '"');
    header('Content-Length: ' . filesize($fname));
    
    readfile($fname);
}

else{

    echo '<h3 style="padding-top:250px; text-align:center">Error 404!</h3>';
}

?>