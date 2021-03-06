jQuery(document).ready(function($){

	/**
	 * For any fields that start with "bic_action_", load users into the send_to field
	 */
	function update_users_bic( $obj )
	{
		var $next_obj = $obj.closest('form').find('#acf-field-send_to'),
			$spinner  = $('<img />', {src: eman.spinner});

		$spinner.css({marginLeft: '10px', marginTop: '-3px'});

		$next_obj.closest('.field').find('label').append( $spinner );

		$.ajax({
			url :      eman.ajaxurl,
			type :     'post',
			async :    true,
			cache :    false,
			dataType : 'html',
			data :     {
				'action'  : 'update_users_bic',
				'group'   : $obj.val(),
				'post_id' : eman.post_id,
			},
			success: function( return_data )
			{
				//console.log(return_data);
				//if ( return_data && 'No users found.' != return_data )
				//{
					$spinner.remove();
					$next_obj.html(return_data).select2();
				//}
			},
			error: function( xhr )
			{
				console.log(xhr.responseText);
			}
		});
	};

});