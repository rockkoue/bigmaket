<div class="container-fluid">

    <div class="text-center py-5 my-lg-5">
        <div class=" mx-auto mt-lg-20 pt-lg-20">
            <h2>Details articles : <?= $articles->idarticle ?></h2><br>
            <div class="modal-content osahan-item-detail-pop">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="exampleModalLabel"><?= $articles->libellearticle ?></h5>

                </div>
                <div class="modal-body px-3 py-0">
                    <div class="pb-3 position-relative">
                        <div class="position-absolute heart-fav">
                            <a href="#"><i class="mdi mdi-heart"></i></a>
                        </div>
                        <img src="../<?= $articles->image ?>" class="img-fluid col-md-4 p-0 rounded">
                    </div>
                    <?php if ($articles->image2 != '') : ?>
                        <div class="pb-1 position-relative">
                            <div class="position-absolute heart-fav">
                                <a href="#"><i class="mdi mdi-heart"></i></a>
                            </div>
                            <img src="../<?= $articles->image2 ?>" class="img-fluid col-md-1 p-0 rounded">
                        </div>
                    <?php endif ?>
                    <?php if ($articles->image3 != '') : ?>
                        <div class="pb-1 position-relative">
                            <div class="position-absolute heart-fav">
                                <a href="#"><i class="mdi mdi-heart"></i></a>
                            </div>
                            <img src="../<?= $articles->image3 ?>" class="img-fluid col-md-1 p-0 rounded">
                        </div>
                    <?php endif ?>



                    <h4 class="mb-2"><?= $article->libellearticle ?></h4>
                    <div>
                        <h5>taille disponible</h5>
                        <span class="p-1 mb-2 bg-dark text-white">XL</span>
                        <span class="p-1 mb-2 bg-dark text-white">L</span>
                    </div>
                    <div>
                        <h5>couleur disponible</h5>
                        <span class="p-1 mb-2 bg-primary">&nbsp;&nbsp;&nbsp; </span>&nbsp;
                        <span class="p-1 mb-2 bg-danger">&nbsp;&nbsp;&nbsp; </span>&nbsp;
                        <span class="p-1 mb-2 bg-success">&nbsp;&nbsp;&nbsp; </span>

                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <span>Etat actus : </span>
                        <p class="text-danger mb-0">en ligne</p>
                        <p class="bg-primary text-white rounded px-2 py-1 mb-0 small ml-auto">Desactivé</p>
                    </div>
                    <div>
                        <button class="btn btn-primary"> <i class="fas fa-edit" aria-hidden="true"></i> Edit</button>
                        <button class="btn btn-danger"><i class="fas fa-trash" aria-hidden="true"></i>Delete</button>
                    </div>

                </div>
                <div class="modal-footer">
                    <button data-toggle="modal" data-target="#cartModal" class="btn btn-primary btn-block"><?= $articles->prixarticle . ' fr' ?></button>
                </div>
            </div>
        </div>

    </div>
</div>