
<div class="container">
    <div class="alert alert-info">
        Merci de sersir des info vraisemblable!
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Creation des d'admin</h4>

                </div>
                <div class="panel-body">
                    <h3>Administrateur </h3>
                    <br>
                    <form class="form-horizontal" action="../_controllers/controlleradministrateur.php" id="formulaireID">
                        <input type="hidden" name="object" value="add">
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-3 control-label">Nom </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="nom">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-3 control-label">Prenom</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="prenom">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-3 control-label">Login</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="login">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-3 control-label" autocomplete="disable">password</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" name="code_compte">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-3 control-label" autocomplete="disable">password comfirmation</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control">
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
                    <h4>creation d'admin </h4>
                </div>
                <div class="panel-body collapse in">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                        <thead>
                            <tr>
                                <th>Nom et prenom</th>
                                <th>login</th>
                                <th>password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td>rock</td>
                                <td>rock</td>
                                <td>***************</td>
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
