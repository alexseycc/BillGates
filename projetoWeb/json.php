<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
  <script src="billgates.git/trunk/js/jquery.min.js"></script>
  <script>
    var pessoa={
      nome:"lk"
      
    };
    
    
    alert("pessoas:"+pessoa.nome)
    //var nm=document.querySelector("#papa").val();
    dia="mia";
     
    
  $(function(){
    $("button").on("click",function(){
     // $(this).slideToggle();
      for(i=0;i<4;i++)
      alert("welcome "+dia);
    });
  
    var nm=$("p").text();
    var mm=$("p").val();
    alert(nm);//
    alert(mm);
  //$("p").text("LEOX vai te tomar no c.....@$#W#");
  $("p").text("Grupo publicidade Visual");
 
    $("p").animate(
    height,"+=50"
  );
  
  });
   
  </script>

  <body>
  <button>
    click<font color="blue">ME</font>
  </button>
    <p id="papa">
      alana
    </p>
</body>
</html>