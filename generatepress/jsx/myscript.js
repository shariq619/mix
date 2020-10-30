(function ($) {
		"use strict";
		$(function () {
			$(document).on("change","#city_name,#city_order,#city_country", function (e) {		
            
					var ajaxData = {
						'action': 'my_action',
						'city': $('#city_name').val()
					}
					jQuery.ajax({
						 type : "post",
						 url :  myAjax.ajaxurl,
						 data : ajaxData,
						 success: function(response) {
							   //alert(response);
							   $('.ecs-posts').html('');
                               $('.ecs-posts').html(response);

						 }
					}) 
			});
		});		
})(jQuery);