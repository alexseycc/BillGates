<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$(".pa").click(function(){
        $(this).hide();
        });
   });


$(document).ready(function(){
$("#pa").click(function(){
$(this).css("color","red");
})})

  $(document).ready(function(){
    $("#pa").css("color","blue");
  $("#mm").click(function(){
    alert("alan");
    $(".pa").text("my name us");
  });
  });

$(document).ready(function(){
$("body").css("background-color","rgba(245,123,120,.4)");
});

window.onload = function() {
alert("utilizando jquery");
}


</script>
</head>
<body>

<p id="pa">If you click on me, I will disappear.</p>
<p class="pa">Click me away!</p>
<p id="mm">Click me too! <p/>
<p id="nome" onclick="muda();">alex</p>
<input type="text" id="txt">
  <script>
    $i=0;
    document.write("<br>"+$i);  
  </script>
  </p>
  </body>
</html>
<script>
function muda(){
  document.getElementById("nome").innerHTML="veka";
  document.getElementById("txt").value="veka";
}
</script>