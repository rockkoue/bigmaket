<div class="container">
    <div class="alert alert-info">
        Merci de sersir des marchés vraisemblable!
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Ravitaillement du stock</h4>

                </div>
                <div class="panel-body">
                    <h3>vos diferentes stockage </h3>
                    <br>
                    <form class="form-horizontal" action="../_controllers/controllermagasin.php" id="formulaireID" accept-charset="multipart/form-data">
                        <input type="hidden" name="object" value="add">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-3">
                                    <input type="text" class="form-control" placeholder="Nom du magasin" name="nommagasin">
                                </div>
                                <div class="col-xs-3">
                                    <select name="localisation" class="form-control">
                                        <option value="">localisation</option>
                                        <?php foreach (commune::all() as $commune) : ?>
                                            <option value="<?= $commune->nom_commune ?>"><?= $commune->nom_commune ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="col-xs-3">
                                    <select name="nommarche" class="form-control">
                                        <option value="">marché</option>
                                        <?php foreach (marche::all() as $commune) : ?>
                                            <option value="<?= $commune->nom_commune ?>"><?= $commune->nom_marche ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="col-xs-2">
                                    <input type="text" class="form-control" placeholder="numero de registre" name="numregistre">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <input type="file" id="im" name="imgarticle" accept=".png,.jpg,.gif" />
                            </div>

                        </div>
                        <!-- The global progress information -->
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <div class="btn-toolbar">
                                        <button id="submit" class="btn-primary btn">Envoyer</button>
                                        <button class="btn-default btn">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Liste des villes </h4>
                </div>
                <div class="panel-body collapse in">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                        <thead>
                            <tr>
                                <th>N</th>
                                <th>nom magasin</th>
                                <th>commune</th>
                                <th>marché</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (marche::all() as $marches) : ?>
                                <tr class="odd gradeX">
                                    <td><?= $marches->id ?></td>
                                    <td><?= $marches->nom_marche ?></td>
                                    <td><?= $marches->commune ?></td>
                                    <td><?= $marches->ville ?></td>


                                    <td class="center">
                                        <button class="btn btn-warning">edite</button>
                                        <button class="btn btn-danger">delete</button>
                                    </td>
                                </tr>

                            <?php endforeach  ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div> <!-- row -->
<script>
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