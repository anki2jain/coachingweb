$(document).ready(function(){
    $(".update").click(function(){
        $("h1").show();
        $("h3,#display").hide();
    });
});

$(document).ready(function(){
    $(".pd").click(function(){
        $("h3").show();
        $("h1,#display").hide();
    });

    $(".hey").click(function(){
      $("h6").show();
    });
});



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
/*
$(document).ready(function(){
        var unid=$("#unid").val();
    $("#changenm").click(function(){
        $.ajax({
        
            method:'POST',
            url: 'update.php',
            data:{
                unid:unid
            }, //call storeemdata.php to store form data
            success: function(html) {
                $("#display").show();
                $("#abcd").show();
                $("h1,h3").hide();
            
            }
        });
    });

});*/

    
 
function update1(e){
    var id=e.id;
    var txt=$("."+id).val();
 //  var id=$(e).attr("id");
  
  
    $.ajax({
        
        method:'POST',
        url: 'update1.php',
        data:{
            txt:txt,
           id:id,
        },
        success: function(html) {    
            $("#"+id).text(txt);
            //$("").val(html);
        
        }
    });
    
} 



function show_data(){
alert("qwertyuiop");
}
/*function update2(){
    var unid=$("#unid").val();
    $.ajax({
        
        method:'POST',
        url: 'update.php',
        data:{
            unid:unid
        },
        success: function(html) {    
            
            $("#unique").text(unid);
            $("#unid").val(html);
        
        }
    });
} */

