$(document).ready(function (e) {
    $('#formulaireIDuser').submit(function (e) {
        e.preventDefault();

        var mdp = document.querySelector('.mdp').value
        var mdp_conf = document.querySelector('.mdp-conf').value
        if (mdp == mdp_conf) {
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

                        new Swal({
                            title: "success!",
                            text: result.message,
                            icon: 'success',
                            //type: "success"
                            confirmButtonText: 'ok'

                        }).then(function () {

                            window.location.href = "http://adompoi7.beget.tech/index.php";
                        });

                    } else {

                        new Swal({
                            title: 'Error!',
                            text: result.message,
                            icon: 'error',
                            confirmButtonText: 'ok'
                        })

                        // alert(result.message);
                        // new swal("", result.message, result.status);
                    }
                }
            });


        } else {

            new Swal("mot de passe non identique");


        }


    });

});





