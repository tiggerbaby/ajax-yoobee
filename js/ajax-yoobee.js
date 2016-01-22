$(document).ready(function(){
	$('#note-form').submit( function( e ){
		//prevent the form from submitting
		e.preventDefault();

		//Grab the note
		if ($.trim ($('#note').val()) == '' ) {
			return;
	}

		$.ajax({
			url: 'http://alice.wu.yoobee.net.nz/ajax_yoobee/ajax-yoobee.php',
			data:{ note: $('#note').val()},
			success: function ( dataFromServer ){

			},
			error: function(){
				alert('Cannot connect');
			}
		});
	});
});