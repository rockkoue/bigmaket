<!--Debut vue de l'article-->

<div class="article-details">

    <section class="subheaderg">

        <div class="subheader">

            <sticky class="subheadersticky">

                <div class="subhderdetais">


                    <img src="images\user2.png" class="img-thumbnail">

                    <div class="titlex_sxstatut">
                        <div class="titles">
                            <h5>
                                Boutique:
                                <?= $infoarticle->nom_magasin ?>
                            </h5>
                        </div>
                        <div class="sxstatut">
                            <span class="on_line"></span>
                        </div>
                    </div>

                    <div class="localisation">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Yamoussoukro,<span>ablololoololo</span></p>
                    </div>

                </div>

                <div class="contactdetails-x">

                    <button class="call"><i class="fas fa-phone-alt"></i> Appeler</button>
                    <button class="texto"><i class="fas fa-comment"></i> Ecrire</button>

                    <a href="#" class=""><img src="images\shopretour.jpg"></a>

                </div>

            </sticky>

        </div>

    </section>



    <section class="products-details-xh">

        <div class="product-details-boxo">
            <div class="container">
                <div class="pro-wrapperx">
                    <div class="product-boxlep">

                        <div class="all-images-x">

                            <div class="smallxo-images">
                                <img class=" active" src="<?= $infoarticle->image ?>" alt="">
                                <img class="" src="<?= $infoarticle->image2 ?>" alt="">
                                <img class="" src="<?= $infoarticle->image3 ?>" alt="">
                            </div>

                            <div class="main-images-x">
                                <img src="<?= $infoarticle->image ?>" alt="Image To Zoom" class="block__pic">

                            </div>

                        </div>


                        <!--debut responsive vue de l'infoarticle je concidere comme nul(existe pas)-->

                        <div class="all-imgr">

                            <div class="magic_pop">


                                <a href="#popbresp1" class="button">

                                    <div class="main-carousel">
                                        <div class="cell1"> <img class=" active" src="<?= $infoarticle->image ?>" alt="">
                                        </div>
                                        <div class="cell2"><img class="" src="<?= $infoarticle->image2 ?>" alt=""></div>
                                        <div class="cell3"><img class="" src="<?= $infoarticle->image3 ?>" alt=""></div>
                                    </div>

                                </a>


                                <div id="popbresp1" class="overlatbig">

                                    <div class="popbresp">

                                        <a href="#" class="close"><i class="bi bi-x"></i></a>

                                        <div class="main-carousel">
                                            <div class="cell1"> <img class=" active" src="<?= $infoarticle->image ?>" alt=""></div>
                                            <div class="cell2"><img class="" src="<?= $infoarticle->image2 ?>" alt=""></div>
                                            <div class="cell3"><img class="" src="<?= $infoarticle->image3 ?>" alt=""></div>
                                        </div>


                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>

                    <!--fin responsive vue de l'article-->

                    <div class="texxt-box">
                        <div class="titles-articles">
                            <h5>
                                <?= $infoarticle->libellearticle ?>
                            </h5>
                            <p>
                                <?= $infoarticle->description ?>
                            </p>

                            <h1>Prix: <span>
                                    <?= $infoarticle->prixarticle ?> F CFA
                                </span></h1>
                            <div class="hr"></div>

                            <div class="color-content">
                                <h3>Couleurs disponibles</h3>
                                <div class="color-groups">
                                    <h6>Couleur-</h6>

                                    <?php foreach (preg_split("/\,/", $infoarticle->color) as $coulor) : ?>

                                        <?= $coulor ?>

                                    <?php endforeach; ?>


                                </div>


                            </div>
                        </div>
                        <div class="hr"></div>

                        <div class="size-container">
                            <h3 class="title">Tailles disponibles</h3>
                            <div class="sizes">
                                <h6>Taille-</h6>

                                <?php foreach (preg_split("/\,/", $infoarticle->size) as $sizes) : ?>
                                    <span class="size">
                                        <?= strtoupper($sizes)  ?>
                                    </span>
                                <?php endforeach; ?>


                            </div>
                        </div>
                        <div class="hr"></div>

                        <div class="comdes-actions">

                            <button class="livraison">
                                <span class="fas fa-truck-loading"></span>
                                ME FAIRE LIVRER
                            </button>

                            <button class="cart" onclick="add_to_cart(<?= $infoarticle->idarticle ?>)">
                                <span class="fas fa-cart-plus"></span>
                                AJOUTER AU PANIER
                            </button>

                            <div class="like-maxx">
                                <div class="like">
                                    <i class="fas fa-heart" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sendwarapperxo">
                        <div class="icon_wrap"><i class="fas fa-share-alt-square"></i></div>
                        <div class="sendwarapper_ddxo">

                            <ul class="sci">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

