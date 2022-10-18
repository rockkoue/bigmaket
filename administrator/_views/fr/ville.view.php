<div class="container">
    <div class="alert alert-info">
        Merci de sersir des categorie vraisemblable!
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Creation des ville</h4>
                </div>
                <div class="panel-body">
                    <h3>vos diferentes villes </h3>
                    <br>
                    <form class="form-horizontal" action="../_controllers/controllerville.php" id="formulaireID">
                        <input type="hidden" name="object" value="add">
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-3 control-label">Nom ville</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="focusedinput" placeholder="Default Input" name="nom">
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
                                <th>libelle</th>
                                <th>descition</th>
                                <th>date creation</th>
                                <th>id createur</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td>1</td>
                                <td>abidjan</td>
                                <td>pas encore disponible</td>
                                <td class="center"> 10/12/20 </td>
                                <td class="center">Xld45</td>
                                <td class="center">
                                    <button class="btn btn-warning">edite</button>
                                    <button class="btn btn-danger">delete</button>
                                </td>
                            </tr>


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
