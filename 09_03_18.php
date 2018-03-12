<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  </head>
  <script>
    var limit=100;
    //document.write(limit);
    
      
    
    function soma(){
  var a = parseFloat(document.getElementById("numa").value);
  var b = parseFloat(document.getElementById("numb").value);
  var c = (a+b);
  
      alert(c.toFixed(2));
      
      alert(c>100?"seu resultado foi maior que "+limit.toFixed(2)+"":"teste usando js");
      document.getElementById("numa").value=null;
      document.getElementById("numb").value=null;
    }
    
    
    inicial=0;
      
    function tabuada(i){
      for(;inicial<=10;inicial++)
      document.write(i+"*"+inicial+"="+(i*inicial)+"<br>");
    document.getElementById('tabb').style.visibility="visible";
        //document.getElementById("tab").innerHTML=
      //document.write(i+"*"+inicial+"="+(i*inicial));
    }
  
    function tab(){
      alert(Boolean(2>1));
     tabuada(document.getElementById('numi').value);
      
    }
    
    function mt(){
      var x=[];
      for(i=0;i<10;i++){
        x.push(document.getElementById(i).value);
      }
    alert(x.sort());
      
    }
    
    function escrever(){
      for(i=0;i<10;i++)
      document.write("<input type='text' id='"+i+"' onkeypress='javascript:if (event.keyCode==13) mt();' />");
     document.write("<input type='button' value='ordenar' onclick='mt()' style='width:300px' />");
     
    }
  
  </script>

  <body style="background:rgba(123,210,123,.4)">
  <fieldset>Soma de dois numeros<br>
  num a<input id="numa" type="text" placeholder="numA"/>
  num b<input id="numb" type="text" placeholder="numB"  onkeypress="javascript:if (event.keyCode==13) soma();"/>
  <input type="button" value="somar" onclick="soma();"></inp>  
  </fieldset><br>
  <fieldset>tabuada da multiplicação<br>
  num a<input id="numi" type="text" placeholder="numI" onkeypress="javascript:if (event.keyCode==13) tabuada(document.getElementById('numi').value);"/>
  <input type="button" value="tabuadaMaluca" onclick="tabuada(document.getElementById('numi').value)" </input>
  </fieldset><br>
  <fieldset>ArrayTest
    </p>
  <script>
    escrever();
  </script> 
 
 
  </fieldset>
  
<p id="tabb" style="visibility:visible";>
  </p>
</body>
</html>