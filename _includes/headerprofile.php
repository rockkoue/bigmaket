<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta meta name="viewport" content="width=device-width, user-scalable=no" />



    <title>marketonlinee.com</title>

    <!--Google foont -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <!--css link -->
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="icon" href="images\identitelogo.jpg">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">


    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


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

    <!--boxicon-->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--script carousel-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!--maps-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />

</head>

<body>

    <!--debut de la barre de navigation-->
    <section id="navigationx">
        <sticky class="capou">
            <input type="checkbox" id="check">
            <navbar class="indexnav">
                <div class="monlogo1">
                    <div class="monlogo">
                        <a href="index.php">
                            <img src="images\LOGO 2.jpeg" class="logox1">
                            <img src="images\WhatsApp Image 2021-10-10 at 11.38.03.jpeg" class="logox2">
                        </a>
                    </div>
                </div>

                <div class="super-traits"></div>

                <div class="magasin-t-btn">
                    <a href="magasin.php" class=" btn btn-warning"> Tous les magasins</a>
                </div>


                <div class="wrapper-index__profil">
                    <div class="wrapper-index">
                        <!--
                   <form autocomplete="off" method="post" action="resultatrecherches.php">
                            <input type="text" id="input" name="q" placeholder="Rechercher des articles.." />
                            <ul class="list"></ul>
                            <button type="submit" value="Search"
                                style="background-color: unset;border: unset;color: #eee;"><i
                                    class="fas fa-search"></i></button>
                        </form>
                    -->
                        <form autocomplete="off" method="post" action="resultatrecherches.php">
                            <input type="text" id="input" name="q" placeholder="Rechercher des articles.." />
                            <ul class="list"></ul>
                            <button type="submit" value="Search" style="background-color: unset;border: unset;color: #eee;"><i class="fas fa-search"></i></button>
                        </form>

                    </div>
                </div>

                <?php if (isset($_SESSION['Iduser'])) : ?>

                    <div class="detailsU">
                        <ul class="Uti-ax">
                            <li class="Profil__xr ">

                                <div class="right__menu">

                                    <button><img src="images\user2.png"></button>
                                    <div class="dropdown__menu">

                                        <h5 class="first">Mon compte</h5>
                                        <a href="profile.php">Profil</a>
                                        <a href="#" class="money-box">Compte Principal
                                            <span class="comptep-x">100000.00F CFA.</span></a>
                                        <div class="gele">
                                            <span class=""> <i class="far fa-snowflake"></i> 0.00F CFA.</span>
                                        </div>
                                        <a href="#" class="money-box">Compte bonus <span class="compteB">0.00
                                                Bonnus.</span></a>
                                        <a href="profil.html">Commandes en attente <i class="far fa-grin-hearts"></i></a>
                                        <a href="parametre.php">Param??tre</a>
                                        <a href="_controllers/controlleruser.php?function=deconnexion_user"><i class=" logout bi bi-box-arrow-left "></i>
                                            deconnexion</a>

                                    </div>

                                </div>

                            </li>


                            <li class="messages">
                                <div class="messages-N">
                                    <a class="nav-link" href="#"><i class="bi bi-envelope"></i></a>
                                </div>
                            </li>


                            <li class="jaimes">
                                <div class="jaimes-N">
                                    <a class="nav-link" href="#"><i class="bi bi-heart"></i></a>
                                </div>
                            </li>

                            <li class="nav-not-x">
                                <div class="notification_wrap">
                                    <button><a class="nav-link"><i class="bi bi-bell"></i></i></a></button>
                                    <div class="dropdown">

                                        <h2>Notifications <span>4</span> </h2>

                                        <div class="fonctions">
                                            <span><i class="fas fa-ellipsis-v"></i></span>
                                            <span><i class="far fa-trash-alt"></i></span>
                                            <input type="checkbox" name="all" id="all" value="all"><label for=all></label>
                                        </div>
                                        <hr>
                                        <div class="scroll-bgu">
                                            <div class="scroll-classu">
                                                <div class="notify_item">
                                                    <div class="notify_img">
                                                        <img src="https://thumbor.forbes.com/thumbor/fit-in/416x416/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f4ebe0c87612dab4f12a597%2F0x0.jpg%3Fbackground%3D000000%26cropX1%3D292%26cropX2%3D3684%26cropY1%3D592%26cropY2%3D3987" alt="profile_pic" style="width: 50px">
                                                    </div>
                                                    <div class="notify_info">
                                                        <p> la planette des enfants <span> viens d'ajouter une chemise
                                                            </span></p>
                                                        <span class="notify_time">Il y a 10 minutes</span>
                                                        <div class="Commandes">
                                                            <input class="selections" type="checkbox">

                                                            <p class="intu"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="notify_item">
                                                    <div class="notify_img">
                                                        <img src="https://thumbor.forbes.com/thumbor/fit-in/416x416/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f4ebe0c87612dab4f12a597%2F0x0.jpg%3Fbackground%3D000000%26cropX1%3D292%26cropX2%3D3684%26cropY1%3D592%26cropY2%3D3987" alt="profile_pic" style="width: 50px">
                                                    </div>
                                                    <div class="notify_info">
                                                        <p> la planette des enfants <span> viens d'ajouter une chemise
                                                            </span></p>
                                                        <span class="notify_time">Il y a 10 minutes</span>
                                                        <div class="Commandes">
                                                            <input type="checkbox">

                                                            <p class="intu"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="notify_item">
                                                    <div class="notify_img">
                                                        <img src="https://thumbor.forbes.com/thumbor/fit-in/416x416/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f4ebe0c87612dab4f12a597%2F0x0.jpg%3Fbackground%3D000000%26cropX1%3D292%26cropX2%3D3684%26cropY1%3D592%26cropY2%3D3987" alt="profile_pic" style="width: 50px">
                                                    </div>
                                                    <div class="notify_info">
                                                        <p> la planette des enfants <span> viens d'ajouter une chemise
                                                            </span></p>
                                                        <span class="notify_time">Il y a 10 minutes</span>
                                                        <div class="Commandes">
                                                            <input type="checkbox">

                                                            <p class="intu"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="notify_item">
                                                    <div class="notify_img">
                                                        <img src="https://thumbor.forbes.com/thumbor/fit-in/416x416/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f4ebe0c87612dab4f12a597%2F0x0.jpg%3Fbackground%3D000000%26cropX1%3D292%26cropX2%3D3684%26cropY1%3D592%26cropY2%3D3987" alt="profile_pic" style="width: 50px">
                                                    </div>
                                                    <div class="notify_info">
                                                        <p>la planette des enfants <span> viens d'ajouter une chemise
                                                            </span></p>
                                                        <span class="notify_time">Il y a 10 minutes</span>
                                                        <div class="Commandes">
                                                            <input type="checkbox">

                                                            <p class="intu"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="notify_item">
                                                    <div class="notify_img">
                                                        <img src="https://thumbor.forbes.com/thumbor/fit-in/416x416/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f4ebe0c87612dab4f12a597%2F0x0.jpg%3Fbackground%3D000000%26cropX1%3D292%26cropX2%3D3684%26cropY1%3D592%26cropY2%3D3987" alt="profile_pic" style="width: 50px">
                                                    </div>
                                                    <div class="notify_info">
                                                        <p>la planette des enfants <span> viens d'ajouter une chemise
                                                            </span></p>
                                                        <span class="notify_time">Il y a 10 minutes</span>
                                                        <div class="Commandes">
                                                            <input type="checkbox">

                                                            <p class="intu"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="notify_item">
                                                    <div class="notify_img">
                                                        <img src="https://thumbor.forbes.com/thumbor/fit-in/416x416/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f4ebe0c87612dab4f12a597%2F0x0.jpg%3Fbackground%3D000000%26cropX1%3D292%26cropX2%3D3684%26cropY1%3D592%26cropY2%3D3987" alt="profile_pic" style="width: 50px">
                                                    </div>
                                                    <div class="notify_info">
                                                        <p>la planette des enfants <span> viens d'ajouter une chemise
                                                            </span></p>
                                                        <span class="notify_time">Il y a 10 minutes</span>
                                                        <div class="Commandes">
                                                            <input type="checkbox">

                                                            <p class="intu"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="show_all">
                                                <p class="link">Afficher toutes les Notifications</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>

                    </div>

                    <ol>
                        <ul>

                            <li class="nav-pan-x">
                                <div class="panier_xf">
                                    <a href="panier.php" class="btn btn-outline-light">Mon Panier <i class="bi bi-cart2"></i></a>
                                    <span>
                                        <p class="item_count" id="#countpanier"><?= isset($_SESSION['cart']) == true ? count($_SESSION['cart']) : 0 ?></p>
                                    </span>
                                </div>

                            </li>

                            <li class="com-cont-x">
                                <div class="Com__x">
                                    <a href="#" class="btn btn-info">Commandes en attente <i class="far fa-grin-hearts"></i></a>
                                </div>

                            </li>

                            <li class="Pro-cont-x">
                                <div class="pro-action">
                                    <div class="pro-menu">

                                        <ul class="pro-menu-box">
                                            <h5 class="first">Mon compte</h5>
                                            <li><a href="profile.php">Profil</a></li>
                                            <li><a>Compte Principal</a> <span class="comptep-x">100000.00F CFA.</span>
                                                <div class="gele">
                                                    <i class="far fa-snowflake"></i>
                                                    <span class="">0.00F CFA.</span>
                                                </div>
                                            </li>
                                            <li><a>Compte bonus</a> <span class="compteB">0.00 Bonnus.</span></li>
                                            <li><a href="profil.html">Param??tre</a></li>
                                            <li><a href="_controllers/controlleruser.php?function=deconnexion_user"><i class=" logout bi bi-box-arrow-left "></i> deconnexion</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </ol>
                    <label for="check" class="bar-close">
                        <span class="fa fa-align-right " id="bars"></span>
                        <span class="fa fa-times " id="times"></span>
                    </label>
                <?php endif ?>

                <!--cas of login not found header -->
                <?php if (!isset(($_SESSION['Iduser']))) : ?>

                    <ol>
                        <ul>
                            <li id="login-tech" class="login-dec">
                                <div class="log-dropdown-1">
                                    <a class=" btn btn-outline-light dropdown-toggle" href="#">
                                        <i class="fas fa-user-circle fa"></i>
                                    </a>
                                    <div class="log-content">
                                        <?php if (!isset($_SESSION['Iduser'])) : ?>
                                            <a href="registeruser.php">S'inscrire</a>
                                            <a href="connexion.php">Se connecter</a>
                                        <?php endif ?>

                                    </div>
                                </div>
                            </li>

                            <li>
                                <!--pour rendre responsive sur telephone-->
                                <div class="log-responsive">
                                    <div class="btn-outline-success log-content-p">
                                        <?php if (!isset($_SESSION['Iduser'])) : ?>
                                            <a href="registeruser.php">S'inscrire<a> |
                                                    <a href="connexion.php">Se connecter</a>
                                                <?php endif ?>

                                    </div>
                                </div>
                                <br>
                            </li>

                            <li class="login-vendeur">
                                <a href="inscriptions.php" class=" btn btn-success">Devenez vendeur</a>
                            </li>

                            <li class="socialx">
                                <h6>Nos r??seaux sociaux: </h6>
                                <ul class="socialx-box">
                                    <th><a href="#"><i class="fab fa-facebook-f"></i></a></th>
                                    <th><a href="#"><i class="fab fa-twitter"></i></a></th>
                                    <th><a href="#"><i class="fab fa-instagram"></i></a></th>
                                </ul>
                            </li>

                        </ul>

                        <li class="panier-check">
                            <a href="panier.php" class=" btn btn-outline-light">
                                <i class="bi bi-cart2"></i>
                            </a>
                            <span>
                                <p class="item_count"><?= isset($_SESSION['cart']) == true ? count($_SESSION['cart']) : 0 ?></p>
                            </span>
                        </li>

                    </ol>

                    <label for="check" class="bar-close">
                        <span class="fa fa-align-right " id="bars"></span>
                        <span class="fa fa-times " id="times"></span>
                    </label>
                <?php endif ?>
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
                        <button class="btsy btn-scroll" id="btn-scroll-right" onclick="scrollhorizontally(-1)"><i class="fas fa-angle-right show"></i></button>


                        <div class="storys-container">

                            <div class="actx jourx-m">
                                <a class="story-circle btn btn-light" href="Jmarche.html">Jour de March??</a>
                            </div>

                            <div class="actx offresx-m">
                                <a class="story-circle btn btn-light" href="offrejour.html">Offres du Jour</a>
                            </div>

                            <div class="actx forum-x">
                                <a class="story-circle btn btn-light" href="solutionr.html"> Space Forum </a>
                            </div>

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

                    <div class="modalaide__d">
                        <a href="#popup_ai1" class="button"><i class="bi bi-question-square"></i></a>
                        <div id="popup_ai1" class="overlat_a">
                            <div class="popup_ai">
                                <div class="content_ai">
                                    <div class="modal-heder-uxp">
                                        <h2 class="header-uxpa">R??ponses instantan??es</h2>
                                        <a href="#" class="close">&times;</a>
                                    </div>
                                    <div class="modale-aide-body">
                                        <div class="reponsesinstantane">
                                            <div class="scroll-uxp">
                                                <div class="accordion">
                                                    <div class="accordion-item">
                                                        <div class="accordion-item-header">
                                                            Comment fonctionne Market Onlile ?
                                                        </div>
                                                        <div class="accordion-item-body">
                                                            <div class="accordion-item-body-content">
                                                                <p> Market Online est une plateforme num??rique qui
                                                                    regroupe
                                                                    et fait la publicit?? de plusieurs magasins
                                                                    physiques.
                                                                <p> Cette plateforme permet aux march??s traditionnels de
                                                                    se
                                                                    digitaliser en augmentant le profit.</p>
                                                                <p>Toutes les prestations propos??es par les vendeurs ne
                                                                    n??cessitent pas d'??change physique.</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div class="accordion-item-header">
                                                            Comment effectuer un achat sur Market Online ?
                                                        </div>
                                                        <div class="accordion-item-body">
                                                            <div class="accordion-item-body-content">
                                                                <p>Pour pouvoir faire un achat sur Market Online il vous
                                                                    faut
                                                                    pr??alablement vous inscrire sur le site.</p>
                                                                <p>Apr??s avoir choisi son article, rentrer en contact
                                                                    avec
                                                                    le vendeur pour savoir si la marchandise est
                                                                    toujours
                                                                    d???actualit??s.</p>
                                                                <p>Envoyer la marchandise vers le service livraison,
                                                                    acquittes vous des modalit??s de paiement.</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div class="accordion-item-header">
                                                            Pourquoi Market Online est un site s??re pour vos achats ?
                                                        </div>
                                                        <div class="accordion-item-body">
                                                            <div class="accordion-item-body-content">
                                                                <p>Lorsque vous passez une commande sur Market Online,
                                                                    vous n'avez
                                                                    pas besoin de transmettre vos coordonn??es
                                                                    personnelles
                                                                    aux vendeurs.</p>
                                                                <p> votre argent est securis?? par nos services jusqu?????
                                                                    ce
                                                                    que votre marchandise soit livr??.</p>
                                                                <p>Il faut noter que Market Online vous garantit
                                                                    l???anonymat en
                                                                    s??curisant votre transaction et vous offre une
                                                                    livraison
                                                                    rapide.</p>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="accordion-item">
                                                        <div class="accordion-item-header">
                                                            Comment devenir vendeur sur Market Online ?
                                                        </div>
                                                        <div class="accordion-item-body">
                                                            <div class="accordion-item-body-content">
                                                                <p>Pour devenir vendeur il faut necessairement avoir un
                                                                    magasin physique pour passer ?? l'??tape de la
                                                                    creation du
                                                                    compte.</p>
                                                                <p>l'enregistrement sur le sitre n??c??ssite une
                                                                    pi??ce d'identit?? pour justifier l'appartenance du
                                                                    compte, une adresse pour justifier l'emplacement du
                                                                    magasin et un num??ro de t??l??phone n??cessaire dans
                                                                    les rensseignements.
                                                                </p>
                                                                <p>Apres avoir renseigner les champs vide
                                                                    vous ??tes consid??rer comme un vendeur.</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div class="accordion-item-header">
                                                            Comment faire de la publicit?? sur Market Online ?
                                                        </div>
                                                        <div class="accordion-item-body">
                                                            <div class="accordion-item-body-content">
                                                                <p>Deux options s???offrent ?? vous :</p>
                                                                <p> -1) si vendeur, se diriger vers la page et suivre
                                                                    les
                                                                    instructions.</p>
                                                                <p>-2) non-vendeur, trouver les informations sur la page
                                                                    de
                                                                    publicit??.</p>

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

            </ul>

        </navbar>

    </section>


    <!--fin de la deuxieme barre de navigation-->