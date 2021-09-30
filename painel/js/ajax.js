$(function(){
	$('.ajax').ajaxForm({
		dataType: 'json',
		beforeSend:function(){
			$('.ajax').animate({'opacity':'0.5'});
			$('.ajax').find('input[type=submit]').attr('disabled','true');
		},
		success: function(data){
			$('.ajax').animate({'opacity':'1'});
			$('.ajax').find('input[type=submit]').removeAttr('disabled');
			$('.box-alert').remove();
			if(data.sucesso){
				$('.ajax').prepend('<div class="box-alert sucesso-box">O cliente foi inserido com sucesso!</div>');
				$('.ajax')[0].reset();
			}else{
				$('.ajax').prepend('<div class="box-alert erro-box"><b>'+data.mensagem+'</div>');
			}
			console.log(data);
		}
	})
}) 