<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
  <script>
  function obg(){
    if(document.getElementById('cnh_obg').value == "")
  alert("digite sua cnh");  
  }
    
    function escolha(x){
    switch(x.value){
           case "hot":
       // alert(x.value);
           document.getElementById("imgcar").src="https://s16.postimg.org/o4fh9sgw5/breakout_1.jpg" 
           break;
           case "corsa":
        //alert(x.value);
        document.getElementById("imgcar").src="http://photos1.blogger.com/blogger/4965/683/1600/Carscoop%20Subaru%2093.jpg"
           break;
           case "siena":
  //      alert(x.value);
  document.getElementById("imgcar").src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/img-8872-jpg-1511879409.jpg"
          break;
           }
           }
  </script>
<body style="background:rgba(123,123,123,.5);">
  <h1>
   alugarcar 
  </h1>
  A maneira eficiente de alugar um carro
  <br>
  <input type="text" placeholder="nome" /><br>
  <input id="cnh_obg" type="text" placeholder="cnh" onblur="obg()" />
  <p>
<form> 
<INPUT TYPE="radio" NAME="OPCAO" VALUE="hot" CHECKED onchange="escolha(this)"> hot<br>
<INPUT TYPE="radio" NAME="OPCAO" VALUE="corsa" onchange="escolha(this)"> corsa<br>
<INPUT TYPE="radio" NAME="OPCAO" VALUE="siena" onchange="escolha(this)"> siena<br>
</form>
  <img id="imgcar" src="" style="width:200px">
           
  
</body>
</html>