</div>

<br>

<!--Fin vue de l'article-->


<!--Debut article Consultés-->

<section class="Dispositions-dressing">

    <div class="container">
        <div class="row">
            <div class="col">
                <h5> Articles Également Consultés</h5>

                <div class="Dispositions-box">

                    <div class="dispo-market">

                        <div class="cardp">
                            <img src="E:\projectxxx\images\ROBES.jpg" class="card-img-top">
                            <div class="card-body">
                                <div class="detailsA">
                                    <p class="x__nowrap">Chemise zara</p>
                                    <p class="x__nowrap">taille- <span>S,mlffffffffffffffffffff</span></p>
                                    <p>prix- <span>7000 000 f cfa</span></p>
                                    <p>-<strong>7000 f cfa</strong></p>
                                </div>
                                <div class="like-ma">
                                    <div class="like">
                                        <i class="fas fa-heart" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cardp">
                            <img src="E:\projectxxx\images\ROBES.jpg" class="card-img-top">
                            <div class="card-body">
                                <div class="detailsA">
                                    <p class="x__nowrap">Chemise zara</p>
                                    <p class="x__nowrap">taille- <span>S,mlffffffffffffffffffff</span></p>
                                    <p>prix- <span>7000 000 f cfa</span></p>
                                    <p>-<strong>7000 f cfa</strong></p>
                                </div>
                                <div class="like-ma">
                                    <div class="like">
                                        <i class="fas fa-heart" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="cardp">
                            <img src="E:\projectxxx\images\ROBES.jpg" class="card-img-top">
                            <div class="card-body">
                                <div class="detailsA">
                                    <p class="x__nowrap">Chemise zara</p>
                                    <p class="x__nowrap">taille- <span>S,mlffffffffffffffffffff</span></p>
                                    <p>prix- <span>7000 000 f cfa</span></p>
                                    <p>-<strong>7000 f cfa</strong></p>
                                </div>
                                <div class="like-ma">
                                    <div class="like">
                                        <i class="fas fa-heart" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="cardp">
                            <img src="E:\projectxxx\images\ROBES.jpg" class="card-img-top">
                            <div class="card-body">
                                <div class="detailsA">
                                    <p class="x__nowrap">Chemise zara</p>
                                    <p class="x__nowrap">taille- <span>S,mlffffffffffffffffffff</span></p>
                                    <p>prix- <span>7000 000 f cfa</span></p>
                                    <p>-<strong>7000 f cfa</strong></p>
                                </div>
                                <div class="like-ma">
                                    <div class="like">
                                        <i class="fas fa-heart" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

            </div>
        </div>
    </div><br>
</section>

<!--fin article Consultés-->

<section class="carouselpub">
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://rukminim1.flixcart.com/image/416/416/av-media/movies/k/q/u/jumbo-original-imadffrusmbghfkr.jpeg?q=70" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://rukminim1.flixcart.com/image/416/416/av-media/movies/k/q/u/jumbo-original-imadffrusmbghfkr.jpeg?q=70" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://rukminim1.flixcart.com/image/416/416/av-media/movies/k/q/u/jumbo-original-imadffrusmbghfkr.jpeg?q=70" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="assorecherche">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Recherches Associées</h2>
                <div class="associate">
                    <p>Chemises</p>
                    <p>Pantalons</p>
                    <p>Collants</p>
                    <p>Chaussures</p>
                </div>
            </div>
        </div>
    </div>
</section>