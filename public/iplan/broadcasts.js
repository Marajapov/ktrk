function make_broadcasts() {
	$('#btn_add_show').css({ display: "none" });
	$('#btn_edit_broadcast').css({ display: "none" });
	$('#btn_send_archive').css({ display: "none" });
	$('#btn_delete_broadcast').css({ display: "none" });
	$('#tableEvents').css({ display: "none" });
	$('#tableEvents').html();
	var result_actual = '';
	var result_archive = '';
	var result_concert = '';
	var result_news = '';
	console.log('--->'+all_array.length)
	$.each(all_array, function (i, elem) {
						var result = "";
						if (elem['channel']==channel_id || channel_id==0){
							console.log(i);
							var date = new Date(elem["added_dt"]);
							var added = date.getDate() + '.' + (date.getMonth() + 1) + '.'  +  date.getFullYear();
							
							date = new Date(elem["last_dt"]);
							var last = "";
							if (date.getDate() && (date.getMonth() + 1) && date.getFullYear())
							last = date.getDate() + '.' + (date.getMonth() + 1) + '.'  +  date.getFullYear();
							
							var genre = elem["genre"];
							var studio = elem["studio"];
							var studio_name = '';
							$.each(studios_array, function (j, st) {
								if (st['id']==studio) {studio_name = st['name']; return false;}
							});
							
							result += '<tr onclick="selectBroadcast('+elem["id"]+')" id="broadcast_row'+elem["id"]+'" class="clickable-row" >';
                            result += '                 <td class="nowrap">'+elem["name"]+'</td>';
							result += '                 <td class="nowrap">'+elem["duration"]+'</td>  ';       
                            result += '                 <td>'+studio_name+'</td>';
                            result += '                 <td>'+broadcast_genre_array[genre][0]+'</td>';
                            result += '                 <td>'+elem["language"]+'</td>';
                            result += '                 <td>'+elem["id"]+'</td>';
                            result += '                 <td>'+added+'</td>';
                            result += '                 <td>'+last+'</td>';
                            result += '              </tr>';
							if (elem['status']==1) {
								result_actual += result;
							} else if (elem['status']==2) {
								result_archive += result;
							} else if (elem['status']==3) {
								result_concert += result;
							} else if (elem['status']==4) {
								result_news += result;
							} 
						}
					});
	$('#broadcast_actual').html(result_actual);
	$('#broadcast_archive').html(result_archive);
	$('#broadcast_concert').html(result_concert);
	$('#broadcast_news').html(result_news); 			
}

function selectBroadcast(br_id){
	$('#tableEvents').html();
	broadcast_id = br_id;
	$('#btn_add_show').css({ display: "block" });
	$('#btn_edit_broadcast').css({ display: "block" });
	$('#btn_send_archive').css({ display: "block" });
	$('#btn_delete_broadcast').css({ display: "block" });
	$('#broadcast_row'+br_id).addClass('active');
	$('#broadcast_row'+br_id).siblings().removeClass('active');
	$('#tableEvents').css({ display: "block" });
	$.ajax({
		url: 'broadcast_event_jquery.php',
		type: 'post',
		data: { "brodcast_id": br_id},
		success: function(response) {
			//console.log(response);
			$('#tableEvents').html(response);
		}
	});
	
}

$( function() {	
});