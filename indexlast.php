<?php
include '_class/config.php';
include "_constantes/constantes.php";
include "_functions/functions.php";
spl_autoload_register(function ($class) {
  include "_class/" . $class . ".php";
});

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Bienvenue sur mo</title>

  <!--Google foont -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">


  <!--css link -->
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" href="E:\ProjectXX\images\iconl.jpeg">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <!--bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

  <!--pour la barre de recherche a l'acceuil -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!--footer-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--script link-->
  <script src='https://code.jquery.com/jquery-1.12.4.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>
  <script src="script.js"></script>
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>


<!--debut de la barre de navigation-->
<section id="navigationx">
    <sticky class="capou">
        <input type="checkbox" id="check">
        <navbar class="indexnav">

            <div class="monlogo">
                <a href="index.html">
                    <img src="E:\projectxxx\images\LOGO 2.jpeg" class="logox1">
                    <img src="E:\projectxxx\images\WhatsApp Image 2021-10-10 at 11.38.03.jpeg" class="logox2">
                </a>
            </div>

            <div class="super-traits"></div>

            <div class="magasin-t-btn">
                <a class="  btn btn-warning" href="lesmagasins.html">Tous les Magasins</a>
            </div>

            <div class="wrapper-index">
                <form autocomplete="off">
                    <input type="text" id="input" placeholder="Rechercher des articles.." />
                    <ul class="list"></ul>
                    <div class="icon"><i class="fas fa-search"></i></div>
                </form>

            </div>

            <ol>
                <ul>
                    <li id="login-tech" class="login-dec">
                        <div class="log-dropdown-1">
                            <a class=" btn btn-outline-light dropdown-toggle" href="#">
                                <i class="fas fa-user-circle fa"></i>
                            </a>

                            <div class="log-content">
                                <a href="utilisateur.html.html">S'inscrire</a>
                                <a href="connexion.html">Se connecter</a>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="log-responsive">
                            <div class="btn-outline-success log-content-p">
                                <a href="utilisateur.html.html">S'inscrire<a> |
                                        <a href="connexion.html">Se connecter</a>
                            </div>
                        </div>
                        <br>
                    </li>

                    <li class="login-vendeur">
                        <div class="btn-success login-vendeurx">
                            <a href="vendeur.html">Devenez vendeur</a>
                        </div>
                    </li>

                    <li class="socialx">
                        <h6>Nos réseaux sociaux: </h6>
                        <ul class="socialx-box">
                            <th><a href="#"><i class="fab fa-facebook-f"></i></a></th>
                            <th><a href="#"><i class="fab fa-twitter"></i></a></th>
                            <th><a href="#"><i class="fab fa-instagram"></i></a></th>
                        </ul>
                    </li>

                </ul>

                <li class="panier-check">
                    <a class="btn btn-outline-light" href="utilisateur.html.html"><i class="bi bi-cart2"></i></a>
                </li>

            </ol>

            <label for="check" class="bar-close">
                <span class="fa fa-align-right " id="bars"></span>
                <span class="fa fa-times " id="times"></span>
            </label>

        </navbar>
    </sticky>
</section>

<!--fin de la barre de navigation-->

<!--debut de la deuxiemme barre de navigation-->

<section class="navinferieurindex navbar-light bg-light">

    <navbar class="infernav">
        <ol>
            <div class="container-xcroll">
                <div class="horizontal-scroll">
                    <button class="btsx btn-scroll" id="btn-scroll-left" onclick="scrollhorizontally(1)"><i
                            class="fas fa-angle-left"></i></button>
                    <button class="btsy btn-scroll" id="btn-scroll-right" onclick="scrollhorizontally(-1)"><i
                            class="fas fa-angle-right"></i></button>

                    <div class="storys-container">

                        <li class="actx jourx-m">
                            <a class="story-circle btn btn-light" href="Jmarche.html">Jour de Marché</a>
                        </li>

                        <li class="actx offresx-m">
                            <a class="story-circle btn btn-light" href="offrejour.html">Offres du Jour</a>
                        </li>

                        <li class="actx forum-x">
                            <a class="story-circle btn btn-light" href="solutionr.html"> Space Forum </a>
                        </li>
                    </div>
                </div>
            </div>
        </ol>
        <ul>
            <div class="langmenu">
                <div class="select-langmenu">
                    <select>
                        <option value="Francais">Francais</option>
                        <option value="Anglais">Anglais</option>
                        <option value="Arabe">Arabe</option>
                    </select>
                </div>
            </div>

            <div class="aidesindex">
                <button class="view-modal"><i class="bi bi-question-square"></i></button>
                <div class="fixeds">
                    <div class="popup">
                        <header>
                            <span>Réponses instantanées</span>
                            <div class="close"><i class="far fa-times-circle"></i></div>
                        </header>
                        <div class="scroll-bg">
                            <div class="scroll-class">
                                <div class="reponsesinstantane">
                                    <div class="accordion">
                                        <div class="accordion-item">
                                            <div class="accordion-item-header">
                                                Comment fonctionne Market Onlile ?
                                            </div>
                                            <div class="accordion-item-body">
                                                <div class="accordion-item-body-content">
                                                    bla
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-item-header">
                                                Comment effectuer un achat sur Market Online ?
                                            </div>
                                            <div class="accordion-item-body">
                                                <div class="accordion-item-body-content">
                                                    nnnnnn
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-item-header">
                                                Pourquoi Market Online est un site sûre pour vos achats ?
                                            </div>
                                            <div class="accordion-item-body">
                                                <div class="accordion-item-body-content">
                                                    hh
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-item-header">
                                                Comment faire de la publicité sur Market Online ?
                                            </div>
                                            <div class="accordion-item-body">
                                                <div class="accordion-item-body-content">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-item-header">
                                                Comment devenir vendeur sur Market Online ?
                                            </div>
                                            <div class="accordion-item-body">
                                                <div class="accordion-item-body-content">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <p> Pour d'autre préoccupation, vous pouvez aussi nous contacter sur nos réseaux sociaux ou
                                applications.
                            </p>
                            <ul class="icons">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                            </ul>
                            <p></p>
                            <div class="field">
                                <i class="url-icon uil uil-link"></i>
                                <input type="text" readonly value="Achète partout et tout en un clic.">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </ul>

    </navbar>

</section>

<!--fin de la deuxieme barre de navigation-->

