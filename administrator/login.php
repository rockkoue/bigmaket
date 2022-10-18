<?php
session_start();
echo $_SESSION['askpage'];

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from avant.redteamux.com/extras-login.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jun 2019 09:07:27 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <title>Avant</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Avant">
    <meta name="author" content="The Red Team">

    <link rel="stylesheet" href="assets/css/styles.minc726.css?=140">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../assets/js/jquery.js"></script>
</head>

<body class="focusedform">
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-44426473-2', 'auto');
        ga('send', 'pageview');
    </script>
    <div class="verticalcenter">
        <H2>Login</H2>
        <div class="panel panel-primary">
            <div class="panel-body">
                <h4 class="text-center" style="margin-bottom: 25px;">verification d'access </h4>
                <form action="../_controllers/controlleradministrateur.php" id="formulaireID" class="form-horizontal" style="margin-bottom: 0px !important;">
                    <input type="hidden" name="object" value="connexion">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="login" name="login">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" name="code_compte" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="pull-right"><label><input type="checkbox" style="margin-bottom: 20px" checked=""> Remember Me</label></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="btn-toolbar">
                                <button id="submit" class="btn-primary btn">Envoyer</button>
                                <button class="btn-default btn">Cancel</button>
                            </div>
                        </div>

                    </div>
                </form>

            </div>

        </div>
    </div>


    <script>
        $(document).ready(function(e) {

            form = $('#formulaireID');

            $('#submit').on('click', function(e) {
                e.preventDefault();
                //const buttonDefault = form.text();
                const button = $('#submit');;

                button.attr('disabled', true);
                button.text('Veuillez patienter ...');

                const link = form.attr('action')
                const data = form.serialize()

                $.ajax({
                    type: 'POST',
                    url: link,
                    data: data,
                    dataType: 'json',
                    success: function(result) {
                        console.log(data)
                        button.attr('disabled', false);
                        //button.text(buttonDefault);

                        if (result.status == "success") {

                            swal("", result.message, result.status);
                            form[0].reset(); //Fonctionne
                            window.location = "http://adompoi7.beget.tech/administrator/index.php"

                        } else {
                            swal("", result.message, result.status);
                        }


                    }
                });
            })
        });
    </script>

</body>

</html>