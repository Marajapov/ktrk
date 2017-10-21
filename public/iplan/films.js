function selectFilm(br_id){
	$film_id = br_id;
	$('#btn_add_show').css({ display: "block" });
	$('#btn_edit_broadcast').css({ display: "block" });
	$('#btn_delete_broadcast').css({ display: "block" });
	
	$('#broadcast_row'+br_id).addClass('active');
	$('#broadcast_row'+br_id).siblings().removeClass('active');
	$('#tableEvents').css({ display: "block" });
	$.ajax({
		url: 'film_event_jquery.php',
		type: 'post',
		data: { "film_id": br_id},
		success: function(response) {
			$('#tableEvents').html(response);
		}
	});
	
}

function go(t){
									if ($film_id>0){
										if (t==1) window.location = "film_edit.php?act=e&id="+$film_id;
										if (t==2) {
											if (confirm('Вы уверены что хотите удалить эту запись из базы?')) {
												window.location = "film_edit.php?act=d&id="+$film_id;
											} else {
												//
											}
											
										}
									}
}

$( function() {
	
	
	
	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
						$('#btn_edit_broadcast').css({ display: "none" });
						$('#btn_delete_broadcast').css({ display: "none" });
						$('#tableEvents').html();
						$( "#tableEvents" ).css({"display": "none"});
					});

	
});