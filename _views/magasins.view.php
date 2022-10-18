<section class="infoheader"><br>
    <div class=" container">
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images\MARKET ONLINE.jpg" class="" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images\MARKET ONLINE.jpg" class="" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images\MARKET ONLINE.jpg" class="" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div><br>
</section>

<section class="lesmagasins">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="modal-telephone">
                    <a href="#popup2" class="button">
                        <p>ouvrir la recherche avancée</p>
                    </a>
                    <div id="popup2" class="overlastt">
                        <div class="popups-ux">
                            <h6>Recherche avancée</h6>
                            <a href="#" class="close-ux">&times;</a>
                            <div class="modal-content-r-t">
                                <div class="modal-body-r-t">
                                    <div class="cartes-six">
                                        <div class="card-body">
                                            <form class="select-recherches">
                                                <select class=" select-recherche btn-light" aria-label=".form-select-sm example">
                                                    <option selected>Articles</option>
                                                    <option value="1">Chemise</option>
                                                    <option value="2">Pantalon</option>
                                                    <option value="3">Culotte</option>
                                                </select>

                                                <select class="select-recherche btn-light" aria-label=".form-select-sm example">
                                                    <option selected>Villes</option>
                                                    <option value="1">Abidjan</option>
                                                    <option value="2">Bouake</option>
                                                    <option value="3">Daloa</option>
                                                    <option value="4">Yamoussoukro</option>
                                                </select>

                                                <select class="select-recherche btn-light" aria-label=".form-select-sm example">
                                                    <option selected>Communes</option>
                                                    <option value="1">Abobo</option>
                                                    <option value="2">Adjamé</option>
                                                    <option value="3">Atécoubé</option>
                                                    <option value="4">Cocody</option>
                                                    <option value="4">Koumassi</option>
                                                    <option value="6">Marcory</option>
                                                    <option value="7">Plateau</option>
                                                    <option value="8">Port-Bouet</option>
                                                    <option value="9">Treichville</option>
                                                </select>

                                                <select class="select-recherche btn-light" aria-label=".form-select-sm example">
                                                    <option selected>Marchés</option>
                                                    <option value="1">koumassi(Djassa)</option>
                                                    <option value="2">Marché de marcory</option>
                                                    <option value="3">saint bernadette</option>
                                                </select>

                                                <button id='submit'>Valider</button>

                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="lesmagasins-boxer">

                    <div class="container">
                        <div class="row">
                            <div class="col">

                                <div class="title">
                                    <h5 class="">
                                        <?= count(vendeur::vendeurvalider()) ?> magasins disponibles.
                                    </h5>
                                </div>
                                <div class="debutlM">

                                    <div class="lesmagasin-market">

                                        <?php foreach (vendeur::vendeurvalider() as $magasin) : ?>

                                            <div class="card">
                                                <img src="<?= $magasin->logo_magasin ?>" class="card-img" /></a>
                                                <div class="card-body">
                                                    <div class="index_profile">
                                                        <img src="<?= $magasin->avatar ?>" />
                                                        <div class="titlesM">
                                                            <h6 class="cards-titles ">
                                                                <?= $magasin->non_magasin ?>
                                                            </h6>
                                                            <div class="s_statut">
                                                                <span class="o_nline"></span>
                                                            </div>
                                                        </div>
                                                        <div class="localisation">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                            <p>
                                                                <?= (new vendeur())->Getcommune((int)$magasin->commune_magasin)  ?>,<span>
                                                                    <?= (new vendeur())->Getville((int)$magasin->marche_magasin) ?>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="card-footers">
                                                        <div class="numbers">
                                                            <div class="itemm">

                                                                <rb> <span>120</span>
                                                                    Abonnés </rb>
                                                            </div>
                                                            <div class="traidestrais"></div>
                                                            <div class="itemm">

                                                                <rb><span>4</span>
                                                                    jour sur le site</rb>
                                                            </div>
                                                            <div class="btna">
                                                                <button>S'abonner <i class="abonn_bi bi-bell"></i></button>
                                                            </div>
                                                            <div class="rating">
                                                                <input type="radio" name="star" id="star2"><label for="star2"><i class="far fa-star"></i></label>
                                                                <input type="radio" name="star" id="star2"><label for="star2"><i class="far fa-star"></i></label>
                                                                <input type="radio" name="star" id="star3"><label for="star3"><i class="far fa-star"></i></label>
                                                                <input type="radio" name="star" id="star4"><label for="star4"><i class="far fa-star"></i></label>
                                                                <input type="radio" name="star" id="star5"><label for="star5"><i class="far fa-star"></i></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="magasin.php?id=<?= $magasin->id ?>" type="button">VISITE SES
                                                        ARTICLES</a>
                                                </div>
                                            </div>

                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
</section>




<!-- fin Body -->