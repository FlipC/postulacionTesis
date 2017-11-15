$(function(){
	$('.modalButton-3').click(function(){
		$('#modal-3').modal('show')
			.find('#modalContent-3')
			.load($(this).attr('value'));
	});
});

$(function(){
	$('.modalButton-4').click(function(){
		$('#modal-4').modal('show')
			.find('#modalContent-4')
			.load($(this).attr('value'));
	});
});