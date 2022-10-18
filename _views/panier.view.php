<section class="h-100 h-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <form action="_controllers/controllercommande.php?function=add_commande" id="listecommande" method="POST">
                            <div class="row g-0" id="monpanier">
                                <div class="col-lg-8">
                                    <div class="p-5">

                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <h1 class="fw-bold mb-0 text-black">Mon Panier</h1>
                                        </div>
                                        <hr class="my-4">
                                        <?php foreach ((new article())::cartarticle() as $cart_articles) : ?>
                                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img src="../<?= $cart_articles->image ?>" class="img-fluid rounded-3" alt="Cotton T-shirt">
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                    <h6 class="text-muted"><?= $cart_articles->libellearticle ?></h6>
                                                    <h6 class="text-black mb-0"><?= $cart_articles->libellearticle ?></h6>
                                                </div>
                                                <input type="hidden" name="article[]" value="<?= $cart_articles->idarticle ?>">
                                                <div class="col-md-3 col-lg-3 col-xl-3 d-flex">
                                                    <div class="btn  px-2">
                                                        <span class="fas fa-minus" onclick="event.preventDefault();desincrease_quantity(<?= $cart_articles->idarticle ?>)"></span>
                                                    </div>
                                                    <input type="text" value="<?= $_SESSION['cart'][$cart_articles->idarticle] ?>" class="form-control form-control-sm" readonly>
                                                    <input name="quantity[]" value="<?= $_SESSION['cart'][$cart_articles->idarticle] ?>" type="hidden" />
                                                    <div class="btn  px-2">
                                                        <span class="fas fa-plus" onclick="event.preventDefault();increase_quantity(<?= $cart_articles->idarticle ?>)"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h6 class="mb-0"><?= $cart_articles->prixarticle ?> FR</h6>
                                                    <input type="hidden" name="prix[]" value="<?= $cart_articles->prixarticle ?>">
                                                </div>
                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <a class="text-danger"><i class="fas fa-trash fa-lg" onclick="remove_to_cart(<?= $cart_articles->idarticle ?>)"></i></a>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>


                                    </div>
                                </div>

                                <div class="col-lg-4 bg-grey">

                                    <div class="p-5">
                                        <div class="card mb-4 mb-lg-0">
                                            <div class="card-body">
                                                <p><strong>We accept</strong></p>
                                                <img class="me-2" width="45px" src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg" alt="Visa" />
                                                <img class="me-2" width="45px" src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg" alt="American Express" />
                                                <img class="me-2" width="45px" src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg" alt="Mastercard" />

                                            </div>
                                        </div>
                                        <h3 class="fw-bold mb-5 mt-2 pt-1"></h3>

                                        <div class="mb-5">
                                            <div class="form-outline">
                                                <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplea2">code promo</label>
                                            </div>
                                        </div>

                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="text-uppercase">Prix Total</h5>
                                            <h5><?= (new article())::total() ?></h5>
                                            <input type="hidden" name="tolale" value="<?= (new article())::total() ?>">
                                        </div>
                                        <button type="submit" class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark">Valider la commande</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>