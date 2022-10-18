<!--Fin profil detail-->

<?php $user = user::find($id); ?>

<section class="container" id="PagePrincipal-v">

    <div class="container" id="header">
        <div class="row">
            <div class="col-md-4">
                <img src="<?= $user->avatar  ?>" class="imagesxa img-thumbnail">
            </div>
            <div class="col-md-8">
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <div class="informationsp-v">

                                <div class="information-vx">
                                    <h5>
                                        <?= $user->prenom ?>
                                        <?= strtoupper($user->nom) ?>
                                    </h5>
                                   
                                    <div class="description-uxo">
                                        <h6> Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto sapiente
                                            doloribus beatae amet quisquam perferendis asperiores voluptatibus
                                            consequuntur, similique inventore praesentium repellendus veniam eveniet,
                                            laudantium deserunt. Eveniet rerum ipsum quam.</h6>
                                    </div>

                                    <h2> À propos:</h2>
                                    <p><i class="bi bi-geo-alt"></i>Koumassi, marché de koumassi</p>
                                    <p><i class="bi bi-clock"></i>Connecté il y a 3 heures</p>

                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="vuemagasin-v">
                                <a href="parametre.php?page=parametre">
                                    <button type="button" class="  btn btn-outline-info"> <i class="fas fa-pen"></i>
                                        Modifier</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Fin profil detail-->


<!--Debut responsive-->

<section class="responsive-ut">

    <div class="dedut-para-u">

        <div class="photo-name">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                    <img src="<?= $user->avatar  ?>" class="imagesxar img-thumbnail">
                    </div>
                    <div class="col-8">
                        <div class="name-u">
                        <div class="name-uxo"> 
                            <h5><?= strtoupper($user->nom) ?></h5>
                            <h4><?= $user->prenom ?></h4>
                            <h5>Telephone:<?= $user->telephone ?> </h5>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="descip-u">
            <div class="container">
                <h5>Description :</h5>
                <div class="trai-iu"></div>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur similique veritatis temporibus
                    quasi repudiandae
                    voluptatibus quam in obcaecati deserunt perferendis possimus, tempora ipsa.
                </p>
            </div>
        </div>

            
            
            <div class="container">
                <h5>À propos:</h5>
                <div class="trai-iu"></div>
                <p><i class="bi bi-geo-alt"></i> Koumassi, marché de koumassi</p>
                <p><i class="bi bi-clock"></i> Connecté il y a 3 heures</p>
            </div>
        </div>

        <div class="contac-u">
            <div class="container">
                <br>
                <h5>Détails du profil:</h5>
                <div class="trai-iu"></div>
                <div class="Detailx-p">
                <a href="parametre.php?page=parametre">
                 <button type="button" class="respp-ux btn btn-outline-info"> <i class="fas fa-pen"></i> Modifier les détails du profil</button>
                </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="parametresx">

    <div class="action-statutx">
        55
    </div>

</section>