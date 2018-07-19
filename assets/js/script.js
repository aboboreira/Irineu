$(function() {

	var baseUrl;

	baseUrl = $('#base_url').val();

	$('.btn-alterar').click(function(btn){
		btn.preventDefault();
		

		var id = $(this).val();
		var titulo = $(this).closest('tr').find('input[name="titulo"]').val();	
		var sub_titulo = $(this).closest('tr').find('input[name="sub_titulo"]').val();	

		$.post(baseUrl+'editagaleria/alterar', { id:id,  titulo:titulo, sub_titulo:sub_titulo}, function(){
			$('.alert-save').show().delay(5000).slideUp(500);
			window.location.reload();
		})
	})


	$('.btn-deletar').click(function(btn){
		btn.preventDefault();

		var id = $(this).val();
		$.post(baseUrl+'editagaleria/deletar', { id: id} , function(){
			$('.alert-delete').show().delay(5000).slideUp(500);
		window.location.reload();

		})
	})

	$('.btn-excluir').click(function(btn){
		btn.preventDefault();

		var id = $(this).val();
		$.post(baseUrl+'editaicone/excluir', { id: id} , function(){
			$('.alert-delete').show().delay(5000).slideUp(500);
		window.location.reload();

		})
	})

	$('.btn-apagar').click(function(btn){
		btn.preventDefault();

		var id = $(this).val();
		$.post(baseUrl+'editacontatoicon/excluir', { id: id} , function(){
			$('.alert-delete').show().delay(5000).slideUp(500);
		window.location.reload();

		})
	})


});

