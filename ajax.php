
$(document).ready(function(){
    $(".cp").click(function(){
        $.ajax({
            url: 'getdata.php', //call storeemdata.php to store form data
            success: function(html) {
                $("#display").show();
                $("h1,h3").hide();
                var ajaxDisplay = document.getElementById('display');
                ajaxDisplay.innerHTML = html;
            }
        });
    });
});

$(document).ready(function(){
  
        $.ajax({
            url: 'getdata.php', //call storeemdata.php to store form data
            success: function(html) {
                $("#display").show();
                $("h1,h3").hide();
                var ajaxDisplay = document.getElementById('display');
                ajaxDisplay.innerHTML = html;
            }
      
    });
});