<div class="container">
    <div class="alert alert-info">
        users
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Liste des users </h4>
                </div>
                <div class="panel-body collapse in">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                        <thead>
                            <tr>
                                <th>photo</th>
                                <th>Non</th>
                                <th>prenom</th>
                                <th>Status</th>
                                <th>Email</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ((new user)::all() as $user) : ?>
                                <tr class="odd gradeX">
                                    <td> <img src="../<?= $user->avatar ?>" alt="" height="40" width="40"> </td>
                                    <td> <?= $user->nom ?></td>
                                    <td><?= $user->prenom ?></td>
                                    <td><?= $user->status == 0 ? 'Activé' : 'en cour...' ?></td>
                                    <td class="center"> <?= $user->email ?></td>

                                    <td class="center">
                                        <button class="btn btn-warning"> <?php
                                                                            if ($user->status == 0) {
                                                                                echo '<a href="http://adompoi7.beget.tech/_controllers/controlleruser.php?function=unvalidationacount&iduser=' . $user->Id . '">Desativer</a>';
                                                                            } else {
                                                                                echo '<a href="http://adompoi7.beget.tech/_controllers/controlleruser.php?function=validationacount&iduser=' . $user->Id . '">valider</a>';
                                                                            }
                                                                            ?>
                                        </button>
                                        <button class="btn btn-danger">suprimer</button>
                                        <button class="btn btn-primary">voir</button>
                                    </td>
                                </tr>
                            <?php endforeach ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- row -->
    <script>
        $(document).ready(function(e) {
            $(".magasa").on('click', function() {
                //let a = document.getElementsByTagName('input')
                let a = document.querySelector('.magasin-id').getAttribute("placeholder")
                location.replace('http://adompoi7.beget.tech/rock/admin/infomagasin.php?id=' + a);
            });
        })




        $(document).ready(function(e) {

            $('#formulaireID').submit(function(e) {
                e.preventDefault();

                var form = new FormData($(this)[0]);

                // var buttonDefault = $('#<?= $id_form ?>').text();
                var button = $('#submit');

                button.attr('disabled', true);
                button.text('Veuillez patienter ...');

                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: form,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    success: function(result) {
                        button.attr('disabled', false);
                        //button.text(buttonDefault);

                        if (result.status == "success") {

                            swal("", result.message, result.status);

                        } else {
                            swal("", result.message, result.status);
                        }
                    }
                });

            });

        });
    </script>