<!--debut carousel-->
<section class="pubindex">

    <div class="publiciteindex">
        <div class="container mt-3">
            <div class="owl-carousel owl-theme">
                <div class="ms-2 me-2">
                    <div class="cardp">
                        <img src="E:\projectxxx\images\chaussure.jpg" class="card-img-top">
                        <div class="card-body">
                            <div class="detailsA">
                                <p>robe</p>
                                <p>taile-M</p>
                                <p>prix : <span>7000 f cfa</span></p>
                            </div>
                            <div class="positions">
                                <span class="">koumassi,Abidjan</span>
                            </div>
                            <div class="like">
                                <i class="fas fa-heart" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-2 me-2">
                    <div class="cardp">
                        <img src="C:\Users\jahou\Desktop\ProjectX\images\6-e1548956949719.jpg" class="card-img-top">
                        <div class="card-body">
                            <div class="detailsA">
                                <p>collant</p>
                                <p>taile-M</p>
                                <p>prix : <span>2500 f cfa</span></p>
                            </div>
                            <div class="positions">
                                <span class="">koumassi,Abidjan</span>
                            </div>
                            <div class="like">
                                <i class="fas fa-heart" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-2 me-2">
                    <div class="cardp">
                        <img src="E:\ProjectX\images\WhatsApp Image 2021-11-12 at 00.22.12.jpeg" class="card-img-top">
                        <div class="card-body">
                            <div class="detailsA">
                                <p>chaussure</p>
                                <p>taile-M</p>
                                <p>prix : <span>7000 f cfa</span></p>
                            </div>
                            <div class="positions">
                                <span class="rot">koumassi,Abidjan</span>
                            </div>
                            <div class="like">
                                <i class="fas fa-heart" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-2 me-2">
                    <div class="cardp">
                        <img src="C:\Users\jahou\Desktop\ProjectX\images\G_78436179_320_VPP_1.jpg" class="card-img-top">
                        <div class="card-body">
                            <div class="detailsA">
                                <p>robe</p>
                                <p>taile-M</p>
                                <p>prix : <span>7000 f cfa</span></p>
                            </div>
                            <div class="positions">
                                <span class="">koumassi,Abidjan</span>
                            </div>
                            <div class="like">
                                <i class="fas fa-heart" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-2 me-2">
                    <div class="cardp">
                        <img src="C:\Users\jahou\Desktop\ProjectX\images\598342CZ_RGB.jfif" class="card-img-top">
                        <div class="card-body">
                            <div class="detailsA">
                                <p>robe</p>
                                <p>taile-M</p>
                                <p>prix : <span>7000 f cfa</span></p>
                            </div>
                            <div class="positions">
                                <span class="">Yamoussoukro,Abidjan</span>
                            </div>
                            <div class="like">
                                <i class="fas fa-heart" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-2 me-2">
                    <div class="cardp">
                        <img src="C:\Users\jahou\Desktop\ProjectX\images\598342CZ_RGB.jfif" class="card-img-top">
                        <div class="card-body">
                            <div class="detailsA">
                                <p>robe</p>
                                <p>taile-M</p>
                                <p>prix : <span>7000 f cfa</span></p>
                            </div>
                            <div class="positions">
                                <span class="">Yamoussoukro,Abidjan</span>
                            </div>
                            <div class="like">
                                <i class="fas fa-heart" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-2 me-2">
                    <div class="cardp">
                        <img src="C:\Users\jahou\Desktop\ProjectX\images\598342CZ_RGB.jfif" class="card-img-top">
                        <div class="card-body">
                            <div class="detailsA">
                                <p>robe</p>
                                <p>taile-M</p>
                                <p>prix : <span>7000 f cfa</span></p>
                            </div>
                            <div class="positions">
                                <span class="">Yamoussoukro,Abidjan</span>
                            </div>
                            <div class="like">
                                <i class="fas fa-heart" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-2 me-2">
                    <div class="cardp">
                        <img src="E:\ProjectXX\images\SacMain-intro.jpg" class="card-img-top">
                        <div class="card-body">
                            <div class="detailsA">
                                <p>robe</p>
                                <p>taile-M</p>
                                <p>prix : <span>7000 f cfa</span></p>
                            </div>
                            <div class="positions">
                                <span class="">koumassi,Abidjan</span>
                            </div>
                            <div class="like">
                                <i class="fas fa-heart" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--fin carousel-->

<div id=barres>

    <section id=rech-g-box>

        <div class="rechercheindex">
            <div class="container">
                <h4>Recherche Avancée</h4>
                <div class="row">
                    <div class="col">
                        <div class="modal-telephone">
                            <button id="btn">ouvrir la recherche avancée</button>
                            <div id="modal-r-t">
                                <div class="modal-content-r-t">
                                    <div class="modal-header-r-t">
                                        <h2>Recherche Avancée</h2>
                                        <span class="close-btn">&times;</span>
                                    </div>
                                    <div class="modal-body-r-t">
                                        <div class="cartes-six">
                                            <div class="card-body">
                                                <form class="select-recherches" action="_controllers/controllerrecherchemagasin.php" method="post">
                                                    <select class=" select-recherche btn-light" aria-label=".form-select-sm example">
                                                      <option name="categoriearticle" class="hidden" selected disabled>type d'Articles</option>
                                                      <?php foreach (categorie::all() as $categories) : ?>
                                                        <option value="<?= $categories->id ?>"><?= $categories->libellecategorie ?></option>
                                                      <?php endforeach ?>
                                  
                                                    </select>
                                                    <select class="select-recherche btn-light" aria-label=".form-select-sm example">
                                  
                                                      <option class="hidden" selected disabled>Villes</option>
                                                      <?php foreach (ville::all() as $villes) : ?>
                                                        <option value="<?= $villes->id ?>"><?= $villes->nom_ville ?></option>
                                                      <?php endforeach ?>
                                                    </select>
                                  
                                                    <select class="select-recherche btn-light" aria-label=".form-select-sm example">
                                                      <option class="hidden" selected disabled>Marché</option>
                                                      <?php foreach (marche::all() as $marches) : ?>
                                                        <option value="<?= $marches->id ?>"><?= $marches->nom_marche ?></option>
                                                      <?php endforeach ?>
                                                    </select>
                                                    <select class="select-recherche btn-light" aria-label=".form-select-sm example">
                                                      <option class="hidden" selected disabled>Commune</option>
                                                      <?php foreach (commune::all() as $communes) : ?>
                                                        <option value="<?= $communes->id ?>"><?= $communes->nom_commune ?></option>
                                                      <?php endforeach ?>
                                                    </select>
                                  
                                                    <button type="submit" id='submit'>Valider</button>
                                            </div>
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

</section>

<!--fin de la recherche avancee-->


<!--debut top magasin-->

