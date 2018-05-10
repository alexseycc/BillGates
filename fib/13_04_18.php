<html>
   <head>
      <title>Solicitao de Hospedagem</title>
   </head>

   <link rel="stylesheet" type="text/css" href="cod_css.css"> 

   <body>
      <form oninput="total.value = (noites.valueAsNumber * 99) + ((hospedes.valueAsNumber - 1) * 10)">
         
         <label>Nome completo:</label>
         <input type="text" id="nome_completo" name="nome_completo" placeholder="NomeDeUsuario" required>

         <br>
		 
		 <label>Telefone:</label>
         <input type="text" id="tel" name="tel" placeholder="(XX) 9-9999-9999" >

         <br>
		 
         <label>E-mail:</label>
         <input type="email" id="e-mail" name="e-mail" required>

         <br>
         
         <label>Confirma o email:</label>
         <input type="email" id="e-mail_2" name="e-mail_2" required oninput="check(this)">

         <br>
         
         <label>Data de Chegada:</label>
         <input type="date" id="dt_chegada" name="dt_chegada" required>

         <br>
         
         <label>Nmero de noites (R$99,00 diária):</label>
         <input type="number" id="noites" name="noites" value="0" min="1" max="80" required>

         <br>
         
         <label>Nmero de hspedes (cada hspede adicional R$10,00 por noite):</label>
         <input type="number" id="hospedes" name="hospedes" value="0" min="0" max="40" step="5" required>

         <br>
         
         <label>Total:</label> R$<output id="total" name="total">99</output>,00

         <br><br>
         
         <label>Cdigo da Promoo:</label>
         <input type="text" id="promo" name="promo" pattern="[A-Za-z0-9]{6}" title="O cdigo da promoo deve ter 6 carcateres alfanumericos">

         
         <input type="submit" value="Solicitar Reserva" /> 
      </form>
      
      <script>
         function check(input) {
            if (input.value != document.getElementById('e-mail').value) {
               input.setCustomValidity('emails diferentes.');
            }
            else {
               input.setCustomValidity('');
            }
         }
      </script>
   </body>
</html>