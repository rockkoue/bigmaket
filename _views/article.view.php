<!--Debut carousel-->
<div class="categoriesandarticles__sd">

    <section class="soldheader">
        <div class="subheaderg">
            <div class="subheader">
                <sticky class="subheadersticky">
                    <div class="subhderdetais">
                        <img src="images\user2.png" class="img-thumbnail">
                        <div class="titlex_sxstatut">
                            <div class="titles">
                                <h5>Boutique: <?= $vendeur->nom_magasin ?></h5>
                            </div>
                            <div class="sxstatut">
                                <span class="on_line"></span>
                            </div>
                        </div>
                        <div class="localisation">
                            <i class="fas fa-map-marker-alt"></i>

                            <p><?= (new vendeur())->Getcommune((int)$vendeur->commune_magasin)  ?>,<span> <?= (new vendeur())->Getmarche((int)$vendeur->marche_magasin) ?></span></p>
                        </div>
                    </div>

                    <div class="contactdetails-x">
                        <button class="call"><i class="fas fa-phone-alt"></i> Appeler</button>
                        <button class="texto"><i class="fas fa-comment"></i> Ecrire</button>

                        <a href="javascript:history.back()" class=""><img src="images\shopretour.jpg"></a>
                    </div>
                </sticky>
            </div>
        </div>
    </section>

    <br>

    <section class="carousel-dressing">

        <div class="container">

            <div class="titleandpage__x">
                <div class="titleand__x">
                    <h5> Chemise en solde</h5>
                </div>
                <div class="pageand__x">
                    <a href="#"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="solde-box owl-carousel">

                <div class="cards-box">
                    <div class="img"><img src="images\chaussure.jpg" alt=""></div>

                    <div class="details">
                        <p class="x__nowrap">Chemise marocain</p>
                        <p class="x__nowrap">taille- <span>S,xl</span></p>
                        <p>prix- <span>7000 f cfa</span></p>
                        <p>-<strong>7000 f cfa</strong></p>
                    </div>

                    <div class="like">
                        <i class="fas fa-heart" aria-hidden="true"></i>
                    </div>

                    <div class="solde__star">
                        <p>-50%</p>
                    </div>
                </div>

                <div class="cards-box">
                    <div class="img"><img src="E:\ProjectXX\images\ROBES.jpg" alt=""></div>

                    <div class="details">
                        <p class="x__nowrap">Chemise marocain</p>
                        <p class="x__nowrap">taille- <span>S,xl</span></p>
                        <p>prix- <span>7000 f cfa</span></p>
                        <p>-<strong>7000 f cfa</strong></p>
                    </div>

                    <div class="like">
                        <i class="fas fa-heart" aria-hidden="true"></i>
                    </div>

                    <div class="solde__star">
                        <p>-20%</p>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!--Fin carousel-->


    <!--Debut disposition article-->

    <section class="Dispositions-dressing">

        <div class="container">
            <div class="row">
                <div class="col">

                    <h5>Dressing</h5>
                    <div class="Dispositions-box">

                        <div class="dispo-market">

                            <?php foreach (article::ArticleByIdcat($_GET['id'], $_GET['idcat']) as $categories) : ?>
                                <div class="cardp">
                                    <img src="<?= $categories->image ?>" class="card-img-top">
                                    <div class="card-body">
                                        <div class="detailsA">
                                            <p class="x__nowrap">
                                                <?= $categories->libellearticle ?>
                                            </p>
                                            <p class="x__nowrap">taille- <span><?= $categories->size ?></span></p>
                                            <p>prix- <span><?= $categories->prixarticle ?> f cfa</span></p>
                                            <div style="text-align: center;">
                                                <button class="btn btn-primary"><a href="article.php?idvendeur=<?= $categories->idvendeur ?>&idarticle=<?= $categories->idarticle ?>" style="color: aliceblue; text-decoration:none;">details </a></button>
                                                <button class="btn btn-danger" onclick="add_to_cart(<?= $categories->idarticle ?>)">Ajouter au panier</button>
                                            </div>
                                        </div>
                                        <div class="like-ma">
                                            <div class="like">
                                                <i class="fas fa-heart" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>

                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </section>

    <!--Fin disposition article-->