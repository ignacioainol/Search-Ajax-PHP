$(function(){
	$('#search').focus();
	$('#search_form').submit(function(e){
		e.preventDefault();
	})

	$('#search').keyup(function(){
		var envio = $('#search').val();

		$('#logo').html('<h2>Buscador</h2> <hr />')
		$('#resultados').html('<h2><img src="img/loader.gif" width="20" alt="" /> Cargando</h2>');
		$.ajax({
			type:'POST',
			url:'php/buscador.php',
			data:('search=' + envio),
			success: function(response){
				if(response != ""){
					$('#resultados').html(response);
				}
			}
		})
	})
})