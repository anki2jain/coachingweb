
<?php
include 'navbaruser.php';
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<html>
<head>
<style>

.progress{
    height: 27px;
    margin: 0;
    overflow: visible;
    border-radius: 50px;
    background: #eaedf3;
    box-shadow: inset 0 10px  10px rgba(244, 245, 250,0.9);
}
.progress .progress-bar{
    border-radius: 50px;
}
.progress .progress-value{
    position: relative;
    left: -45px;
    top: 4px;
    font-size: 14px;
    font-weight: bold;
    color: black;
    letter-spacing: 2px;
}
.progress-bar.active{
    animation: reverse progress-bar-stripes 0.40s linear infinite, animate-positive 2s;
}
@-webkit-keyframes animate-positive{
    0% { width: 0%; }
}
@keyframes animate-positive {
    0% { width: 0%; }
}
</style>
</head>

<body>

<!------ Include the above in your HEAD tag ---------->
"
<div class="container">
    <div class="row">
    
        <div class="col-md-6">
       
            <div class="progress-outer">
            <p>test p</p>
                <div class="progress">
               
                    <div class="progress-bar progress-bar-info progress-bar-striped active" style="width:20%; box-shadow:-1px 10px 10px rgba(91, 192, 222, 0.7);"></div>
                    <div class="progress-value">overall performaces 20%</div>
                </div>
            </div>
            <br>
            <div class="progress-outer">
                <div class="progress">
                    <div class="progress-bar progress-bar-success progress-bar-striped active" style="width:60%; box-shadow:-1px 10px 10px rgba(116, 195, 116,0.7);"></div>
                    <div class="progress-value">60%</div>
                </div>
            </div>
            <br>
            <div class="progress-outer">
                <div class="progress">
                    <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width:40%; box-shadow:-1px 10px 10px rgba(240, 173, 78,0.7);"></div>
                    <div class="progress-value">40%</div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>