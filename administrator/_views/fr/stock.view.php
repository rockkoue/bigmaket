
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
                    <form class="form-horizontal" action="../_controllers/controllerstock.php" id="formulaireID">
                        <input type="hidden" name="object" value="add">
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-3 control-label">Fournisseur</label>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" placeholder="Nom fournisseur" name="nommarche">
                            </div>
                        </div>
                        <div class="form-group">
                           
                            <div class="col-xs-2">
                          <span>ref:</span> <input type="" class="form-control" placeholder="Nom fournisseur" name="nommarche" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-3">
                                    <select name="nomville" class="form-control" >
                                        <option value="">choix du magasin</option>
                                        <?php foreach (ville::all() as $ville) : ?>
                                            <option value="<?= $ville->nom_ville ?>"><?= $ville->nom_ville ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="col-xs-3">
                                    <select name="nomcommune" class="form-control">
                                        <option value="">Nom du produit</option>
                                        <?php foreach (commune::all() as $commune) : ?>
                                            <option value="<?= $commune->nom_commune ?>"><?= $commune->nom_commune ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="col-xs-2">
                                <select name="nomcommune" class="form-control">
                                    <option value="">Quantité de l'article</option>
                                    <?php foreach (commune::all() as $commune) : ?>
                                        <option value="<?= $commune->nom_commune ?>"><?= $commune->nom_commune ?></option>
                                    <?php endforeach ?>
                                </select>
                                </div>
                                <div class="col-xs-3">
                                 <input type="text" class="form-control" placeholder="prix" name="nommarche">
                                </div>

                            </div>
                           
                        </div>
                      
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-3">
                                    <input type="text" class="form-control" placeholder="coleur" name="nommarche">
                                </div>
                                <div class="col-xs-2">
                                     <input type="text" class="form-control" placeholder="taille" name="nommarche">
                                </div>
                                <label for="focusedinput" class="col-xs-2 control-label">Date arrivage</label>
                                <div class="col-xs-4">
                                    <input type="date" class="form-control" placeholder="Default Input" name="nommarche">
                                </div>
                            </div>
                                
                        </div>
                            
                            
                        
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-6">
                            <textarea name="" id="" cols="60" rows="5"></textarea>
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
                                <th>nom marche</th>
                                <th>commune</th>
                                <th>ville</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (marche::all() as $marches) : ?>
                                <tr class="odd gradeX">
                                    <td><?= $marches->id ?></td>
                                    <td><?= $marches->nom_marche ?></td>
                                    <td><?= $marches->ville ?></td>
                                    <td><?= $marches->commune ?></td>

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
                        button.text('Valider');

                    } else {
                        swal("", result.message, result.status);
                    }


                }
            });
        })
    });
</script>
