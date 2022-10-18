<section class="parametres-ux">

    <div class="parametres-para-ux">

        <div class="param-boxer-ux">
            <h4>Mes paramètres</h4><br>
            <a href="parametre.php?page=parametre">
                <h6>Détails du profil</h6><br>
            </a>
            <a href="parametre.php?page=parametrecompte">
                <h6 class="detaitp-ux">Paramètres du compte</h6><br>
            </a>
            <a href="#">
                <h6>Notifications</h6><br>
            </a>
            <a href="#">
                <h6>Paramètres de confidentialité</h6><br>
            </a>
            <a href="securité.php">
                <h6>Sécurité</h6>
            </a>

        </div>

        <div class="param-action-ux">
            <h3>Paramètres du compte.</h3>
            <form action="_controllers/controlleruser.php?function=updateparametrecompte_user" enctype="multipart/form-data" method="POST" id="formulaireIDuser">
                <div class="card-ux">

                    <div class="title-ux">
                        <h5> Nom et Prénom </h5>
                    </div>
                    <div>
                        <?= $user->nomprenom  ?>
                    </div>
                    <div class="Nom-ux">
                        <input class="form-control" type="text" placeholder="<?= $user->nomprenom ?>" name="nomprenom" aria-label="default input example">
                    </div>
                </div>

                <div class="card-ux">

                    <div class="title-ux">
                        <h5> Genre </h5>
                    </div>
                    <div>
                        <?= $user->genre  ?>
                    </div>
                    <div class="genre-ux">
                        <select class="form-select" id="validationCustom04" name="genre">
                            <option selected disabled>vous etes? selectionne</option>
                            <option value="Femme">Femme</option>
                            <option value="Homme">Homme</option>
                        </select>

                    </div>
                </div>

                <div class="card-ux">

                    <div class="title-ux">
                        <h5> Date de naissance </h5>
                    </div>
                    <div>
                        <?= $user->datenaissance  ?>
                    </div>

                    <div class="naissance-ux">

                        <div class="naixx-ux">
                            <input class="form-control" type="date" name="datenaissance" aria-label="default input example">
                        </div>
                    </div>
                </div>


                <div class="card-uxxx">

                    <div class="title-ux">
                        <h5> Numéro de téléphone </h5>
                    </div>

                    <div class="adresse-ux">
                        <a href="#popupuxo2" class="buttonu-xo">Changer</a>
                        <div id="popupuxo2" class="overlastu-xo">
                            <div class="popupsu-xo " id="user-password-changement">
                                <a href="#" class="close-uxo">&times;</a>

                                <div class="modal-content-r-tuxo">
                                    <div class="modal-body-r-tuxo">
                                        <div class="param-boxer-ux">
                                            <h6>Entrer l'ancien numéro </h6>
                                            <input class="form-control user-number-passe" type="number" aria-label="default input example">

                                            <h6>Entrer le code récu</h6>
                                            <input class="form-control user-number-code_active" type="text" aria-label="default input example">

                                            <h6>Entrer le nouveau numéro</h6>
                                            <input class="form-control user-number-new" type="text" aria-label="default input example"><br>


                                            <button type="button" class=" change-number-user btn btn-secondary">Mettre à jour</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="direct-ux">
                    <div class="container">
                        <p> Votre numéro de téléphone ne sera pas rendu public ,il vous pernetra de vous connecter que
                            sur le site. </p>
                    </div>
                </div>

                <div class="card-ux">

                    <div class="title-ux">
                        <h5> Adresse Email </h5>
                    </div>

                    <div class="adresse-ux">
                        <a href="#popupuxoe2" class="buttonu-xoe">Changer</a>
                        <div id="popupuxoe2" class="overlastu-xoe">
                            <div class="popupsu-xoe" id="user-email-changement">
                                <a href="#" class="close-uxoe">&times;</a>
                                <div class="modal-content-r-tuxo">
                                    <div class="modal-body-r-tuxo">
                                        <div class="param-boxer-ux">
                                            <h6>Entrer l'ancien adresse e-mail </h6>
                                            <input class="form-control user-ancien-email" type="text" aria-label="default input example" name="user-ancien-email">
                                            <div class="text-secondary" id="messager"></div>
                                            <h6>Entrer le code récu dans l'adresse e-mail</h6>
                                            <input class="form-control user-code-email" type="text" aria-label="default input example" name="user-code-email">

                                            <h6>Entrer le nouveau adresse e-mail</h6>
                                            <input class="form-control user-new-email" type="text" aria-label="default input example" name="user-new-email"><br>


                                            <button type="button" class=" btn btn-secondary update-user-email">Mettre à jour</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card-uxxx">

                    <div class="title-ux">
                        <h5> Mot de passe </h5>
                    </div>

                    <div class="adresse-ux">
                        <a href="#popupuxom2" class="buttonu-xom">Modifier</a>
                        <div id="popupuxom2" class="overlastu-xom">
                            <div class="popupsu-xom">
                                <a href="#" class="close-uxom">&times;</a>
                                <div class="modal-content-r-tuxo">
                                    <div class="modal-body-r-tuxo">
                                        <div class="param-boxer-ux">
                                            <h6>Entrer l'ancien mot de passe </h6>
                                            <input class="form-control" type="number" aria-label="default input example">

                                            <h6>Entrer le nouveau mot de passe</h6>
                                            <input class="form-control" type="text" aria-label="default input example">

                                            <h6>Confirmer le nouveau mot de passe</h6>
                                            <input class="form-control" type="text" aria-label="default input example"><br>


                                            <button type="button" class=" btn btn-secondary">Mettre à jour</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



                <div class="card-uxxx">

                    <div class="title-ux">
                        <h5> Suppression de compte </h5>
                    </div>

                    <div class="adresse-ux">
                        <a href="#popupuxod2" class="buttonu-xod">Je supprime mon compte</a>
                        <div id="popupuxod2" class="overlastu-xod">
                            <div class="popupsu-xod">
                                <a href="#" class="close-uxd">&times;</a>
                                <div class="modal-content-r-t">
                                    <div class="modal-body-r-t">
                                        <div class="description-ux">
                                            <div class="mb-0">
                                                <h6>Pourquoi voulez-vous supprimer votre compte</h6>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>

                                            <button type="button" class=" btn btn-secondary">supprimer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <button type="submit" class="btn btn-secondary">Mettre à jour</button>
            </form>
        </div>
</section>