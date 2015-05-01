$(function(){	
	//Всплывающие сообщения
    //достаточно добавить к любоиу элементу title="Кликнете для выбора кончной даты"
	$('i').tooltip({});

	$('.testPR').click(function() {
		var prUrl =$('#prUrl').val();
		// alert(prUrl);
		$.ajax({
			url: '/inc/doModuls.inc.php?act=testPR',
			data: {'prUrl':prUrl},
			dataType: 'json',
			type : 'POST',
			success: function (data) {
				$('div.primer').empty().append(data);
			}
		});

	});


});
