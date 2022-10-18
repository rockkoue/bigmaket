<div class="container">
    <div class="alert alert-info">
        vendeurs
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Liste des vendeurs </h4>
                </div>
                <div class="panel-body collapse in">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                        <thead>
                            <tr>
                                <th>Non</th>
                                <th>nom magasin</th>
                                <th>Status</th>
                                <th>lieu marché</th>
                                <th>document magasin</th>
                                <th> piece d'identite</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ((new vendeur)::vendeurencour() as $vendeurs) : ?>
                                <tr class="odd gradeX">
                                    <td> <?= $vendeurs->prenom ?></td>
                                    <td><?= $vendeurs->nom_magasin ?></td>
                                    <td><?= $vendeurs->status == 0 ? 'Activé' : 'en cour...' ?></td>
                                    <td class="center"> <?= $vendeurs->marche_magasin ?></td>
                                    <td class="center"><a href="../<?= $vendeurs->docmagasin ?>">doc</a></td>
                                    <td class="center"><a href="../<?= $vendeurs->docidentite ?>">doc</td>
                                    <td class="center">
                                        <button class="btn btn-warning"> <?php
                                                                            if ($vendeurs->status == 0) {
                                                                                echo '<a href="http://adompoi7.beget.tech/_controllers/controllervendeur.php?function=unvalidationacount&idvendeur=' . $vendeurs->id . '">Desativer</a>';
                                                                            } else {
                                                                                echo '<a href="http://adompoi7.beget.tech/_controllers/controllervendeur.php?function=validationacount&idvendeur=' . $vendeurs->id . '">valider</a>';
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