<section class="Topm-Publ-box">

    <div class="container">
        <div class="row">
            <div class="col">
                <hr>
                <div class="TopmIndex">
                    <div class="title">
                        <h5 class="">Top Magasins</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-lg-6">

                            <div class="information">
                                <div class="ribbon">
                                    <span>-15%</span>
                                </div>
                                <div class="recompense-tag">
                                    <span><i class="fas fa-certificate"></i></span>
                                </div>
                                <div class="card">
                                    <a href="www.coin.com"><img
                                            src="https://rukminim1.flixcart.com/image/416/416/av-media/movies/k/q/u/jumbo-original-imadffrusmbghfkr.jpeg?q=70"
                                            class="card-img" alt="..." /></a>
                                    <div class="card-body">
                                        <div class="index_profile">
                                            <img src="https://thumbor.forbes.com/thumbor/fit-in/416x416/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f4ebe0c87612dab4f12a597%2F0x0.jpg%3Fbackground%3D000000%26cropX1%3D292%26cropX2%3D3684%26cropY1%3D592%26cropY2%3D3987"
                                                alt="...." />
                                            <div class="titlesM">
                                                <h6 class="cards-titles">Planette de la mode <span
                                                        class="online"></span></h6>
                                            </div>
                                            <div class="localisation">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <p>koumassi,<span>Abidjan</span></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="card-footers">
                                            <div class="numbers">
                                                <div class="itemm">
                                                    <i class="fas fa-rss-square"></i>
                                                    <span>120</span>
                                                    Abonnés
                                                </div>
                                                <div class="borders"></div>
                                                <div class="itemm">
                                                    <i class="fas fa-clock"></i>
                                                    <span>4</span>
                                                    jour sur le site
                                                </div>
                                                <div class="btna">
                                                    <button>S'abonner</button>
                                                </div>
                                                <div class="rating">
                                                    <input type="radio" name="star" id="star1"><label for="star1"><i
                                                            class="fas fa-star"></i></label>
                                                    <input type="radio" name="star" id="star2"><label for="star2"><i
                                                            class="fas fa-star"></i></label>
                                                    <input type="radio" name="star" id="star3"><label for="star3"><i
                                                            class="fas fa-star"></i></label>
                                                    <input type="radio" name="star" id="star4"><label for="star4"><i
                                                            class="far fa-star"></i></label>
                                                    <input type="radio" name="star" id="star5"><label for="star5"><i
                                                            class="far fa-star"></i></label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btnvisite">VISITE SES ARTICLES</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-6">
                            <div class="information">
                                <div class="ribbon">
                                    <span>-15%</span>
                                </div>
                                <div class="recompense-tag">
                                    <span><i class="fas fa-certificate"></i></span>
                                </div>
                                <div class="card">
                                    <a href="www.coin.com"><img
                                            src="https://rukminim1.flixcart.com/image/416/416/av-media/movies/k/q/u/jumbo-original-imadffrusmbghfkr.jpeg?q=70"
                                            class="card-img" alt="..." /></a>
                                    <div class="card-body">
                                        <div class="index_profile">
                                            <img src="https://thumbor.forbes.com/thumbor/fit-in/416x416/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f4ebe0c87612dab4f12a597%2F0x0.jpg%3Fbackground%3D000000%26cropX1%3D292%26cropX2%3D3684%26cropY1%3D592%26cropY2%3D3987"
                                                alt="...." />
                                            <div class="titlesM">
                                                <h6 class="cards-titles">Planette de la mode <span
                                                        class="online"></span></h6>
                                            </div>
                                            <div class="localisation">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <p>koumassi,<span>Abidjan</span></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="card-footers">
                                            <div class="numbers">
                                                <div class="itemm">
                                                    <i class="fas fa-rss-square"></i>
                                                    <span>120</span>
                                                    Abonnés
                                                </div>
                                                <div class="borders"></div>
                                                <div class="itemm">
                                                    <i class="fas fa-clock"></i>
                                                    <span>4</span>
                                                    jour sur le site
                                                </div>
                                                <div class="btna">
                                                    <button>S'abonner</button>
                                                </div>
                                                <div class="rating">
                                                    <input type="radio" name="star" id="star1"><label for="star1"><i
                                                            class="fas fa-star"></i></label>
                                                    <input type="radio" name="star" id="star2"><label for="star2"><i
                                                            class="fas fa-star"></i></label>
                                                    <input type="radio" name="star" id="star3"><label for="star3"><i
                                                            class="fas fa-star"></i></label>
                                                    <input type="radio" name="star" id="star4"><label for="star4"><i
                                                            class="far fa-star"></i></label>
                                                    <input type="radio" name="star" id="star5"><label for="star5"><i
                                                            class="far fa-star"></i></label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btnvisite">VISITE SES ARTICLES</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-6">
                            <div class="information">
                                <div class="ribbon">
                                    <span>-15%</span>
                                </div>
                                <div class="recompense-tag">
                                    <span><i class="fas fa-certificate"></i></span>
                                </div>

                                <div class="card">
                                    <a href="www.coin.com"><img
                                            src="https://rukminim1.flixcart.com/image/416/416/av-media/movies/k/q/u/jumbo-original-imadffrusmbghfkr.jpeg?q=70"
                                            class="card-img" alt="..." /></a>
                                    <div class="card-body">
                                        <div class="index_profile">
                                            <img src="https://thumbor.forbes.com/thumbor/fit-in/416x416/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f4ebe0c87612dab4f12a597%2F0x0.jpg%3Fbackground%3D000000%26cropX1%3D292%26cropX2%3D3684%26cropY1%3D592%26cropY2%3D3987"
                                                alt="...." />
                                            <div class="titlesM">
                                                <h6 class="cards-titles">Planette de la mode <span
                                                        class="online"></span></h6>
                                            </div>
                                            <div class="localisation">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <p>koumassi,<span>Abidjan</span></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="card-footers">
                                            <div class="numbers">
                                                <div class="itemm">
                                                    <i class="fas fa-rss-square"></i>
                                                    <span>120</span>
                                                    Abonnés
                                                </div>
                                                <div class="borders"></div>
                                                <div class="itemm">
                                                    <i class="fas fa-clock"></i>
                                                    <span>4</span>
                                                    jour sur le site
                                                </div>
                                                <div class="btna">
                                                    <button>S'abonner</button>
                                                </div>
                                                <div class="rating">
                                                    <input type="radio" name="star" id="star1"><label for="star1"><i
                                                            class="fas fa-star"></i></label>
                                                    <input type="radio" name="star" id="star2"><label for="star2"><i
                                                            class="fas fa-star"></i></label>
                                                    <input type="radio" name="star" id="star3"><label for="star3"><i
                                                            class="fas fa-star"></i></label>
                                                    <input type="radio" name="star" id="star4"><label for="star4"><i
                                                            class="far fa-star"></i></label>
                                                    <input type="radio" name="star" id="star5"><label for="star5"><i
                                                            class="far fa-star"></i></label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btnvisite">VISITE SES ARTICLES</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-6">
                            <div class="information">
                                <div class="ribbon">
                                    <span>-15%</span>
                                </div>
                                <div class="recompense-tag">
                                    <span><i class="fas fa-certificate"></i></span>
                                </div>

                                <div class="card">
                                    <img src="https://rukminim1.flixcart.com/image/416/416/av-media/movies/k/q/u/jumbo-original-imadffrusmbghfkr.jpeg?q=70"
                                        class="card-img" alt="..." /></a>
                                    <div class="card-body">
                                        <div class="index_profile">
                                            <img src="https://thumbor.forbes.com/thumbor/fit-in/416x416/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f4ebe0c87612dab4f12a597%2F0x0.jpg%3Fbackground%3D000000%26cropX1%3D292%26cropX2%3D3684%26cropY1%3D592%26cropY2%3D3987"
                                                alt="...." />
                                            <div class="titlesM">
                                                <h6 class="cards-titles">Planette de la mode <span
                                                        class="online"></span></h6>
                                            </div>
                                            <div class="localisation">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <p>koumassi,<span>Abidjan</span></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="card-footers">
                                            <div class="numbers">
                                                <div class="itemm">
                                                    <i class="fas fa-rss-square"></i>
                                                    <span>120</span>
                                                    Abonnés
                                                </div>
                                                <div class="borders"></div>
                                                <div class="itemm">
                                                    <i class="fas fa-clock"></i>
                                                    <span>4</span>
                                                    jour sur le site
                                                </div>
                                                <div class="btna">
                                                    <button>S'abonner</button>
                                                </div>
                                                <div class="rating">
                                                    <input type="radio" name="star" id="star1"><label for="star1"><i
                                                            class="fas fa-star"></i></label>
                                                    <input type="radio" name="star" id="star2"><label for="star2"><i
                                                            class="fas fa-star"></i></label>
                                                    <input type="radio" name="star" id="star3"><label for="star3"><i
                                                            class="fas fa-star"></i></label>
                                                    <input type="radio" name="star" id="star4"><label for="star4"><i
                                                            class="far fa-star"></i></label>
                                                    <input type="radio" name="star" id="star5"><label for="star5"><i
                                                            class="far fa-star"></i></label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btnvisite">VISITE SES ARTICLES</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="top">
                            <a href="topmagasinss.html">
                                <button>Plus de magasins</button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <!--fin top magasin-->


            <!--debut publicite-->

            <div class="col-4">

                <div class="droite">
                    <div class="row">
                        <div class="swatt">
                            <a href="solutionr.html">
                                <h6>Solution Rapide</h6>
                            </a>
                        </div>
                        <div class="col">
                            <img src="E:\ProjectXX\images\ILLUSTRATION 1.jpg">
                        </div>
                        <div class="col">
                            <img src="E:\ProjectXX\images\ILLUSTRATION 2.jpg">
                        </div>
                        <div class="col">
                            <img src="E:\ProjectXX\images\ILLUSTRATION1.jpg">
                        </div>
                    </div>
                </div>
                <br>
                <div class="lapub">
                    <a href="E:\ProjectXX\georges\adompo\vuedelarticle.html">
                        <h6>Publicité avec Market Online</h6>
                    </a>
                </div>
                <br>
                <div class="cardre">
                    <div class="card-body">
                        <h6>Nos Réseaux Sociaux</h6>
                        <div class="btnRow">
                            <a href="https://fr-fr.facebook.com/" class="=btn btnGroup">
                                <img src="https://image.flaticon.com/icons/png/512/733/733547.png" />
                                <!--fac-->
                            </a>
                            <a href="https://accounts.google.com/signin/v2/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                                class="=btn btnGroup">
                                <img src="https://cdn-icons-png.flaticon.com/512/1409/1409937.png" />
                                <!--goo-->
                            </a>
                            <a href="https://www.linkedin.com/uas/login?session_redirect=%2Foauth%2Fv2%2Flogin-success%3Fapp_id%3D4238991%26auth_type%3DAC%26flow%3D%257B%2522authorizationType%2522%253A%2522OAUTH2_AUTHORIZATION_CODE%2522%252C%2522redirectUri%2522%253A%2522https%253A%252F%252Fpassport.alibaba.com%252Foauth_sign.htm%253Ftype%253Dlinkedin%2526return_url%253Dhttps%25253A%25252F%25252Flogin.alibaba.com%25252Fauto_login.htm%2522%252C%2522currentStage%2522%253A%2522LOGIN_SUCCESS%2522%252C%2522currentSubStage%2522%253A0%252C%2522authFlowName%2522%253A%2522generic-permission-list%2522%252C%2522appId%2522%253A4238991%252C%2522creationTime%2522%253A1629067563420%252C%2522state%2522%253A%2522eyJhY3Rpb24iOiJXSU5ET1ciLCJhcHBFbnRyYW5jZSI6ImRlZmF1bHQiLCJhcHBOYW1lIjoiaWNidSIsImxhbmciOiJ6aF9DTiIsIm1vYmlsZSI6ZmFsc2UsInN0YXRlIjoiMjIzM2E0MGU5M2MyNGFlN2E2NGU4MTgxNjczZjVjNWQiLCJ0b2tlbiI6ImlkY18yRE9pZzdXREJTcXljUUQwOXoxY0tDdyJ9%2522%252C%2522scope%2522%253A%2522r_liteprofile%2Br_emailaddress%2522%257D&fromSignIn=1&trk=oauth&cancel_redirect=%2Foauth%2Fv2%2Flogin-cancel%3Fapp_id%3D4238991%26auth_type%3DAC%26flow%3D%257B%2522authorizationType%2522%253A%2522OAUTH2_AUTHORIZATION_CODE%2522%252C%2522redirectUri%2522%253A%2522https%253A%252F%252Fpassport.alibaba.com%252Foauth_sign.htm%253Ftype%253Dlinkedin%2526return_url%253Dhttps%25253A%25252F%25252Flogin.alibaba.com%25252Fauto_login.htm%2522%252C%2522currentStage%2522%253A%2522LOGIN_SUCCESS%2522%252C%2522currentSubStage%2522%253A0%252C%2522authFlowName%2522%253A%2522generic-permission-list%2522%252C%2522appId%2522%253A4238991%252C%2522creationTime%2522%253A1629067563420%252C%2522state%2522%253A%2522eyJhY3Rpb24iOiJXSU5ET1ciLCJhcHBFbnRyYW5jZSI6ImRlZmF1bHQiLCJhcHBOYW1lIjoiaWNidSIsImxhbmciOiJ6aF9DTiIsIm1vYmlsZSI6ZmFsc2UsInN0YXRlIjoiMjIzM2E0MGU5M2MyNGFlN2E2NGU4MTgxNjczZjVjNWQiLCJ0b2tlbiI6ImlkY18yRE9pZzdXREJTcXljUUQwOXoxY0tDdyJ9%2522%252C%2522scope%2522%253A%2522r_liteprofile%2Br_emailaddress%2522%257D"
                                class="=btn btnGroup">
                                <img src="https://image.flaticon.com/icons/png/512/2111/2111463.png" />
                                <!--tw-->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>

