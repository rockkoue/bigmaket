<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3 col-xs-12 col-sm-6">
                    <a class="info-tiles tiles-toyo" href="vendeur.php">
                        <div class="tiles-heading">vendeur </div>
                        <div class="tiles-body-alt">
                            <!--i class="fa fa-bar-chart-o"></i-->
                            <div class="text-center"><span class="text-top"></span><?= count((new vendeur)::all()) ?></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-6">
                    <a class="info-tiles tiles-success" href="vendeur.php?vendeurencour=ok">
                        <div class="tiles-heading">vendeur en cour </div>
                        <div class="tiles-body-alt">
                            <div class="text-center"><span class="text-top"></span><?= count((new vendeur)::vendeurencour()) ?><span class="text-smallcaps"></span></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-6">
                    <a class="info-tiles tiles-orange" href="article.php">
                        <div class="tiles-heading">Article</div>
                        <div class="tiles-body-alt">
                            <i class="fa fa-group"></i>
                            <div class="text-center">109</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-6">
                    <a class="info-tiles tiles-alizarin" href="user.php">
                        <div class="tiles-heading">Utilisateur</div>
                        <div class="tiles-body-alt">
                            <i class="fa fa-shopping-cart"></i>
                            <div class="text-center"><?= count((new user())->all()) ?></div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-md-3 col-sm-6 col-lg-3">
            <a class="info-tiles tiles-alizarin" href="comment.php">
                <div class="tiles-heading">
                    <div class="pull-left">Comments</div>
                </div>
                <div class="tiles-body">
                    <div class="pull-left"><i class="fa fa-comments-o"></i></div>
                    <div class="pull-right">
                        <div id="indexinfocomments" style="margin-top: 10px; margin-bottom: -10px;"></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-md-3 col-sm-6 col-lg-3">
            <a class="info-tiles tiles-orange" href="like.php">
                <div class="tiles-heading">
                    <div class="pull-left">Likes</div>
                </div>
                <div class="tiles-body">
                    <div class="pull-left"><i class="fa fa-thumbs-o-up"></i></div>
                    <div class="pull-right">
                        <div id="indexinfolikes" style="margin-top: 10px; margin-bottom: -10px;"></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-md-3 col-sm-6 col-lg-3">
            <a class="info-tiles tiles-success" href="abonne.php">
                <div class="tiles-heading">
                    <div class="pull-left">Abonnes</div>

                </div>
                <div class="tiles-body">
                    <div class="pull-left"><i class="fa fa-check"></i></div>
                    <div class="pull-right">37</div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-md-3 col-sm-6 col-lg-3">
            <a class="info-tiles tiles-toyo" href="commande.php">
                <div class="tiles-heading">
                    <div class="pull-left">commande livrer</div>
                </div>
                <div class="tiles-body">
                    <div class="pull-left"><i class="fa fa-download"></i></div>
                    <div class="pull-right">3<span class="text-smallcaps">k</span></div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-md-3 col-sm-6 col-lg-3">
            <a class="info-tiles tiles-toyo" href="commande.php">
                <div class="tiles-heading">
                    <div class="pull-left">commande en cours</div>
                </div>
                <div class="tiles-body">
                    <div class="pull-left"><i class="fa fa-download"></i></div>
                    <div class="pull-right">67<span class="text-smallcaps"></span></div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-md-3 col-sm-6 col-lg-3">
            <a class="info-tiles tiles-toyo" href="vente.php">
                <div class="tiles-heading">
                    <div class="pull-left">montant des ventes globals</div>
                </div>
                <div class="tiles-body">
                    <div class="pull-left"><i class="fa fa-download"></i></div>
                    <div class="pull-right">67<span class="text-smallcaps"></span></div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-6">
            <a class="info-tiles tiles-alizarin" href="user.php?userencour=ok">
                <div class="tiles-heading">Utilisateur en cours</div>
                <div class="tiles-body-alt">
                    <i class="fa fa-shopping-cart"></i>
                    <div class="text-center"><?= count((new user)::userencour()) ?></div>
                </div>
            </a>
        </div>


    </div>

</div> <!-- container -->