(function ($) {
    "use strict";
    $(function () {
        $(document).on("change", "#city_name,#city_country,#filter_region,#city_order,#city_country,#filter_safetymin,#filter_safetymax,#filter_healthcaremin,#filter_healthcaremax,#filter_educationmin,#filter_educationmax,#filter_culturemin,#filter_culturemax", function (e) {

            var ajaxData = {
                'action': 'my_action',
                'city': $('#city_name').val(),
                'region': $('#filter_region').val(),
                'country': $('#city_country').val(),
                'filter_safetymin': $('#filter_safetymin').val(),
                'filter_safetymax': $('#filter_safetymax').val(),
                'filter_healthcaremin': $('#filter_healthcaremin').val(),
                'filter_healthcaremax': $('#filter_healthcaremax').val(),
                'filter_educationmin': $('#filter_educationmin').val(),
                'filter_educationmax': $('#filter_educationmax').val(),
                'filter_culturemin': $('#filter_culturemin').val(),
                'filter_culturemax': $('#filter_culturemax').val()
            }
            jQuery.ajax({
                type: "post",
                url: myAjax.ajaxurl,
                data: ajaxData,
                success: function (response) {
                    //alert(response);
                    $('.ecs-posts').html('');
                    $('.ecs-posts').html(response);
                }
            })
        });
    });
})(jQuery);