</div>

<!--fin publicite-->

<section class="divisions">
    <navbar class="division navbar navbar-expand-lg navbar navbar-dark ">
</section>


<!--debut soldes magasin-->

<section class="soldesparty">

    <div class="container">
        <div class="row">
            <div class="col">

                <div class="soldes">
                    <div class="title">
                        <h5 class="">En solde</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="information">
                                <div class="ribbon">
                                    <span>-70%</span>
                                </div>
                                <div class="card">
                                    <img src="https://rukminim1.flixcart.com/image/416/416/av-media/movies/k/q/u/jumbo-original-imadffrusmbghfkr.jpeg?q=70"
                                        class="card-img" alt="..." />
                                    <div class="card-body">
                                        <div class="index_profile">
                                            <img src="https://thumbor.forbes.com/thumbor/fit-in/416x416/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f4ebe0c87612dab4f12a597%2F0x0.jpg%3Fbackground%3D000000%26cropX1%3D292%26cropX2%3D3684%26cropY1%3D592%26cropY2%3D3987"
                                                alt="profileindex_img" />
                                            <div class="titlesM">
                                                <h6 class="cards-titles ">Planette de la mode <span
                                                        class="online"></span></h6>
                                            </div>
                                            <div class="localisation">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <p>koumassi,<span>Abidjan</span></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="card-footers">
                                            <div class="numbers">
                                                <div class="itemm">
                                                    <i class="fas fa-rss-square"></i>
                                                    <span>120</span>
                                                    Abonnés
                                                </div>
                                                <div class="borders"></div>
                                                <div class="itemm">
                                                    <i class="fas fa-clock"></i>
                                                    <span>4</span>
                                                    jour sur le site
                                                </div>
                                                <div class="btna">
                                                    <button>S'abonner</button>
                                                </div>
                                                <div class="rating">
                                                    <input type="radio" name="star" id="star1"><label for="star1"><i
                                                            class="fas fa-star"></i></label>
                                                    <input type="radio" name="star" id="star2"><label for="star2"><i
                                                            class="fas fa-star"></i></label>
                                                    <input type="radio" name="star" id="star3"><label for="star3"><i
                                                            class="fas fa-star"></i></label>
                                                    <input type="radio" name="star" id="star4"><label for="star4"><i
                                                            class="far fa-star"></i></label>
                                                    <input type="radio" name="star" id="star5"><label for="star5"><i
                                                            class="far fa-star"></i></label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btnvisite">VISITE SES ARTICLES</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <div class="ribbon">
                                <span>-45%</span>
                            </div>
                            <div class="card">
                                <a href="www.coin.com"><img
                                        src="https://rukminim1.flixcart.com/image/416/416/av-media/movies/k/q/u/jumbo-original-imadffrusmbghfkr.jpeg?q=70"
                                        class="card-img" alt="..." /></a>
                                <div class="card-body">
                                    <div class="index_profile">
                                        <img src="https://thumbor.forbes.com/thumbor/fit-in/416x416/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f4ebe0c87612dab4f12a597%2F0x0.jpg%3Fbackground%3D000000%26cropX1%3D292%26cropX2%3D3684%26cropY1%3D592%26cropY2%3D3987"
                                            alt="profileindex_img" />
                                        <div class="titlesM">
                                            <h6 class="cards-titles ">Planette de la mode <span class="online"></span>
                                            </h6>
                                        </div>
                                        <div class="localisation">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <p>koumassi,<span>Abidjan</span></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-footers">
                                        <div class="numbers">
                                            <div class="itemm">
                                                <i class="fas fa-rss-square"></i>
                                                <span>120</span>
                                                Abonnés
                                            </div>
                                            <div class="borders"></div>
                                            <div class="itemm">
                                                <i class="fas fa-clock"></i>
                                                <span>4</span>
                                                jour sur le site
                                            </div>
                                            <div class="btna">
                                                <button>S'abonner</button>
                                            </div>
                                            <div class="rating">
                                                <input type="radio" name="star" id="star1"><label for="star1"><i
                                                        class="far fa-star"></i></label>
                                                <input type="radio" name="star" id="star2"><label for="star2"><i
                                                        class="far fa-star"></i></label>
                                                <input type="radio" name="star" id="star3"><label for="star3"><i
                                                        class="far fa-star"></i></label>
                                                <input type="radio" name="star" id="star4"><label for="star4"><i
                                                        class="far fa-star"></i></label>
                                                <input type="radio" name="star" id="star5"><label for="star5"><i
                                                        class="far fa-star"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btnvisite">VISITE SES ARTICLES</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="ribbon">
                                <span>-45%</span>
                            </div>
                            <div class="card">
                                <a href="www.coin.com"><img
                                        src="https://rukminim1.flixcart.com/image/416/416/av-media/movies/k/q/u/jumbo-original-imadffrusmbghfkr.jpeg?q=70"
                                        class="card-img" alt="..." /></a>
                                <div class="card-body">
                                    <div class="index_profile">
                                        <img src="https://thumbor.forbes.com/thumbor/fit-in/416x416/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f4ebe0c87612dab4f12a597%2F0x0.jpg%3Fbackground%3D000000%26cropX1%3D292%26cropX2%3D3684%26cropY1%3D592%26cropY2%3D3987"
                                            alt="profileindex_img" />
                                        <div class="titlesM">
                                            <h6 class="cards-titles ">Planette de la mode <span class="online"></span>
                                            </h6>
                                        </div>
                                        <div class="localisation">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <p>koumassi,<span>Abidjan</span></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-footers">
                                        <div class="numbers">
                                            <div class="itemm">
                                                <i class="fas fa-rss-square"></i>
                                                <span>120</span>
                                                Abonnés
                                            </div>
                                            <div class="borders"></div>
                                            <div class="itemm">
                                                <i class="fas fa-clock"></i>
                                                <span>4</span>
                                                jour sur le site
                                            </div>
                                            <div class="btna">
                                                <button>S'abonner</button>
                                            </div>
                                            <div class="rating">
                                                <input type="radio" name="star" id="star1"><label for="star1"><i
                                                        class="far fa-star"></i></label>
                                                <input type="radio" name="star" id="star2"><label for="star2"><i
                                                        class="far fa-star"></i></label>
                                                <input type="radio" name="star" id="star3"><label for="star3"><i
                                                        class="far fa-star"></i></label>
                                                <input type="radio" name="star" id="star4"><label for="star4"><i
                                                        class="far fa-star"></i></label>
                                                <input type="radio" name="star" id="star5"><label for="star5"><i
                                                        class="far fa-star"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btnvisite">VISITE SES ARTICLES</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="ribbon">
                                <span>-45%</span>
                            </div>
                            <div class="card">
                                <a href="www.coin.com"><img
                                        src="https://rukminim1.flixcart.com/image/416/416/av-media/movies/k/q/u/jumbo-original-imadffrusmbghfkr.jpeg?q=70"
                                        class="card-img" alt="..." /></a>
                                <div class="card-body">
                                    <div class="index_profile">
                                        <img src="https://thumbor.forbes.com/thumbor/fit-in/416x416/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f4ebe0c87612dab4f12a597%2F0x0.jpg%3Fbackground%3D000000%26cropX1%3D292%26cropX2%3D3684%26cropY1%3D592%26cropY2%3D3987"
                                            alt="profileindex_img" />
                                        <div class="titlesM">
                                            <h6 class="cards-titles ">Planette de la mode <span class="online"></span>
                                            </h6>
                                        </div>
                                        <div class="localisation">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <p>koumassi,<span>Abidjan</span></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-footers">
                                        <div class="numbers">
                                            <div class="itemm">
                                                <i class="fas fa-rss-square"></i>
                                                <span>120</span>
                                                Abonnés
                                            </div>
                                            <div class="borders"></div>
                                            <div class="itemm">
                                                <i class="fas fa-clock"></i>
                                                <span>4</span>
                                                jour sur le site
                                            </div>
                                            <div class="btna">
                                                <button>S'abonner</button>
                                            </div>
                                            <div class="rating">
                                                <input type="radio" name="star" id="star1"><label for="star1"><i
                                                        class="far fa-star"></i></label>
                                                <input type="radio" name="star" id="star2"><label for="star2"><i
                                                        class="far fa-star"></i></label>
                                                <input type="radio" name="star" id="star3"><label for="star3"><i
                                                        class="far fa-star"></i></label>
                                                <input type="radio" name="star" id="star4"><label for="star4"><i
                                                        class="far fa-star"></i></label>
                                                <input type="radio" name="star" id="star5"><label for="star5"><i
                                                        class="far fa-star"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btnvisite">VISITE SES ARTICLES</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="ribbon">
                                <span>-45%</span>
                            </div>
                            <div class="card">
                                <a href="www.coin.com"><img
                                        src="https://rukminim1.flixcart.com/image/416/416/av-media/movies/k/q/u/jumbo-original-imadffrusmbghfkr.jpeg?q=70"
                                        class="card-img" alt="..." /></a>
                                <div class="card-body">
                                    <div class="index_profile">
                                        <img src="https://thumbor.forbes.com/thumbor/fit-in/416x416/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f4ebe0c87612dab4f12a597%2F0x0.jpg%3Fbackground%3D000000%26cropX1%3D292%26cropX2%3D3684%26cropY1%3D592%26cropY2%3D3987"
                                            alt="profileindex_img" />
                                        <div class="titlesM">
                                            <h6 class="cards-titles ">Planette de la mode <span class="online"></span>
                                            </h6>
                                        </div>
                                        <div class="localisation">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <p>koumassi,<span>Abidjan</span></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-footers">
                                        <div class="numbers">
                                            <div class="itemm">
                                                <i class="fas fa-rss-square"></i>
                                                <span>120</span>
                                                Abonnés
                                            </div>
                                            <div class="borders"></div>
                                            <div class="itemm">
                                                <i class="fas fa-clock"></i>
                                                <span>4</span>
                                                jour sur le site
                                            </div>
                                            <div class="btna">
                                                <button>S'abonner</button>
                                            </div>
                                            <div class="rating">
                                                <input type="radio" name="star" id="star1"><label for="star1"><i
                                                        class="far fa-star"></i></label>
                                                <input type="radio" name="star" id="star2"><label for="star2"><i
                                                        class="far fa-star"></i></label>
                                                <input type="radio" name="star" id="star3"><label for="star3"><i
                                                        class="far fa-star"></i></label>
                                                <input type="radio" name="star" id="star4"><label for="star4"><i
                                                        class="far fa-star"></i></label>
                                                <input type="radio" name="star" id="star5"><label for="star5"><i
                                                        class="far fa-star"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btnvisite">VISITE SES ARTICLES</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="ribbon">
                                <span>-25%</span>
                            </div>
                            <div class="card">
                                <a href="www.coin.com"><img
                                        src="https://rukminim1.flixcart.com/image/416/416/av-media/movies/k/q/u/jumbo-original-imadffrusmbghfkr.jpeg?q=70"
                                        class="card-img" alt="..." /></a>
                                <div class="card-body">
                                    <div class="index_profile">
                                        <img src="https://thumbor.forbes.com/thumbor/fit-in/416x416/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f4ebe0c87612dab4f12a597%2F0x0.jpg%3Fbackground%3D000000%26cropX1%3D292%26cropX2%3D3684%26cropY1%3D592%26cropY2%3D3987"
                                            alt="profileindex_img" />
                                        <div class="titlesM">
                                            <h6 class="cards-titles ">Planette de la mode <span class="online"></span>
                                            </h6>
                                        </div>
                                        <div class="localisation">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <p>koumassi,<span>Abidjan</span></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-footers">
                                        <div class="numbers">
                                            <div class="itemm">
                                                <i class="fas fa-rss-square"></i>
                                                <span>120</span>
                                                Abonnés
                                            </div>
                                            <div class="borders"></div>
                                            <div class="itemm">
                                                <i class="fas fa-clock"></i>
                                                <span>4</span>
                                                jour sur le site
                                            </div>
                                            <div class="btna">
                                                <button>S'abonner</button>
                                            </div>
                                            <div class="rating">
                                                <input type="radio" name="star" id="star1"><label for="star1"><i
                                                        class="fas fa-star"></i></label>
                                                <input type="radio" name="star" id="star2"><label for="star2"><i
                                                        class="far fa-star"></i></label>
                                                <input type="radio" name="star" id="star3"><label for="star3"><i
                                                        class="far fa-star"></i></label>
                                                <input type="radio" name="star" id="star4"><label for="star4"><i
                                                        class="far fa-star"></i></label>
                                                <input type="radio" name="star" id="star5"><label for="star5"><i
                                                        class="far fa-star"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btnvisite">VISITE SES ARTICLES</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="solplus">
                            <a href="soldesmagasins.html">
                                <button>Plus de magasins</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="commandexx">

            <div class="droite">
                <div class="row">
                    <div class="swatt">
                        <a href="solutionr.html">
                            <h6>Solution Rapide</h6>
                        </a>
                    </div>
                    <div class="col">
                        <img src="E:\ProjectXX\images\ILLUSTRATION 1.jpg">
                    </div>
                    <div class="col">
                        <img src="E:\ProjectXX\images\ILLUSTRATION 2.jpg">
                    </div>
                    <div class="col">
                        <img src="E:\ProjectXX\images\ILLUSTRATION1.jpg">
                    </div>
                </div>
            </div>
            <br>
            <div class="lapub">
                <a href="E:\ProjectXX\georges\adompo\vuedelarticle.html">
                    <h6>Publicité avec Market Online</h6>
                </a>
            </div>
            <br>
            <div class="cardre">
                <div class="card-body">
                    <h6>Nos Réseaux Sociaux</h6>
                    <div class="btnRow">
                        <a href="https://fr-fr.facebook.com/" class="=btn btnGroup">
                            <img src="https://image.flaticon.com/icons/png/512/733/733547.png" />
                            <!--fac-->
                        </a>
                        <a href="https://accounts.google.com/signin/v2/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                            class="=btn btnGroup">
                            <img src="https://cdn-icons-png.flaticon.com/512/1409/1409937.png" />
                            <!--goo-->
                        </a>
                        <a href="https://www.linkedin.com/uas/login?session_redirect=%2Foauth%2Fv2%2Flogin-success%3Fapp_id%3D4238991%26auth_type%3DAC%26flow%3D%257B%2522authorizationType%2522%253A%2522OAUTH2_AUTHORIZATION_CODE%2522%252C%2522redirectUri%2522%253A%2522https%253A%252F%252Fpassport.alibaba.com%252Foauth_sign.htm%253Ftype%253Dlinkedin%2526return_url%253Dhttps%25253A%25252F%25252Flogin.alibaba.com%25252Fauto_login.htm%2522%252C%2522currentStage%2522%253A%2522LOGIN_SUCCESS%2522%252C%2522currentSubStage%2522%253A0%252C%2522authFlowName%2522%253A%2522generic-permission-list%2522%252C%2522appId%2522%253A4238991%252C%2522creationTime%2522%253A1629067563420%252C%2522state%2522%253A%2522eyJhY3Rpb24iOiJXSU5ET1ciLCJhcHBFbnRyYW5jZSI6ImRlZmF1bHQiLCJhcHBOYW1lIjoiaWNidSIsImxhbmciOiJ6aF9DTiIsIm1vYmlsZSI6ZmFsc2UsInN0YXRlIjoiMjIzM2E0MGU5M2MyNGFlN2E2NGU4MTgxNjczZjVjNWQiLCJ0b2tlbiI6ImlkY18yRE9pZzdXREJTcXljUUQwOXoxY0tDdyJ9%2522%252C%2522scope%2522%253A%2522r_liteprofile%2Br_emailaddress%2522%257D&fromSignIn=1&trk=oauth&cancel_redirect=%2Foauth%2Fv2%2Flogin-cancel%3Fapp_id%3D4238991%26auth_type%3DAC%26flow%3D%257B%2522authorizationType%2522%253A%2522OAUTH2_AUTHORIZATION_CODE%2522%252C%2522redirectUri%2522%253A%2522https%253A%252F%252Fpassport.alibaba.com%252Foauth_sign.htm%253Ftype%253Dlinkedin%2526return_url%253Dhttps%25253A%25252F%25252Flogin.alibaba.com%25252Fauto_login.htm%2522%252C%2522currentStage%2522%253A%2522LOGIN_SUCCESS%2522%252C%2522currentSubStage%2522%253A0%252C%2522authFlowName%2522%253A%2522generic-permission-list%2522%252C%2522appId%2522%253A4238991%252C%2522creationTime%2522%253A1629067563420%252C%2522state%2522%253A%2522eyJhY3Rpb24iOiJXSU5ET1ciLCJhcHBFbnRyYW5jZSI6ImRlZmF1bHQiLCJhcHBOYW1lIjoiaWNidSIsImxhbmciOiJ6aF9DTiIsIm1vYmlsZSI6ZmFsc2UsInN0YXRlIjoiMjIzM2E0MGU5M2MyNGFlN2E2NGU4MTgxNjczZjVjNWQiLCJ0b2tlbiI6ImlkY18yRE9pZzdXREJTcXljUUQwOXoxY0tDdyJ9%2522%252C%2522scope%2522%253A%2522r_liteprofile%2Br_emailaddress%2522%257D"
                            class="=btn btnGroup">
                            <img src="https://image.flaticon.com/icons/png/512/2111/2111463.png" />
                            <!--tw-->
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</section>

