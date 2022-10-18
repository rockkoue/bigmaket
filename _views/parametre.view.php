<!--Debut Cycle parametre-->
<?php

?>
<section class="parametres-ux">
    <div class="parametres-para-ux">

        <div class="param-boxer-ux">

            <h4>Mes paramètres</h4><br>
            <a href="profile">
                <h6 class="detaitp-ux">Détails du profil</h6><br>
            </a>
            <a href="parametre.php?page=parametrecompte">
                <h6>Paramètres du compte</h6><br>
            </a>
            <a href="#">
                <h6>Notifications</h6><br>
            </a>
            <a href="#">
                <h6>Confidentialité</h6><br>
            </a>
            <a href="securite.php">
                <h6>Sécurite</h6>
            </a>

        </div>

        <div class="param-action-ux">
            <h3>Détails du profil.</h3>
            <form action="_controllers/controlleruser.php?function=updateparametre_user" enctype="multipart/form-data" method="POST" id="formulaireIDuser">
                <div class="card-ux">
                    <div class="title-ux">
                        <h5> Photo de profil </h5>
                    </div>
                    <div><img src="<?= $user->avatar  ?>" class="image-mixi img-thumbnail"></div>

                    <div class="photo-ux">

                        <input type="file" name="avatar" id="">
                    </div>

                </div>
                <div class="card-uxx">
                    <div class="title-ux">
                        <h5> Ta description </h5>
                    </div>

                    <div class="description-ux">
                        <div class="mb-0">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="présente-toi..." name="description"> <?= $user->description ?></textarea>
                        </div>
                    </div>

                </div>


                <div class="card-ux">

                    <div class="title-ux">
                        <h5> Pays </h5>
                    </div>
                    <div> <?= $user->pays ?></div>

                    <div class="position-ux">
                        <select class="form-select" id="validationCustom04" name="pays">
                            <option selected disabled>sélectionner le Pays</option>
                            <option value="cote d'ivoire">Côte d'Ivoire</option>
                            <option value="France">France</option>
                        </select>
                    </div>

                </div>

                <div class="card-ux">

                    <div class="title-ux">
                        <h5> Ville </h5>
                    </div>
                    <div> <?= $user->ville ?></div>

                    <div class="position-ux">
                        <select class="form-select" id="validationCustom04" name="ville">
                            <option selected disabled>sélectionner la Ville</option>
                            <option value="Abidjan">Abidjan</option>
                            <option value="yamoussoukro">yamoussokro</option>
                            <option value="Bouake">Bouake</option>
                            <option value="Bouafle">Bouafle</option>
                        </select>
                    </div>

                </div>

                <div class="card-ux">

                    <div class="title-ux">
                        <h5> Commune </h5>
                    </div>
                    <div> <?= $user->commune ?></div>

                    <div class="position-ux">
                        <select class="form-select" id="validationCustom04" name="commune">
                            <option selected disabled>sélectionner la Commune</option>
                            <option value="Abobo">Abobo</option>
                            <option value="yopougon">yopougon</option>
                            <option value="Adjame">Adjame</option>
                            <option value="cocody">cocody</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-secondary">Mettre à jour</button>

        </div>

        </form>
    </div>

</section>


<!--Fin Cycle parametre-->