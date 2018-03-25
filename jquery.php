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
})
})


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
<p>Click me too!</p>

</body>
</html>