<!--fin soldes magasin-->

<section class="divisions">
    <navbar class="division navbar navbar-expand-lg navbar navbar-dark ">
</section>


<!--debut Tendances-->
<section class="tendanceparty">

    <div class="tendances">
        <div class="container">
            <div class="title">
                <h5 class="">Tendances</h5>
            </div>
            <div class="main-container">
                <button id="btn-left" class="fas fa-angle-right"></button>
                <section class="main-slider" id="slider">
                    <div class="thumbail">
                        <img src="E:\ProjectXX\images\WhatsApp Image 2021-10-10 at 11.38.03.jpeg" alt="" class="imgs">
                        <div class="detailsp">
                            <p>serviette</p>
                            <p>taile-M</p>
                            <p>prix : <span>7000 f cfa</span></p>
                            <div class="like">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                            <div class="btn btn-cart"><i class="fa fa-cart-plus"></i></div>
                        </div>
                    </div>

                    <div class="thumbail">
                        <img src="E:\ProjectXX\images\WhatsApp Image 2021-11-12 at 00.22.12.jpeg" alt="" class="imgs">
                        <div class="detailsp">
                            <p>serviette</p>
                            <p>taile-M</p>
                            <p>prix : <span>1000 f cfa</span></p>
                            <div class="like">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                            <div class="btn btn-cart"><i class="fa fa-cart-plus"></i></div>
                        </div>
                    </div>
                    <div class="thumbail">
                        <img src="E:\ProjectXX\images\images.1.jfif" alt="" class="imgs">
                        <div class="detailsp">
                            <p>chaussure</p>
                            <p>taile-M</p>
                            <p>prix : <span>5000 f cfa</span></p>
                            <div class="like">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                            <div class="btn btn-cart"><i class="fa fa-cart-plus"></i></div>
                        </div>
                    </div>
                    <div class="thumbail">
                        <img src="E:\ProjectXX\images\image2.jpg" alt="" class="imgs">
                        <div class="detailsp">
                            <p>serviette</p>
                            <p>taile-M</p>
                            <p>prix : <span>5000 f cfa</span></p>
                            <div class="like">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                            <div class="btn btn-cart"><i class=" fa fa-cart-plus"></i></div>
                        </div>
                    </div>
                    <div class="thumbail">
                        <img src="E:\ProjectXX\images\SacMain-intro.jpg" alt="" class="imgs">
                        <div class="detailsp">
                            <p>serviette</p>
                            <p>taile-M</p>
                            <p>prix : <span>5000 f cfa</span></p>
                            <div class="like">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                            <div class="btn btn-cart"><i class="fa fa-cart-plus"></i></div>
                        </div>
                    </div>
                    <div class="thumbail">
                        <img src="E:\ProjectXX\images\SacMain-intro.jpg" alt="" class="imgs">
                        <div class="detailsp">
                            <p>serviette</p>
                            <p>taile-M</p>
                            <p>prix : <span>5000 f cfa</span></p>
                            <div class="like">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                            <div class="btn btn-cart"><i class="fa fa-cart-plus"></i></div>
                        </div>
                    </div>
                    <div class="thumbail">
                        <img src="E:\ProjectX\images\WhatsApp Image 2021-11-12 at 00.22.12.jpeg" alt="" class="imgs">
                        <div class="detailsp">
                            <p>serviette</p>
                            <p>taile-M</p>
                            <p>prix : <span>5000 f cfa</span></p>
                            <div class="like">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                            <div class="btn btn-cart"><i class="fa fa-cart-plus"></i></div>
                        </div>
                    </div>
                    <div class="thumbail">
                        <img src="E:\ProjectX\images\WhatsApp Image 2021-11-12 at 00.22.12.jpeg" alt="" class="imgs">
                        <div class="detailsp">
                            <p>serviette</p>
                            <p>taile-M</p>
                            <p>prix : <span>5000 f cfa</span></p>
                            <div class="like">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                            <div class="btn btn-cart"><i class="fa fa-cart-plus"></i></div>
                        </div>
                    </div>
                    <div class="thumbail">
                        <img src="E:\ProjectX\images\G_78436179_320_VPP_1.jpg" alt="" class="imgs">
                        <div class="detailsp">
                            <p>serviette</p>
                            <p>taile-M</p>
                            <p>prix : <span>5000 f cfa</span></p>
                            <div class="like">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                            <div class="btn btn-cart"><i class="fa fa-cart-plus"></i></div>
                        </div>
                    </div>
                    <div class="thumbail">
                        <img src="E:\ProjectX\images\G_78436179_320_VPP_1.jpg" alt="" class="imgs">
                        <div class="detailsp">
                            <p>serviette</p>
                            <p>taile-M</p>
                            <p>prix : <span>5000 f cfa</span></p>
                            <div class="like">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                            <div class="btn btn-cart"><i class="fa fa-cart-plus"></i></div>
                        </div>
                    </div>
                </section>
                <button id="btn-right" class="btn-arrow   fas fa-angle-left"></button>
            </div>
