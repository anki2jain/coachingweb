
<html>
<head>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
</head>
<body>
<script type="text/javascript">
    jQuery("body").prepend('<div id="preloader">Loading...</div>');
    jQuery(document).ready(function() {
    jQuery("#preloader").remove();
    });
</script>
<?php
include 'navbar.php';?>
<div class="g-signin2">hiii</div>
<div class="g-signin2" data-onsuccess="onSignIn"></div>
</body>
</html>