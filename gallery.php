<?php
include 'navbar.php';
?>


<html>
    <body>




<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>jQuery simpleQuote Plugin Demo</title>
            <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
			<link rel="stylesheet" type="text/css" href="css/style.css"></link>
			<link href='http://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Ribeye+Marrow' rel='stylesheet' type='text/css'>

			<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
			<script type="text/javascript" src="js/jquery.simpleQuote.js"></script>

		</head>

		<body>

			<script type="text/javascript">
				$(document).ready(function(){
					$("#simpleQuote").simpleQuote( { speed : 5000 } , { includeAuthor : true } );
				});
			</script>

			<div id="container">
         
				<ul id="simpleQuote">
					<li id="display"> </li>
	<li author="-"><img src="fileupload/Coaching (1).png" height=400px width=1000px >

</li>  
                	
					<li author="Zig Ziglar">"   The foundation stones for a balanced success are honesty, character, integrity, faith, love and loyalty." </li>
	<li author="*"><img src="fileupload/competitive_edusuccess.png" height=400px width=1000px>

                        </li>
					<li author="Brian Tracy"> " Your true success in life begins only when you make the commitment to become excellent at what you do."
                    </li>   
                <li author=""><img src="fileupload/coaching.jpg"  >

</li>
				
					<li author="Malcolm X">" Education is the passport to the future, for tomorrow belongs to those who prepare for it today. "
                        </li>
				

					
				</ul>
			</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

		</body>

    </html>
    

</body>
</html>