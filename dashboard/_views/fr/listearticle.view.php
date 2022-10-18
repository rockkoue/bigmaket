<section class="box-brouillons">

    <div class="container">

        <div class="interface">

            <div class="board">
                <table width="100%">

                    <tbody>

                        <div class="brou-ti-no">

                            <div class="title">
                                <h5>Brouillons</h5>
                            </div>
                            <div class="notifct">
                                <span>50+</span>
                            </div>
                        </div>
                        <?php foreach (article::listearticle() as $articles) : ?>
                            <?php if ($articles->idvendeur = $_SESSION['Idvendeur']) : ?>

                                <tr>
                                    <td class="people">
                                        <div> <img src="../<?= $articles->image ?>" alt="" style="width:50px;height:50px;">
                                        </div>
                                        <?php if ($articles->image2 != '') : ?>
                                            <div>
                                                <img src="../<?= $articles->image2 ?>" alt="" style="width:50px;height:50px;">
                                            </div>
                                        <?php endif ?>
                                        <?php if ($articles->image3 != '') : ?>
                                            <div>
                                                <img src="../<?= $articles->image3 ?>" alt="" style="width:50px;height:50px;">
                                            </div>
                                        <?php endif ?>
                                        <div class="people-de">
                                            <h5><?= $articles->libellearticle ?></h5>
                                        </div>
                                    </td>
                                    <td class="action">
                                        <button class="btn btn-info"> <a href="article.php?id-article=<?= $articles->idarticle ?>&page=voir" style="text-decoration: none; color:aliceblue">info</a> </button>
                                        <button class="btn btn-danger">delete</button>
                                        <button class="btn btn-success">Edit</button>
                                        <button class="btn btn-warning">mettre en ligne</button>
                                    </td>
                                </tr>
                            <?php endif ?>
                        <?php endforeach ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>