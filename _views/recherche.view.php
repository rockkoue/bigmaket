<section class="recherche-box">

    <div class="reche__bride">

        <div class="base-resultats">

            <div class="container">

                <div class="name-article">
                    <a href="index.php"><i class="bi bi-house"></i></a><i class="bi bi-chevron-right"></i><span><?= $_POST['q'] ?></span>
                </div>

                <div class="modal-telephone">
                    <a href="#popup2" class="button">
                        <h6></h6>ouvrir la recherche avancée
                    </a>
                    <div id="popup2" class="overlastt">
                        <div class="popups-ux">
                            <h6>Recherche avancée</h6>
                            <a href="#" class="close-ux">&times;</a>
                            <div class="modal-content-r-t">
                                <div class="modal-body-r-t">

                                    <div class="action-base-ux">

                                        <div class="rech-base-ux">

                                            <div class="cartees">
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
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="prix-base-ux">

                                            <div class="prixre">
                                                <div class="card-prixre">
                                                    <div class="card-body">
                                                        <div class="title-prix">Prix souhaiter:</div>
                                                        <div class="prix-r">
                                                            <form action="#">
                                                                <div class="prix-details">
                                                                    <div class="input-box">
                                                                        <input type="number" placeholder="Min" required>
                                                                    </div>
                                                                    <div class="">-</div>
                                                                    <div class="input-box">
                                                                        <input type="number" placeholder="Max" required>
                                                                    </div>
                                                                    <div class="button-prix">
                                                                        <input type="submit" value="OK">
                                                                    </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="rechdesrech">

            <div class="container">

                <div class="row">
                    <div class="col"><br>
                        <h6><span> </span>resultats</h6>

                        <div class="Dispositions-box">

                            <div class="dispo-market">
                                <?php foreach ($data as $recherchedata) : ?>
                                    <div class="cardp">
                                        <img src="<?= $recherchedata['image'] ?>" class="card-img-top">
                                        <div class="card-body">

                                            <div class="detailsA">
                                                <p class="x__nowrap"><?= $recherchedata['libellearticle'] ?></p>
                                                <p class="x__nowrap">taille- <span>
                                                        <?php foreach (preg_split("/\,/", $recherchedata['size']) as $sizes) : ?>
                                                            <span class="size"><?= strtoupper($sizes)  ?></span>
                                                        <?php endforeach; ?></span></p>
                                                <p class="x_nowrap">prix- <span><?= $recherchedata['prixarticle'] ?> F cfa</span></p>
                                                <div style="text-align: center;">
                                                    <button class="btn btn-primary"><a href="article.php?idarticle=<?= $recherchedata['idarticle']  ?>" style="color: aliceblue; text-decoration:none;">details </a></button>
                                                    <button class="btn btn-danger" onclick="add_to_cart(<?= $recherchedata['idarticle'] ?>)">Ajouter au panier</button>
                                                </div>
                                            </div>


                                            <div class="positions">
                                                <span class="">
                                                    <p style="color:black"><?= ' ' . (new article())::GetArticleMarche($recherchedata['idarticle'])  ?>,<?= ' ' . (new article())::GetArticleville($recherchedata['idarticle']) ?></p>
                                                </span>
                                            </div>

                                            <div class="like-ma">
                                                <div class="like">
                                                    <i class="fas fa-heart" aria-hidden="true"></i>
                                                </div>

                                                <div class="solde__star">
                                                    <p>-50%</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>