//File from short project (my code)
$(document).ready(function () {
    var language_id = $("#staticpage-language_id").val();
    var id = $("#staticpage-website_id").data('id');
    var data = {
        language_id: language_id,
        id: id
    };
    $.get('views', data, success);

    $('#staticpage-language_id').change(function () {
        language_id = $("#staticpage-language_id").val();
        id = $("#staticpage-website_id").data('id');
        data = {
            language_id: language_id,
            id: id
        };
        $.get('views', data, success)

    });
// action return url created for this static-page
    function success(data){
        if (data.url) {
            $('#iframe').attr('src', data.url)
        }
    }
});