$(document).ready(function(){
	$('button').on('click',function(){
		var txt = $("<p>Reservado!</p>");
		$(this).hide();
		$(this).closest('.produto').append(txt);
	});
});