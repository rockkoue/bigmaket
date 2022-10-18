<!--Debut profil detail-->

<?php $vendeur = vendeur::find($_GET['id']); ?>

<div id="body__x">

    <section class="container" id="PagePrincipal-v">

        <div class="container" id="header">
            <div class="row">
                <div class="col-md-4">
                    <img src="https://thumbor.forbes.com/thumbor/fit-in/416x416/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f4ebe0c87612dab4f12a597%2F0x0.jpg%3Fbackground%3D000000%26cropX1%3D292%26cropX2%3D3684%26cropY1%3D592%26cropY2%3D3987" class="imagesxa img-thumbnail" alt="">

                    <div class="mode_vendeur">
                        <p><span>Ouvert</span></p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <div class="informationsp-v">

                                    <div class="information-vx">
                                        <div class="information-vx-uxo">
                                            <h5>
                                                <?= $vendeur->prenom ?>
                                                <?= $vendeur->nom ?> <i class=" lx fas fa-certificate"></i>
                                            </h5>

                                            <div class="description-uxo">
                                                <h6> Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto
                                                    sapiente
                                                    doloribus beatae amet quisquam perferendis asperiores voluptatibus
                                                    consequuntur, similique inventore praesentium repellendus veniam
                                                    eveniet,
                                                    laudantium deserunt. Eveniet rerum ipsum quam.</h6>
                                            </div>

                                            <h2> À propos:</h2>

                                            <p><i class="bi bi-geo-alt"></i>

                                                <?= ' ' . (new vendeur())->Getmarche((int)$vendeur->marche_magasin) . ' ' ?>,
                                                <?= (new vendeur())->Getcommune((int)$vendeur->commune_magasin)  ?>
                                               

                                            </p>
                                            <p><i class="bi bi-clock"></i>Connecté il y a 3 heures</p>
                                            <p><i class="bi bi-rss"></i><span>0</span> Abonnés </p>

                                            <button id='submit'>S'abonner <i class="abonm bi bi-bell"></i></button>

                                            <?php
                                            /*
                                            if ($_SESSION['Iduser']) {
                                                if ((new abonnement)::checketat($_SESSION['Iduser'], $magasins->id) > 0) {
                                                    echo '<button class="desabonnement " data-id="' . $magasins->id . '">Se desabonner <i class="bi bi-bell-fill"></i></button>';
                                                } else {
                                                    echo '<button class="abonnement abonm bi bi-bell" data-id="' . $magasins->id . '">S\'abonner <i class="abonn_bi bi-bell"></i></button>';
                                                }
                                            } else {
                                                echo '<button class="abonnement abonm bi bi-bell" data-id="' . $magasins->id . '">S\'abonner <i class="abonn_bi bi-bell"></i></button>';
                                            }*/
                                            ?>
                                            <div class="rating-v">
                                                <input type="radio" name="star" id="star1"><label for="star1"><i class="fas fa-star"></i></label>
                                                <input type="radio" name="star" id="star2"><label for="star2"><i class="fas fa-star"></i></label>
                                                <input type="radio" name="star" id="star3"><label for="star3"><i class="fas fa-star"></i></label>
                                                <input type="radio" name="star" id="star4"><label for="star4"><i class="fas fa-star"></i></label>
                                                <input type="radio" name="star" id="star5"><label for="star5"><i class="fas fa-star"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-6">
                                <div class="information-action">

                                    <div class="call-v">
                                        <button type="button" class="call ">
                                            <p><i class="fas fa-phone-alt"></i>Appeler</p>
                                        </button>
                                        <button type="button" class=" texto ">
                                            <p><i class="fas fa-comment"></i>Ecrire</p>
                                        </button>
                                    </div>

                                    <div class="sendwarapper">
                                        <div class="icon_wrap"><button type="button" class="secondary"><i class="fas fa-ellipsis-h"></i></button>
                                            <div class="sendwarapper_dd">
                                                <ul class="sci">
                                                    <li>
                                                        <p>Signaler le compte</p>
                                                    </li>
                                                    <li>
                                                        <p>Bloquer le compte</p>
                                                    </li>
                                                </ul>
                                            </div>

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
                            <img src="https://thumbor.forbes.com/thumbor/fit-in/416x416/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f4ebe0c87612dab4f12a597%2F0x0.jpg%3Fbackground%3D000000%26cropX1%3D292%26cropX2%3D3684%26cropY1%3D592%26cropY2%3D3987" class="images img-thumbnail">

                            <div class="mode_vendeur">
                                <p><span>Ouvert</span></p>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="name-u">

                                <h5>
                                   <?= $vendeur->prenom ?>
                                   <?= $vendeur->nom ?> <i class=" lx fas fa-certificate"></i>
                                </h5>

                                <div class="rating-v">
                                    <input type="radio" name="star" id="star1"><label for="star1"><i class="far fa-star"></i></label>
                                    <input type="radio" name="star" id="star2"><label for="star2"><i class="far fa-star"></i></label>
                                    <input type="radio" name="star" id="star3"><label for="star3"><i class="far fa-star"></i></label>
                                    <input type="radio" name="star" id="star4"><label for="star4"><i class="far fa-star"></i></label>
                                    <input type="radio" name="star" id="star5"><label for="star5"><i class="far fa-star"></i></label>
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

            <div class="apropos-u">
                <div class="container">
                    <h5>À propos :</h5>
                    <div class="trai-iu"></div>
                    <p><i class="bi bi-geo-alt"></i>
                        <?= ' ' . (new vendeur())->Getmarche((int)$vendeur->marche_magasin) . ' ' ?>,
                        <?= (new vendeur())->Getcommune((int)$vendeur->commune_magasin)  ?>


                    </p>
                    <p><i class="bi bi-clock"></i> Connecté il y a 3 heures</p>
                    <p><i class="bi bi-rss"></i> <span>0</span> Abonnés </p>
                </div>
                <?php
                if ($_SESSION['Iduser']) {
                    if ((new abonnement)::checketat($_SESSION['Iduser'], $magasins->id) > 0) {
                        echo '<button class="desabonnement" data-id="' . $magasins->id . '">Se desabonner <i class="bi bi-bell-fill"></i></button>';
                    } else {
                        echo '<button class="abonnement" data-id="' . $magasins->id . '">S\'abonner <i class="abonm bi bi-bell"></i></button>';
                    }
                } else {
                    echo '<button class="abonnement" data-id="' . $magasins->id . '">S\'abonner <i class="abonm bi bi-bell"></i></button>';
                }
                ?>
            </div>

            <div class="contac-u">
                <div class="container">
                    <h5>Contact :</h5>
                    <div class="trai-iu"></div>
                    <div class="call-v">
                        <button type="button" class="call ">
                            <p><i class="fas fa-phone-alt"></i>Appeler</p>
                        </button>
                        <button type="button" class=" texto ">
                            <p><i class="fas fa-comment"></i>Ecrire</p>
                        </button>

                        <div class="sendwarapper_r">
                            <div class="icon__wrap"><button type="button" class="secondary"><i class="fas fa-ellipsis-h"></i></button>
                                <div class="sendwarapper_dd">
                                    <ul class="sci">
                                        <li>
                                            <p>Signaler le compte</p>
                                        </li>
                                        <li>
                                            <p>Bloquer le compte</p>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--fin responsive-->


    <hr>

    <div class="container">
        <div class="vendre-box-v">
            <div class="card">
                <div class="card-body">
                    <h5 id="titles-x">Vous êtes dans la boutique : <span>
                            <?= ' ' . $vendeur->nom_magasin ?>
                        </span> </h5>
                </div>

                <div class="map_x">

                    <a href="#modal_map1" class="button">
                        <img src="images\maps.jpg">
                    </a>

                    <div id="modal_map1" class="overlat_map">
                        <div class="map_pop">
                            <a href="#" class="map_close">&times;</a>
                            <div class="map_content">
                                <div id="map"></div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <hr>



    <!--Debut carousel solde-->

    <section class="Dispositions-solde">

        <div class="container">

            <div class="titleandpage__x">
                <div class="titleand__x">
                    <h5>En solde</h5>
                </div>
                <div class="pageand__x">
                    <a href="#"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="solde-box owl-carousel">
                <div class="cards-box">
                    <div class="img"><img src="https://rukminim1.flixcart.com/image/416/416/av-media/movies/k/q/u/jumbo-original-imadffrusmbghfkr.jpeg?q=70" alt=""></div>

                    <div class="details">
                        <p class="x__nowrap">chemise marocain</p>
                        <p class="x__nowrap">taille- <span>S,m,xl</span></p>
                        <p>prix- <span>7000 f cfa </span></p>
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
                    <div class="img"><img src="https://rukminim1.flixcart.com/image/416/416/av-media/movies/k/q/u/jumbo-original-imadffrusmbghfkr.jpeg?q=70" alt=""></div>

                    <div class="details">
                        <p class="x__nowrap">chemise marocain</p>
                        <p class="x__nowrap">taille- <span>S,m,xl</span></p>
                        <p>prix- <span>7000 f cfa </span></p>
                    </div>

                    <div class="like">
                        <i class="fas fa-heart" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="cards-box">
                    <div class="img"><img src="https://rukminim1.flixcart.com/image/416/416/av-media/movies/k/q/u/jumbo-original-imadffrusmbghfkr.jpeg?q=70" alt=""></div>

                    <div class="details">
                        <p class="x__nowrap">chemise marocain</p>
                        <p class="x__nowrap">taille- <span>S,m,xl</span></p>
                        <p>prix- <span>7000 f cfa </span></p>
                    </div>

                    <div class="like">
                        <i class="fas fa-heart" aria-hidden="true"></i>
                    </div>
                </div>

            </div>
        </div>


    </section>


    <!--fin carousel solde-->



    <!--Debut Categories-->

    <section class="tiroir-v">

        <div class="container">
            <h5> Dressing par Categories</h5>
            <div class="row" id="cardMe-v">
                <?php foreach (article::CategorieByIdIvendeur((int)$_GET['id']) as $categories) : ?>


                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card">
                            <div class="tete card-header">
                                <?= $categories->libellecategorie ?>
                            </div>
                            <div class="card-body">
                                <img class="card-img-top img-fluid" src="https://rukminim1.flixcart.com/image/416/416/av-media/movies/k/q/u/jumbo-original-imadffrusmbghfkr.jpeg?q=70" alt="Card image cap">
                            </div>
                            <a href="magasin.php?id=<?= $vendeur->id ?>&idcat=<?= $categories->idcategorie ?>" style="text-align: center;">voir les
                                articles</a>
                        </div>
                    </div>
                <?php endforeach ?>

            </div>
        </div>

    </section>

    <!--fin Categories-->
</div>