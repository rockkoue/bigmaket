<div class="form__wrapper">
    <form action="_controllers/controllervendeur.php?function=add_vendeur" method="post" enctype="multipart/form-data" class="form">

        <section class="register__vendeur">
            <div class="container">
                <div id="msg_info"></div>
                <h3 class="title-c"> * Devenez vendeur *</h3>


                <!-- Progress bar -->
                <div class="progressbar">
                    <div class="progress" id="progress"></div>

                    <div class="progress-step progress-step-active" data-title="Information. P."></div>
                    <div class="progress-step" data-title="Contact."></div>
                    <div class="progress-step" data-title="Information du magasin."></div>
                    <div class="progress-step" data-title="Vérification."></div>
                </div>

                <!-- Steps -->
                <div class="form-step form-step-active">
                    <div class="input-group">
                        <label for="">Nom: </label>
                        <input type="text" placeholder="Entrer votre Nom *" name="nom" />
                    </div>

                    <div class="input-group">
                        <label for="">Prenom : </label>
                        <input type="text" placeholder="Entrer votre Prénom *" name="prenom" />
                    </div>

                    <div class="input-group">

                        <select class="form-control" name="genre">
                            <option class="hidden" selected disabled>Genre </option>
                            <option value="masculin">M.</option>
                            <option value="feminin">F.</option>
                            <option value="feminin">Autre.</option>
                        </select>

                    </div>

                    <div class="input-group">

                        <label for="">Mot de passe :</label>
                        <input type="password" placeholder="Choisisser un mot de passe *" name="mdp" class="mdp" />
                    </div>

                    <div class="input-group">
                        <label for="">Confirmer le mot de passe :</label>
                        <input type="password" placeholder="Confirmer le mot de passe choisir *" name="mdp-conf" class="mdpconf" />
                    </div>
                    <div class="btn-depart">
                        <a href="#" class="btn btn-next width-50 ml-auto ">Suivant</a>
                    </div>

                </div>

                <div class="form-step">
                    <div class="input-group">
                        <label for="">Numéro de téléphone :</label>
                        <input type="text" minlength="2" maxlength="200" placeholder="Enter votre numéro de téléphone *" name="telephone" />
                    </div>
                    <div class="input-group">
                        <label for="">Adresse email :</label>
                        <input type="text" name="email" placeholder="Enter votre adresse email:" class="email" />
                    </div>
                    <div class="input-group">
                        <label for="">Confirmer l'adresse e-mail :</label>
                        <input type="text" name="email-conf" placeholder="Confirmer votre adresse e-mail *" class="emailconf" />
                    </div>


                    <div class="btns-group">
                        <a href="#" class="btn btn-prev">Retour</a>
                        <a href="#" class="btn btn-next">Suivant</a>
                    </div>
                </div>

                <div class=form-step>

                    <div class="input-group">
                        <input type="text" placeholder="comment souhaité vous appeler votre magasin *" name="nom_magasin" />

                    </div>

                    <div class="input-group">
                        <select class="name_x form-control" name="ville_magasin" id="ville_magasin" onchange="FetchVilleMagasin(this.value)">
                            <option class="hidden" selected disabled>
                                Ville où est située votre magasin *
                            </option>

                            <?php foreach (ville::all() as $villes) : ?>

                                <option value="<?= $villes->id ?>">
                                    <?= $villes->nom_ville ?>
                                </option>

                            <?php endforeach ?>

                        </select>
                    </div>

                    <div class="input-group">
                        <select class="form-control" name="commune_magasin" id="commune_magasinM" onchange="FetchCommuneMagasin(this.value)">
                            <option class="hidden" selected disabled>
                                Commune où est située votre magasin *
                            </option>

                        </select>
                    </div>
                    <div class="input-group">
                        <select class="form-control" name="marche_magasin" id="marche_magasinM">
                            <option class="hidden" selected disabled>
                                le marché où est située votre magasin *
                            </option>

                        </select>
                    </div>



                    <div class="btns-group">
                        <a href="#" class="btn btn-prev">Retour</a>
                        <a href="#" class="btn btn-next">Suivant</a>
                    </div>

                </div>


                <div class="form-step">

                    <div class="input-group">
                        <label for="ID">1_ Attestation d'identitée,</label>
                        <input type="file" name="Identite" />
                    </div>
                    <div class="input-group">
                        <label for="ID">2_ document prouvant l'existence
                            du magasin
                            Ex_: facture d'électricité ...</label>
                        <input type="file" name="Idmagasin" />
                    </div>

                    <p class="aver-c">Vos documents ne seront pas rendus public .
                        En cas de perte, ils seront utilisés
                        pour vous
                        aider à restaurer votre compte.
                    </p>

                    <div class="btns-group">
                        <a href="#" class="btn btn-prev">Retour</a>
                        <button type="submit" class="btn btn-danger" id="Formmultiplstep" />Envoyer</button>
                    </div>
                </div>

                <div class="meconnecter">
                    <div class="meconnec-ter">
                        <p class="ins">Tu as déjà un compte ?&nbsp;<a href="connexion.html">Se connecter</a>
                        </p>

                        <p>En créant un compte, vous acceptez les <a href="conditions.html">conditions
                                d'utilisation</a> et l'avis de <a href="conditions.html">confidentialité</a>
                            de
                            market online. (mo.com)</p>
                    </div>
                </div>
            </div>
            <section>


    </form>
</div>