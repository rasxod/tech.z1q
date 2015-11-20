$(function(){	
	//Всплывающие сообщения
    //достаточно добавить к любоиу элементу title="Кликнете для выбора кончной даты"
	$('i').tooltip({});

	$('.testPR').click(function() {
		var prUrl =$('#prUrl').val(), port = $('#port').val();
		// alert(port);
		$.ajax({
			url: '/inc/doModuls.inc.php?act=testPR',
			data: {'prUrl':prUrl, 'port':port},
			dataType: 'json',
			type : 'POST',
			success: function (data) {
				$('div.primer').empty().append(data);
			}
		});

	});
	$('.parseConvLink').click(function(){
		var wathUrl = $('#wathUrl').val(), soursText = $('#soursText').val(), addText = $('#addText').val();
		$.ajax({
			type: "POST",
			// dataType: 'json',
			url: '/inc/doModuls.inc.php?act=parseurl',
			data: {'wathUrl':wathUrl, 'soursText':soursText, 'addText':addText},
			cache: false,
			success: function(jsondata){
				$('.resultText').empty();
				// var glacier = JSON.parse(jsondata);
				// alert(glacier.length);
				// for (var i = 0; i < glacier.length; i++) {
					// $('.resultText').append(glacier[i]);
				// };
					// .append(glacier);
				$('.resultText').append(jsondata);
			}
		});
	});



});
