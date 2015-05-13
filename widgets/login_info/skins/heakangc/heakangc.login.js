 /* After Login */
function completeLogin(ret_obj, response_tags, params, fo_obj) {
	var url =  current_url.setQuery('act','');
	location.href = url;
}

jQuery(function($){
	// Login
	// Div unwrap
	var $account = $('.account');
	$account.unwrap().unwrap();
	// Toggle
	var $acTog = $('a[href="#acField"]');
	var $acField = $('#acField');
	var $acField_wrap = $('.acField-wrap');
	var $acField_background = $('.acField-background');
	var $acFields = $acField_wrap.add($acField_background);
	$acTog.click(function(){
		$acFields.fadeIn(200, function(){
			var $user_id = $acField.find('input[name="user_id"]:eq(0)');
			if($user_id.is(':visible')){
				$user_id.focus();
			} else {
				$acField.focus();
			}
		});
		return false;
	});
	$acField_wrap.on('click', function(e){
		if(e.target === $acField_wrap[0]){
			$acFields.fadeOut(200);
		}
	})

	// Close
	$acField
		.append('<button type="button" class="close">&times;</button>')
		.find('>.close').click(function(){
			$acFields.fadeOut(200);
			return false;
		});

	// Warning
	var $acWarning = $account.find('.warning');
	$('#keep_signed').change(function(){
		if($(this).is(':checked')){
			$acWarning.hdie(200);
		} else {
			$acWarning.show(200);
		}
	});

	// Login Error
	$('#fo_login_widget .message').parent($acField).show();
});
