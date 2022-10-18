<?php

include '../_class/config.php';
include "../_constantes/constantes.php";
include "../_functions/functions.php";

spl_autoload_register(function ($class) {
    include "../_class/" . $class . ".php";
});
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta meta name="viewport" content="width=device-width, user-scalable=no" />



    <title>profil utilisateur</title>

    <!--Google foont -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <!--css link -->
    <link rel="stylesheet" href="../css/profile.css">
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



    <!--bootstrap prime-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


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

                <div class="monmagasin-v">
                    <div class="magasin-t-btn">


                        <?php

                        if (((new vendeur)::find($_SESSION['Idvendeur']))->status == 0) { ?>
                            <a class="  btn btn-warning" href="magasinvendeur.php">Mon magasin</a>
                        <?php
                        }
                        ?>

                    </div>
                </div>

                <div class="wrapper-index">
                    <div class="bost-rep">
                        <?php

                        if (((new vendeur)::find($_SESSION['Idvendeur']))->status == 0) { ?>
                            <form autocomplete="off">
                                <button type="button" class="btn btn-success">Bost ton magasin</button>
                            </form>
                        <?php
                        }
                        ?>

                    </div>

                </div>


                <div class="detailsU">

                    <ul class="Uti-ax">


                        <li class="">

                            <div class="right__menu">

                                <button><img src="images\user2.png"></button>
                                <div class="dropdown__menu">

                                    <h5 class="first">Mon compte</h5>
                                    <a href="profile.php">Profil</a>
                                    <a href="#" class="money-box">Compte Principal
                                        <span class="comptep-x">100000.00F CFA.</span></a>
                                    <a href="#" class="money-box">Compte bonus <span class="compteB">0.00
                                            Bonnus.</span></a>
                                    <a href="profil.html">Commandes reçues <i class="far fa-grin-hearts"></i></a>
                                    <a href="parametre.php">Paramètre</a>
                                    <a href="../_controllers/controllervendeur.php?function=deconnexion_vendeur"><i class=" logout bi bi-box-arrow-left "></i>
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


                                <?php

                                if (((new vendeur)::find($_SESSION['Idvendeur']))->status == 0) { ?>
                                    <a href="index.html">
                                        <button type="button" class="btn btn-success">Bost ton magasin</button>
                                    </a>

                                <?php
                                }
                                ?>

                            </div>

                        </li>

                        <li class="com-cont-x">
                            <a href="#"><button type="button" class="btn btn-info"> Commandes reçue <i class="far fa-grin-hearts"></i></button></a>

                        </li>

                        <li class="Pro-cont-x">
                            <div class="pro-action">
                                <div class="pro-menu">

                                    <ul class="pro-menu-box">
                                        <h5 class="first">Mon compte</h5>
                                        <li><a href="profil.php">Profil</a></li>
                                        <li><a>Compte Principal</a> <span class="comptep-x">100000.00F CFA.</span>
                                            <div class="gele">
                                                <i class="far fa-snowflake"></i>
                                                <span class="">0.00F CFA.</span>
                                            </div>
                                        </li>
                                        <li><a>Compte bonus</a> <span class="compteB">0.00 Bonnus.</span></li>
                                        <li><a href="profil.php">Paramètre</a></li>
                                        <li><a href="logout.php"><i class=" logout bi bi-box-arrow-left "></i>
                                                deconnexion</a></li>


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
                                <a class="story-circle btn btn-light" href="Jmarche.html">Jour de Marché</a>
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
                                        <h2 class="header-uxpa">Réponses instantanées</h2>
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
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Earum
                                                                saepe quaerat libero dolorum
                                                                quo quia, ea doloremque laudantium praesentium
                                                                recusandae
                                                                assumenda blanditiis hic. Ipsam ad
                                                                ratione explicabo alias facilis unde.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div class="accordion-item-header">
                                                            Comment effectuer un achat sur Market Online ?
                                                        </div>
                                                        <div class="accordion-item-body">
                                                            <div class="accordion-item-body-content">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Error
                                                                quia laboriosam omnis, sunt
                                                                harum molestias eaque ut enim veniam, voluptatibus
                                                                expedita
                                                                quidem voluptas accusamus eveniet
                                                                odit officiis quos asperiores consequatur?
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div class="accordion-item-header">
                                                            Pourquoi Market Online est un site sûre pour vos achats ?
                                                        </div>
                                                        <div class="accordion-item-body">
                                                            <div class="accordion-item-body-content">
                                                                Lorem ipsum, dolor sit amet consectetur adipisicing
                                                                elit. Dicta
                                                                nulla ipsum autem fugiat
                                                                pariatur ex natus, molestiae minus quod. In amet unde
                                                                voluptate
                                                                nulla enim repellendus commodi
                                                                veniam necessitatibus iusto.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div class="accordion-item-header">
                                                            Comment faire de la publicité sur Market Online ?
                                                        </div>
                                                        <div class="accordion-item-body">
                                                            <div class="accordion-item-body-content">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Autem
                                                                quae, aliquam libero ad modi
                                                                pariatur neque voluptatibus inventore soluta laboriosam
                                                                eos a
                                                                rem maiores cum consequatur,
                                                                tempora eum ratione minima.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <div class="accordion-item-header">
                                                            Comment devenir vendeur sur Market Online ?
                                                        </div>
                                                        <div class="accordion-item-body">
                                                            <div class="accordion-item-body-content">
                                                                Lorem ipsum dolor sit amet consectetur, adipisicing
                                                                elit. Hic
                                                                ratione magnam vel voluptate
                                                                accusamus porro, quos laudantium deserunt numquam
                                                                incidunt quod.
                                                                Nam perspiciatis sapiente
                                                                impedit, architecto fugit enim ad ipsam.
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



    <!--Debut corps vendeur premiere page-->