<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
 
 
//location.reload();
 
  // var intervalo = setInterval(function() { $('body').load('jquery.php'); }, 1000);
  
/*  $(document).ready(function() {
$("body").load("jquery_asp");
    $(".pa").text(Date());
    
});
  */
  

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
    alert("welcome");
    $(".pa").text("my name us");
    alert($(".pa").html());
    $(".pa").html("aloha");
    //val()
  //text();
    //.html()
  });
  });

$(document).ready(function(){
$("body").css("background-color","rgba(245,123,120,.4)");
});

//window.onload = function() {
//alert("utilizando jquery");
//}


  function escreva(){
  var $nome="alexsu";   
    document.write("<br>"+$nome);
    
  }
</script>
</head>
<body onload="setInterval('atualizar()',5000)">

<p id="pa">If you click on me, I will disappear.</p>
<p class="pa">Click me away!</p>
<p id="mm">Click me too! <p/>
<p id="nome" onclick="muda();" value="kaka">alex</p>
<input type="text" id="txt">

  <script>
    var $i=0;
    document.write("<br>"+($i+1));
    //alert(escreva());
  escreva();
  </script>
  </p>
  </body>
</html>
<script>
function muda(){
  document.getElementById("nome").innerHTML="veka";
  document.getElementById("txt").value="veka";
//  document.write("<br>llll");
}

//function atualizar(){
//  location.reload();
//}

</script>