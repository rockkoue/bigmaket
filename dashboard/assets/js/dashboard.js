$(document).ready(function (e) {

    $('#logout').submit(function (event) {
        event.preventDefault();
        var form = new FormData($(this)[0]);
        // var buttonDefault = $('#<?= $id_form ?>').text();
        var button = $('#submit')
        button.attr('disabled', true);
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: form,
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function (result) {
                button.attr('disabled', false);
                //button.text(buttonDefault);

                if (result.status == "success") {
                    swal("", result.message, result.status);
                    window.location.href = 'http://adompoi7.beget.tech/dashboard/article.php';
                } else {
                    swal("", result.message, result.status);
                }
            }
        });

    });
});