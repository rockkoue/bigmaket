<section class="Actualite-marketx">

    <div class="card-body">
        <i class='bx bxs-down-arrow'></i>L'ACTUALITÉ AVEC MARKET ONLINE<i class='bx bxs-down-arrow'></i>
    </div>

</section>
<section class="corps-publ">


    <div class="container">

        <div class="row">
            <div class="col">

                <div class="card-pub-market">
                    <?php foreach ((new lignecommande)::diffcommande(104) as $data) : ?>

                        <div class="card mb-3">
                            <div class="row g-0">

                                <div class="col-md-12">
                                    <div class="card-body bg-success mb-3">
                                        <h5 class="card-title">Ref commande: code <?= $data['id_commande'] ?></h5>

                                        <?php foreach ((new lignecommande)::Detailcommande(104, $data['id_commande']) as $datas) : ?>
                                            <?php foreach ((new article)::infoarticle($datas['refarticle']) as $libelleproduit) : ?>
                                                <ul class="list-group">
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        <?= ' ' . $libelleproduit->libellearticle ?>
                                                        <span class="badge badge-primary badge-pill"><?= $datas['quantitearticle'] ?></span>
                                                    </li>

                                                </ul>

                                            <?php endforeach ?>

                                        <?php endforeach ?>

                                        <a href="commande.php?idcommande=<?= $data['id_commande'] ?>&page=voir" class="btn btn-primary">Details commande</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach ?>






                </div>
            </div>

        </div>


</section>


<!--Fin corps vendeur premiere page-->