</section>
<!--fin Tendances-->

<!--debut footer-->

<section class="barriere">
    <div class="autoplayin">
        <span class="txt t1">La priorité de notre service client, c’est votre sécurité et la protection de vos données
            personnelles - Achète partour et tout en un clic avec Market Online (mo.com) &nbsp;</span>
        <span class="txt t2">&nbsp;</span>
    </div>
    </div>
</section>

<section id="footer">
    <div></div>
    <footer>
        <div class="container">
            <footer class="py-5">
                <div class="row">
                    <div class="col-2">
                        <h5>Pages.</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Acceuil</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Devenir Vendeur</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Qui sommes nous?</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contacts</a></li>
                        </ul>
                    </div>

                    <div class="col-2">
                        <h5>Conditions d'utilisation.</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Politique de
                                    Confidentialité</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Publicité sur mo</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Aide</a></li>
                        </ul>
                    </div>

                    <div class="col-2">
                        <h5>Applications Mobiles.</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        </ul>
                    </div>

                    <div class="col-4 offset-1">
                        <form>
                            <h5>Newsletter.</h5>
                            <p>Restez les premiers informés.</p>
                            <div class="d-flex w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">Email address</label>
                                <input id="newsletter1" type="text" class="form-control" placeholder="E-mail... ">
                                <button class="btn btn-outline-primary" type="button">S'inscrire</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="d-flex justify-content-between py-4 my-4 border-top">
                    <p>&copy; 2021 Market Online | mo.com, tous droits réservés.</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="fab fa-twitter" href="#">
                                <use xlink:href="#twitter" />
                            </a></li>
                        <li class="ms-3"><a class="fab fa-instagram" href="#">
                                <use xlink:href="#instagram" />
                            </a></li>
                        <li class="ms-3"><a class="fab fa-facebook" href="#"></a>
                            <use xlink:href="#facebook" /></a>
                        </li>
                    </ul>
                </div>
            </footer>
        </div>
    </footer>
