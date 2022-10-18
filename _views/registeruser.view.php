<section class="popup__action">

    <div class="popup-screen">
        <div class="popup-box">
            <div class="close-btn">
                <p>NON</p>
            </div>
            <h2>S'inscrire en tant que vendeur ?</h2>
            <a href="registercustomer.php" class="btn">oui</a>
        </div>
    </div>

</section>


<section class="regis-c-user">

    <div class="container register">

        <div class="row">

            <div class="inscript-form-ux">

                <div class="ins-reseaux">

                </div>

                <div>

                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <div class="wapper-ins">

                            <h3> <i class="far fa-envelope"></i> Inscription</h3>

                            <form action="_controllers/controlleruser.php?function=add_user
             " method="POST" id="formulaireIDuser">

                                <div class="row register-form">
                                    <div class="erroremail " role="alert"></div>


                                    <div class="form-group">
                                        <label for="">Nom: </label>
                                        <input type="text" class="form-control" placeholder="Entrer votre Nom *" name="nom" required />
                                    </div>

                                    <div class="form-group">
                                        <label for="">Prenom : </label>
                                        <input type="text" class="form-control" placeholder="Entrer votre Prénom *" name="prenom" required />
                                    </div>

                                    <div class="form-group">
                                        <label for="">Adresse E-mail :</label>
                                        <input type="email" class="form-control" placeholder="Enter votre adresse e-mail *" name="email" required />
                                    </div>

                                    <div class="form-group">
                                        <label for="">Mot de passe :</label>
                                        <input type="password" class="form-control mdp" placeholder="Choisisser un mot de passe *" name="password" required />

                                        <div class="password-icon">
                                            <div class="vuemo">
                                                <i class="far fa-eye"></i>
                                                <i class="far fa-eye-slash"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Confirmer le mot de passe :</label>
                                        <input type="password" class="form-control mdp-conf" placeholder="Confirmer le mot de passe choisir *" required />
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary userinscription">s'enregister</button>
                                    </div>

                                </div>
                            </form>

                            <div class="meconnecter">
                                <p class="ins">Tu as déjà un compte ?&nbsp;<a href="connexion.php">Se connecter</a>
                                </p>

                                <p>En créant un compte, vous acceptez les <a href="conditions.html">conditions
                                        d'utilisation</a> et l'avis de <a href="conditions.html">confidentialité</a>
                                    de
                                    market online. (mo.com)</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    </div>

</section>