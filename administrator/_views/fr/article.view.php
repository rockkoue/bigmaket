<div class="container">
    <div class="alert alert-info">
        Merci de sersir des commune vraisemblable!
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Creation des Article</h4>

                </div>
                <div class="panel-body">
                    <h3>Article</h3>
                    <br>
                    <form class="form-horizontal" action="../_controllers/controllerarticle.php" id="formulaireID" accept-charset="multipart/form-data">
                        <input type="hidden" name="object" value="add">
                        <div class="form-group">
                            <label for="selector1" class="col-sm-3 control-label">categorie</label>
                            <div class="col-sm-6">
                                <select name="categorie" id="selector1" class="form-control">
                                    <?php foreach (categorie::all() as $categorie) : ?>
                                        <option value="<?= $categorie->idcategorie ?>"><?= $categorie->libellecategorie ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-3 control-label">nom article</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="libellearticle" placeholder="Default Input" name="libellearticle" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-6">
                                <textarea type="text" class="form-control" id="descriprion" placeholder="Default Input" name="description" /></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-3 control-label">prix</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="prix" placeholder="Default Input" name="prix" />
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="file" id="im" name="imgarticle" accept=".png,.jpg,.gif" />
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
                    <h4>Liste des produits </h4>
                </div>
                <div class="panel-body collapse in">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                        <thead>
                            <tr>
                                <th>N</th>
                                <th>image</th>
                                <th>libelle</th>
                                <th>categorie</th>
                                <th>description</th>
                                <th>date creation</th>
                                <th>prix</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>


                            <?php foreach (article::listearticle() as $articles) : ?>

                                <tr class="odd gradeX">
                                    <td><?= $articles->idarticle ?></td>
                                    <td class="center"> <img src="../images/articles/<?= $articles->image ?>" alt="" style="width:50px;height:50px;"></td>
                                    <td><?= $articles->libellearticle ?></td>
                                    <td><?= $articles->libellecategorie ?></td>
                                    <td><?= $articles->description ?></td>
                                    <td><?= $articles->datedecreation ?></td>
                                    <td class="center"> <?= $articles->prix ?> </td>
                                    <td class="center">
                                        <button class="btn btn-warning">edite</button>
                                        <button class="btn btn-danger">delete</button>
                                    </td>

                                </tr>
                            <?php endforeach ?>


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