</section>
<!--fin footer-->


<!-- Debut Chatbot-->

<section class="autochat">

    <div class="chat_icon">
        <i class="far fa-comment-dots"></i>
    </div>

    <div class="chat_box">

    </div>

</section>

<!-- fin Chatbot-->



<!--boutton retour-->
<button id="back-to-top-btn"><i class="fas fa-angle-up"></i></button>


</body>


<script>

    const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");
    accordionItemHeaders.forEach(accordionItemHeader => {
        accordionItemHeader.addEventListener("click", event => {
            accordionItemHeader.classList.toggle("active");
            const accordionItemBody = accordionItemHeader.nextElementSibling;
            if (accordionItemHeader.classList.contains("active")) {
                accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
            }
            else {
                accordionItemBody.style.maxHeight = 0;
            }

        });

    });

</script>

<!--script-->


<script src="fonctionnalites.js"></script>
<script src="suggestions.js"></script>
<script src="autochat.js"></script>
<script src="barrefooter.js"></script>
<script src="btnretour.js"></script>
<script src="aide.js"></script>
<script src="scroll.js"></script>
<script src="modal.js"> </script>

<script src="like.js"></script>

<script src="tendance.js"></script>


<!--script carousel-->

<script src="js/mdl/jquery.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="https://cdn.jsdeliver.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="scriptcarou.js"></script>



</html>