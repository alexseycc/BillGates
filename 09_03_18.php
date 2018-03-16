<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  </head>
  <script>
    var limit=100;
    //document.write(limit);
//bilGates    
      
    
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
    
  function eleitor(){
  var candidato =[];
   candidato[0]=["josé","joão"];
   candidato[1]=["felicidade","esperança"];
   candidato[2]=["1","2"];
   for(i=0;i<2;i++){
   for(j=0;j<1;j++){
   document.getElementById('eleitor'+(i+1)).innerHTML=candidato[i][j]+","+candidato[i+1][j]+","+candidato[i+2][j]+' <input type=button value=votar onclick=comp('+(i+1)+')><br>';
   document.getElementById('eleitor'+(i+2)).innerHTML=candidato[i][j+1]+","+candidato[i+1][j+1]+","+candidato[i+2][j+1]+' <input type=button value=votar onclick=comp('+(i+2)+')><br>';
   
     //alert(candidato[i][j]);
   }  
   }
     
  }
    
    function comp(i){
     alert("seu foi computador com sucesso");
      if(i==1)
       alert("candidato:josé\npartido:felicidade\ncód:1");
        else{
       alert("candidato:joão\npartido:esperança\ncód:2");
      }
    }
    
    
  function mat(i){
    //alert(document.getElementById('menu1').value);
    //alert(document.getElementById('menu1').id);
    switch(i){
        //mat(i,document.getElementById('menu1').value,document.getElementById('menu2').value);
      case 1:
        var z=parseFloat(document.getElementById('menu1').value)+parseFloat(document.getElementById('menu2').value);
        alert("A soma dos valores é:"+z);
        break;
        case 2:
        if(parseFloat(document.getElementById('menu2').value) > parseFloat(document.getElementById('menu1').value)){
         alert("subtraia o maior pelo menor");  
         document.getElementById('menu2').value=null;
         document.getElementById('menu1').value="";
        }
        else{
        var z=parseFloat(document.getElementById('menu1').value)-parseFloat(document.getElementById('menu2').value);
       alert("A subtração dos valores é:"+z);
        }
          break;
          case 3:
        var z=parseFloat(document.getElementById('menu1').value)*parseFloat(document.getElementById('menu2').value);
        alert("O produto dos valores é:"+z);
        break;
        case 4:
        if(parseFloat(document.getElementById('menu2').value) ==0){
         alert("denominador não pode ser 0");  
         document.getElementById('menu2').value=null;
         document.getElementById('menu1').value="";
        }
        else{
        var z=parseFloat(document.getElementById('menu1').value)/parseFloat(document.getElementById('menu2').value);
        alert("A divisão dos valores é:"+z);
        }
          break;
    }
    
  }  
    function menu(){
      for(i=1;i<=2;i++)
      document.write("<input type='text' id='menu"+i+"' />valor"+(i)+"<br>");
      for(i=1;i<=4;i++){
        switch(i){
          case 1:
       document.write("<input type='button' value='A-Somar' onclick='mat("+i+")' style='width:100px' />");
      break;
          case 2:
       document.write("<input type='button' value='B-Subtrair' onclick='mat("+i+","+i+","+i+");' style='width:100px' />");
      break;
          case 3:
       document.write("<input type='button' value='C-Multiplicar' onclick='mat("+i+","+i+","+i+")' style='width:100px' />");
    break;
          case 4:
       document.write("<input type='button' value='D-Dividir' onclick='mat("+i+","+i+","+i+")' style='width:100px' />");
    break;
        }}
    }
    
    
    function tabela_grau(){
      var f=parseFloat(document.getElementsByName('tabela')[0].value);
      var ff=parseInt(document.getElementById('tabela').value);
      var c=((f-32)*5)/9;
      document.getElementById('tabelap').innerHTML="temperatura celsio é: "+c.toFixed(2);
      
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
 
 
  </fieldset><br>
<fieldset>MenuOpções
    </p>
  <script>
    menu();
   document.write("<br>");
</script> 
  </fieldset>
<fieldset>Eleição
  <li id="eleitor1"></li>
  <li id="eleitor2"></li>
  <script>
  eleitor();
  </script>
</fieldset>

<fieldset>GrauFahrenheit<script>
   document.write("<br>");
  </script>
  <input type='text' name="tabela" id='tabela' placeholder='GrauFahrenheit' onkeypress='javascript:if (event.keyCode==13) tabela_grau();' />
       <input type='button' value='ConverterCelsio' onclick='tabela_grau()' style='width:100px' />
<p id="tabelap">
  
  </p>
</fieldset>

<p id="tabb" style="visibility:visible";>
  </p>
</body>
</html>