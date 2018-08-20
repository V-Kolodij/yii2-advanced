//File from short project
$(document).ready(function () {
    $('.save').click(function () {
        var title = $("#staticpage-title").val();
        var language = $("#staticpage-language_id option:selected").text();
        if (!!title) {
            var language_id = $("#staticpage-language_id").val();
            var website_id = $("#staticpage-website_id").data('website');
            var id = $("#staticpage-website_id").data('id');
            var content = $('#content-area').keditor('getContent')
            $.ajax({
                url: 'save-page',
                type: 'POST',
                data: {
                    content: content,
                    language_id: language_id,
                    website_id: website_id,
                    title: title,
                    id: id
                }
            }).done(function (data) {
                if (data.status === 400) {
                    $('#staticpage-language_id').parent().addClass('has-error');
                    $('#staticpage-language_id').parent().find('.help-block').text($('#editor_container').data('language-error'));
                }
                if (data.status === 'empty Title') {
                    $('#staticpage-title').parent().addClass('has-error');
                    $('#staticpage-title').parent().find('.help-block').text($('#editor_container').data('title-error'));
                }
                if (data.status === 200) {
                    $("#staticpage-website_id").data('id', data.id);
                    $('.has-error').removeClass('has-error');
                    $('.help-block').html('');
                    alert($('#editor_container').data('success') + language);
                }
            })
        } else {
            $('#staticpage-title').parent().addClass('has-error');
            $('#staticpage-title').parent().find('.help-block').text($('#editor_container').data('title-error'));
            return false;
        }
    });

    $('#staticpage-title').change(function () {
        if ($(this).val() == '') {
            $(this).parent().addClass('has-error');
            $(this).parent().find('.help-block').text($('#editor_container').data('title-error'));
        } else {
            $(this).parent().removeClass('has-error');
            $(this).parent().find('.help-block').text('');
        }
    });

    $('#staticpage-language_id').change(function () {
        if ($(this).val() == '') {
            $(this).parent().addClass('has-error');
            $(this).parent().find('.help-block').text($('#editor_container').data('language-error'));
        } else {
            $(this).parent().removeClass('has-error');
            $(this).parent().find('.help-block').text('');
            setContent();
        }
    })

});

function setContent() {
    var language_id = $("#staticpage-language_id").val();
    var id = $("#staticpage-website_id").data('id');
    $.ajax({
        url: 'set-content',
        type: 'POST',
        data: {
            language_id: language_id,
            id: id
        }
    }).done(function (data) {
        $("#staticpage-title").val(data.title);
        $('#content-area').keditor('setContent', data.content)
    })
}