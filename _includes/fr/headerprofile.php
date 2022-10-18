<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>profil utilisateur</title>

    <!--Google foont -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <!--css link -->
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">

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


</head>

<body>

    <!--debut de la barre de navigation-->
    <section id="navbarsindex">
        <sticky class="capou">
            <navbar class="navbar navbar-expand-lg navbar ">
                <div class="container-fluid">
                    <div class="logoindexx">
                        <a href="index.html"><img src="E:\ProjectXX\images\LOGO 2.jpeg" class="logo2" alt="mo.com">
                            <img src="E:\ProjectXX\images\WhatsApp Image 2021-10-10 at 11.38.03.jpeg" class="logo1" alt="mo.com">
                        </a>
                    </div>

                    <div class="magasinus">
                        <a class="  btn btn-warning" href="lesmagasins.html">Tous les Magasins</a>
                    </div>

                    <form class="flex">
                        <div class="wrapperpo">
                            <div class="wrapper">
                                <div class="search-input">
                                    <a href="" target="_blank" hidden></a>
                                    <input type="text" placeholder="Rechercher des Articles...">
                                    <div class="autocom-box">
                                        <!-- liste pour java -->
                                        <li>Chemise</li>
                                    </div>
                                    <div class="icon"><i class="fas fa-search"></i></div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="act" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="messages">
                                <a class="nav-link" href="#"><i class="far fa-envelope"></i></a>
                            </li>

                            <li class="jaimes">
                                <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
                            </li>

                            <li class="nav-item">
                                <div class="wrapperN">
                                    <div class="notification_wrap">
                                        <div class="notification_icon">
                                            <i class="far fa-bell"></i>
                                        </div>
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
                                                            <img src="<?= $user->avatar ?>" alt="profile_pic" style="width: 50px">
                                                        </div>
                                                        <div class="notify_info">
                                                            <p> la planette des enfants <span> viens d'ajouter une chemise </span></p>
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
                                                            <p> la planette des enfants <span> viens d'ajouter une chemise </span></p>
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
                                                            <p> la planette des enfants <span> viens d'ajouter une chemise </span></p>
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
                                                            <p>la planette des enfants <span> viens d'ajouter une chemise </span></p>
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
                                                            <p>la planette des enfants <span> viens d'ajouter une chemise </span></p>
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
                                                            <p>la planette des enfants <span> viens d'ajouter une chemise </span></p>
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
                                </div>
                    </div>
                </div>
                </div>
                </li>
                </ul>
                </li>

                <li class="nav-item">
                    <div class="action">
                        <div class="profiles">
                            <img src="<?= $user->avatar ?>" alt="profile_img" />
                        </div>
                        <div class="menu">
                            <ul>
                                <h5 class="first">Mon compte</h5>
                                <li><a href="profil.html">Profil</a></li>
                                <li><a href="profil.html">Compte Principal</a></li>
                                <span class="compteP">10000.00F CFA.</span>
                                <div class="gele">
                                    <i class="far fa-snowflake"></i>
                                    <span class="">0.00F CFA.</span>
                                </div>
                                <li><a href="#">Compte bonus</a></li>
                                <span class="compteB">0.00 Bonnus.</span>
                                <li><a href="profil.html">Commandes en attente <i class="far fa-grin-hearts"></i></a></li>
                                <li><a href="profil.html">Paramètre</a></li>
                                <li><a href="profil.html"><i class=" logout bi bi-box-arrow-left "></i>
                                        deconnexion</a></li>
                            </ul>
                </li>

                <li class="nav-item">
                    <a class=" monpaniers btn btn-outline-light" href="connexion.html"><i class="bi bi-cart2"></i></a>
                    <span class="score">5</span>
                </li>
                </ul>
                </div>
                </div>
            </navbar>
        </sticky>
    </section>
    <!--fin de la barre de navigation-->





    <!--debut de la deuxiemme barre de navigation-->

    <section class="navinferieurindex">

        <navbar class="navbar navbar-expand-lg navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class=" btn btn-light" href="Jmarche.html">Jour de Marché</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="btn btn-light" aria-current="page" href="offrejour.html">Offres du Jour</a>
                        </li>
                        <li class="nav-item">
                            <a class="forumbtn btn-light" href="solutionr.html"> Space Forum </a>
                        </li>
                </div>
            </div>

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
                            <p> Pour d'autre préoccupation, vous pouvez aussi nous contacter sur nos réseaux sociaux ou applications.</p>
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
        </navbar>
    </section>
    <!--fin de la deuxieme barre de navigation-->