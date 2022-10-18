<section class="m-Articles">


    <div class="parametres-para-ux-ligne">

        <div class="param-boxer-ux-ligne">
            <a href="brouillon.php" class="btn btn-outline-info">Brouillon</a>
            <span>9</span>
        </div>
        <div class="param-action-ux">
            <div class="instruction-title">
                <h6>Met ton article en ligne</h6>
            </div>
            <form action="../_controllers/controllerarticle.php?function=add_article" method="POST" id="formulaireID" enctype="multipart/form-data">
                <div class="form-enligne">

                    <p class="title">Ajoute jusqu'à 3 photos.</p>

                    <div class="grid">

                        <div class="form-element">
                            <input type="file" name="image1" id="file-1" accept="image/*">
                            <label for="file-1" id="file-1-preview">
                                <img src="" alt="">
                                <div>
                                    <span>+ Photo 1</span>
                                </div>
                            </label>
                        </div>
                        <div class="form-element">
                            <input type="file" id="file-2" name="image2" accept="image/*">
                            <label for="file-2" id="file-2-preview">
                                <img src="" alt="">
                                <div>
                                    <span>+ Photo 2</span>
                                </div>
                            </label>
                        </div>
                        <div class="form-element">
                            <input type="file" id="file-3" name="image3" accept="image/*">
                            <label for="file-3" id="file-3-preview">
                                <img src="" alt="">
                                <div>
                                    <span>+ Photo 3</span>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>


                <div class="card-ux">

                    <div class="title-ux">
                        <h5> Catégories * </h5>
                    </div>


                    <div class="position-ux">
                        <select class="form-select" id="validationCustom04" name="categorie">
                            <option selected disabled>-sélect... la Catégories -</option>
                            <?php foreach (categorie::all() as $categorie) : ?>
                                <option value="<?= $categorie->idcategorie ?>"><?= $categorie->libellecategorie ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>

                </div>


                <div class="card-ux">

                    <div class="title-ux">
                        <h5> Titre de l'article * </h5>
                    </div>


                    <div class="position-ux">
                        <input class="form-control" type="text" name="libellearticle" placeholder="">

                    </div>

                </div>

                <div class="precision-ligne">
                    <p>Ex: Chemise Italienne , Boubou Marocain , Jean Zara</p>
                </div>

                <div class="card-uxx">
                    <div class="title-ux">
                        <h5>Description  </h5>
                    </div>

                    <div class="description-ux">
                        <div class="mb-0">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="Décrit l'article ..."></textarea>
                        </div>
                    </div>

                </div>

                <div class="card-ux">

                    <div class="title-ux">
                        <h5> Taille  </h5>
                    </div>

                    <div class="position-ux">

                        <select class="mul-select" multiple="true" name="size[]" required>
                            <option>--sélectionner les tailles--</option>
                            <option value="s">S</option>
                            <option value="m">M</option>
                            <option value="l">L</option>
                            <option value="xl">XL</option>
                        </select>

                    </div>

                </div>


                <div class="card-ux">

                    <div class="title-ux">
                        <h5> Couleur </h5>
                    </div>

                    <div class="position-ux">
                        <div class="group-color">
                            <select class="mul-select1" multiple="true" required name="color[]">

                                <option>-sélectionner les couleurs-</option>

                                <option value="blanche" class="color-b">Blanche</option>
                                <option value="noir">Noir <li class="color-item-c" id="black"></li>
                                </option>
                                <option value="rouge">Rouge <li class="color-item-c" id="red"></li>
                                </option>
                                <option value="gris">Bleue <li class="color-item-c" id="blue"></li>
                                </option>


                            </select>

                        </div>
                    </div>
                </div>

                <div class="card-ux">

                    <div class="title-ux">
                        <h5> Prix *</h5>
                    </div>

                    <div class="position-ux">

                        <input class="form-control" name="prix" type="number" placeholder="0.00 Fcfa">

                    </div>
                </div>


                <div class="valider-enligne">

                    <button type="submit" class="btn btn-outline-info">Dans le brouillon</button>

                    <button type="hidden" class="btn btn-secondary">Mettre en ligne</button>
                </div>
            </form>

        </div>

    </div>



</section>