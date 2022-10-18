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

    <title>les magasins</title>

    <!--Google foont -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">


    <!--css link -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


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

<body>

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
                                    <a href="inscriptions.html">S'inscrire</a>
                                    <a href="connexion.html">Se connecter</a>
                                </div>
                            </div>
                        </li>

                        <li class="login-vendeur">
                            <a class="btn btn-success" href="vendeur.html">Devenez vendeur</a>
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
                        <a class="  btn btn-outline-light" href="connexion.html"><i class="bi bi-cart2"></i></a>
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
                        <button class="btsx btn-scroll" id="btn-scroll-left" onclick="scrollhorizontally(1)"><i class="fas fa-angle-left"></i></button>
                        <button class="btsy btn-scroll" id="btn-scroll-right" onclick="scrollhorizontally(-1)"><i class="fas fa-angle-right"></i></button>

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
                                <p> Pour d'autre préoccupation, vous pouvez aussi nous contacter sur nos réseaux sociaux
                                    ou
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
                            <img src="E:\ProjectXX\images\200.jpeg" class="img-thumbnail" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="E:\ProjectXX\images\200.jpeg" class="img-thumbnail" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="E:\ProjectXX\images\200.jpeg " class="img-thumbnail" alt="...">
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

                <div class="lesmagasins-boxer">

                    <div class="container">
                        <div class="title">
                            <h5 class="">
                                <?= (new magasin())->nombremagazin() ?> magasins disponibles.



                                <?php var_dump(new magasin()) ?>
                            </h5>
                        </div>
                        <div class="debutlM">
                            <div class="row">
                                <?php foreach ((new magasin())->magazin() as $magasins) : ?>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="https://rukminim1.flixcart.com/image/416/416/av-media/movies/k/q/u/jumbo-original-imadffrusmbghfkr.jpeg?q=70" class="card-img" alt="..." /></a>
                                            <div class="card-body">
                                                <div class="index_profile">
                                                    <img src="https://thumbor.forbes.com/thumbor/fit-in/416x416/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f4ebe0c87612dab4f12a597%2F0x0.jpg%3Fbackground%3D000000%26cropX1%3D292%26cropX2%3D3684%26cropY1%3D592%26cropY2%3D3987" alt="profileindex_img" />
                                                    <div class="titlesM">
                                                        <h6 class="cards-titles ">Magasin :
                                                            <?= $magasins->nommagasin ?> <span class="online"></span>
                                                        </h6>
                                                    </div>
                                                    <div class="localisation">
                                                        <i class="fas fa-map-marker-alt"></i>
                                                        <p>
                                                            <?= $magasins->commune ?><span>
                                                                <?= ' marché ' . $magasins->nom_marche ?>
                                                            </span>
                                                        </p>
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
                                                    </div>
                                                </div>
                                                <a href="artbouticle.php?id=<?= $magasins->id ?>" class="btnvisite" style="text-decoration:none">VISITE SES ARTICLES</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>



                    <!-- fin Body -->


                    <!--debut footer-->

                    <section class="barriere">
                        <div class="autoplayin">
                            <span class="txt t1">La priorité de notre service client, c’est votre sécurité et la
                                protection de vos
                                données
                                personnelles - Achète partour et tout en un clic sur Market Online (mo.com)
                                &nbsp;</span>
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
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Devenir
                                        Vendeur</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Qui sommes
                                        nous?</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contacts</a></li>
                            </ul>
                        </div>

                        <div class="col-2">
                            <h5>Conditions d'utilisation.</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Politique de
                                        Confidentialité</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Publicité sur
                                        mo</a></li>
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
            } else {
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

<script src="tendance.js"></script>




</html>