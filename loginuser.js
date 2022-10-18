$(document).ready(function (e) {
    $('#loginUser').submit(function (e) {
        e.preventDefault();
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
                    new swal("", result.message, result.status);
                    document.getElementById("loginUser").reset();

                } else {
                    console.log('eexee');
                    new swal("", result.message, result.status);
                }
            }
        });

    });

});
