<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>wtf</title>
</head>
  <script src="jquery.min.js"></script>
<body style="background:lightblue">
  <form id="testform">
  <input type="text" placeholder="nome" name="nome" id="nome"><br>
  <input type="text" placeholder="cliente" name="cliente" id="cliente"><br>
  <input type="text" placeholder="atendimento" name="atendimento" id="atendimento"><br>
  <input type="submit" value="cadastrar" id="cad" name="cad">
  </form>
  
  <script>
  $(document).ready(function(){
    $("#cad").on("click",function(){
    var nome=$("#nome").val();
    var cliente=$("#cliente").val();
    var atendimento=$("#atendimento").val();
 /*     
    alert("cadastrado com sucesso!");
    $.get("cadastrar.php",$("#testform").serialize());
   */ 
  
      /*   
    $.get( "cadastrar.php", {nome:nome,cliente:cliente,atendimento:atendimento });
    alert("cadastrado com sucesso!");
    */
     
     $.ajax({
  url: "cadastrar.php",
 // data:{nome,cliente,atendimento },
   data:$("#testform").serialize(),
       success:alert('cadastro com sucesso!'),
  //dataType: "json"
});
  
    
    });
  });
  </script>
</body>
</html>