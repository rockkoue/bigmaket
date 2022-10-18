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


    <title>Marchand</title>

    <!--Google foont -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <!--css link -->
    <link rel="stylesheet" href="style.css">

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

    <!--boxicon-->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <section class="navm">
        <navm class="navbar navbar-expand-md navbar-light">
            <li>
                <a>
                    <div class="profile">
                        <div class="dd_center">
                            <img src="https://thumbor.forbes.com/thumbor/fit-in/416x416/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f4ebe0c87612dab4f12a597%2F0x0.jpg%3Fbackground%3D000000%26cropX1%3D292%26cropX2%3D3684%26cropY1%3D592%26cropY2%3D3987" alt="profile_img" />
                            <div class="dd_menu ">

                                <ul>
                                    <h5 class="first">Mon compte</h5>
                                    <a href="profil.html">
                                        <li>Profil</li>
                                    </a>
                                    <a href="profil.html">
                                        <li>Compte Principal</li>
                                    </a>
                                    <a href="profil.html">
                                        <li>Compte bonus</li>
                                    </a>
                                    <a href="profil.html">
                                        <li>Commandes reçus </li>
                                    </a>
                                    <a href="paramètre.html">
                                        <li>Paramètre</li>
                                    </a>

                                    <a href="#">
                                        <li><i class=" logout bi bi-box-arrow-left "></i> Déconnexion</li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>
            </li>

            <script>
                const avatar = document.querySelector('img');
                avatar.addEventListener('click', function() {
                    document.querySelector('.dd_menu').classList.toggle('active');
                });
            </script>



            <li>
                <a href="Maarchand.html">
                    <div class="logoM">
                        <img src="C:\Users\jahou\Desktop\ProjectX\images\WhatsApp Image 2021-10-10 at 11.38.03.jpeg">
                    </div>
                </a>
            </li>

            <li>
                <a href="#">
                    <div class="icon">
                        <i class='bx bx-envelope' aria-hidden="true"></i>
                        <i class='bx bx-envelope' aria-hidden="true"></i>
                        <span class="num bg-danger ">10+</span>
                    </div>
                </a>
            </li>

            <li>
                <a href="#">
                    <div class="icon">
                        <i class='bx bx-bell' aria-hidden="true"></i>
                        <i class='bx bx-bell' aria-hidden="true"></i>
                        <span class="num bg-danger ">4</span>
                    </div>

                </a>
            </li>

            <li>
                <a href="#">
                    <div class="icon">
                        <i class="bx bx-heart" aria-hidden="true"></i>
                        <i class="bx bx-heart" aria-hidden="true"></i>
                        <span class="num bg-danger ">10+</span>
                    </div>
                </a>
            </li>

            <li>
                <a href="index.html">
                    <button type="button" class="btn btn-outline-info">Mon magasin</button>
                </a>
            </li>

            <li>
                <a>
                    <div class="langmenuM">
                        <div class="select-langmenuM">
                            <select>
                                <option value="Francais">Francais</option>
                                <option value="Anglais">Anglais</option>
                                <option value="Arabe">Arabe</option>
                            </select>
                        </div>
                    </div>
                </a>
            </li>

            <div class="aidesx">
                <button class="view-modal"><i class='bx bx-help-circle' aria-hidden="true"></i></button>
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
                                                Pourauoi Market Online est un site sûre pour vos achats ?
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
                            <p>Pour d'autre préoccupation, contactez-nous sur nos réseaux sociaux ou applications.</p>
                            <ul class="icons">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                            </ul>
                            <p>Avec Market Online :</p>
                            <div class="field">
                                <i class="url-icon uil uil-link"></i>
                                <input type="text" readonly value="Achète partout et tout en un clic.">
                            </div>
                        </div>
                    </div>
                </div>
        </navm>

    </section>

    <section class="pop-controles">

        <div class="popupc-screen">
            <div class="popupc-box">
                <i class="fas fa-times close-btn"></i>
                <div class="scrollc-bg">
                    <div class="scrollc-class">
                        <h2>Remplissez ces informations pour continuer</h2>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h5><span>1</span> fournissez les informations du magasin</h5>
                                    <div class="card-controle">
                                        <div class="card-body">

                                            <div class="container-controle">
                                                <label for="">Entrer le Nom du magasin: </label>
                                                <input type="text" placeholder="Entrer le Nom du magasin" id="username" autocomplete="off">
                                            </div>

                                            <div class="container-controle">
                                                <label for="pet-select">choisisser la Ville :</label>
                                                <select name="pets" id="pet-select">
                                                    <option value="">--Veuillez choisir une option--</option>
                                                    <option value="dog">Abidjan</option>
                                                    <option value="parrot">Adzopé</option>
                                                    <option value="cat">Agboville</option>
                                                    <option value="hamster">Anyama</option>
                                                    <option value="spider">Bingerville</option>
                                                    <option value="goldfish"> Bouaflé</option>
                                                    <option value="dog">Abidjan</option>
                                                    <option value="parrot">Adzopé</option>
                                                    <option value="cat">Agboville</option>
                                                    <option value="hamster">Anyama</option>
                                                    <option value="spider">Bingerville</option>
                                                    <option value="goldfish"> Bouaflé</option>
                                                    <option value="dog">Abidjan</option>
                                                    <option value="parrot">Adzopé</option>
                                                    <option value="cat">Agboville</option>
                                                    <option value="hamster">Anyama</option>
                                                    <option value="spider">Bingerville</option>
                                                </select>
                                            </div>

                                            <div class="container-controle">
                                                <label for="pet-select"> Sélectionner la Commune:</label>
                                                <select name="pets" id="pet-select">
                                                    <option value="">--Veuillez choisir une option--</option>
                                                    <option value="dog">Abidjan</option>
                                                    <option value="parrot">Adzopé</option>
                                                    <option value="cat">Agboville</option>
                                                    <option value="hamster">Anyama</option>
                                                    <option value="spider">Bingerville</option>
                                                    <option value="goldfish"> Bouaflé</option>
                                                    <option value="dog">Abidjan</option>
                                                    <option value="parrot">Adzopé</option>
                                                    <option value="cat">Agboville</option>
                                                    <option value="hamster">Anyama</option>
                                                    <option value="spider">Bingerville</option>
                                                    <option value="goldfish"> Bouaflé</option>
                                                    <option value="dog">Abidjan</option>
                                                    <option value="parrot">Adzopé</option>
                                                    <option value="cat">Agboville</option>
                                                    <option value="hamster">Anyama</option>
                                                    <option value="spider">Bingerville</option>
                                                </select>
                                            </div>

                                            <div class="container-controle">
                                                <label for="pet-select">Sélectionner le Marché:</label>
                                                <select name="pets" id="pet-select">
                                                    <option value="">--Veuillez choisir une option--</option>
                                                    <option value="dog">Abidjan</option>
                                                    <option value="parrot">Adzopé</option>
                                                    <option value="cat">Agboville</option>
                                                    <option value="hamster">Anyama</option>
                                                    <option value="spider">Bingerville</option>
                                                    <option value="goldfish"> Bouaflé</option>
                                                    <option value="dog">Abidjan</option>
                                                    <option value="parrot">Adzopé</option>
                                                    <option value="cat">Agboville</option>
                                                    <option value="hamster">Anyama</option>
                                                    <option value="spider">Bingerville</option>
                                                    <option value="goldfish"> Bouaflé</option>
                                                    <option value="dog">Abidjan</option>
                                                    <option value="parrot">Adzopé</option>
                                                    <option value="cat">Agboville</option>
                                                    <option value="hamster">Anyama</option>
                                                    <option value="spider">Bingerville</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h5><span>2</span>Vérification d'identité et de Documents</h5>
                                    <div class="card-controle">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">1_ Attestation d'identité, Pièce d'indentitée ou passeport:</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>

                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">1_ Attestation d'identité, Pièce d'indentitée ou passeport:</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>

                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">1_ Attestation d'identité, Pièce d'indentitée ou passeport:</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                    </div>
                                    <div class="controle-photo">
                                        <h5><span>3</span>Ajouter une photo personnelle</h5>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-6">
                                                    <img src="https://thumbor.forbes.com/thumbor/fit-in/416x416/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f4ebe0c87612dab4f12a597%2F0x0.jpg%3Fbackground%3D000000%26cropX1%3D292%26cropX2%3D3684%26cropY1%3D592%26cropY2%3D3987">
                                                </div>
                                                <div class="col-6">
                                                    <div class="drag-area">
                                                        <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                                        <header>Glisser pour télécharger</header>
                                                        <p>OU</p>
                                                        <button>Parcourir</button>
                                                        <input type="file" hidden>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button id='submit'>Soumettre</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <section class="navinferieur">
        <navbar class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class=" btn btn-light" href="Jmarché.html">Jour de Marchés</a>
                <div class="never">
                    <span class="nums">2</span>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="btn btn-light" aria-current="page" href="offrejour.html">Offres du Jour</a>
                            <div class="never">
                                <span class="num">5</span>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="forumubtn btn-light" href="solutionr.html">Forum de discussion</a>
                        </li>
                </div>


        </navbar>
    </section>
    <br><br><br><br><br>

    <section class="Actualite">
        <div class="card-body">
            <i class='bx bxs-down-arrow'></i>Magasin <?= magasin::Onemagazin($_GET['id']) ?><i class='bx bxs-down-arrow'></i>
        </div>
    </section>

    <section class="interieur"><br>
        <div class="container">
            <div class="row row-cols-4">
                <?php foreach (stock::stockbymagasin($_GET['id']) as  $datastock) : ?>
                    <div class="col">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="imagearticle/articles/<?= $datastock->image ?>" alt="" class="img-fluid rounded-start">

                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $datastock->libellearticle ?></h5>
                                        <p class="card-text"><?= $datastock->prix  ?> Frcfa</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        <a href="infoarticle.php?id=<?= $datastock->id ?>" class="btnvisite" style="text-decoration:none">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="baspages">
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
    </section>

</body>



<script>
    const viewBtn = document.querySelector(".view-modal"),
        popup = document.querySelector(".popup"),
        close = popup.querySelector(".close"),
        field = popup.querySelector(".field"),
        input = field.querySelector("input"),
        copy = field.querySelector("button");

    viewBtn.onclick = () => {
        popup.classList.toggle("show");
    }
    close.onclick = () => {
        viewBtn.click();
    }

    copy.onclick = () => {
        input.select();
        if (document.execCommand("copy")) {
            field.classList.add("active");
            copy.innerText = "Copied";

        }
    };
</script>



<script type="text/javascript">
    const popupScreen = document.querySelector(".popupc-screen");
    const popupBox = document.querySelector(".popupc-box");
    const closeBtn = document.querySelector(".close-btn");

    window.addEventListener("load", () => {
        setTimeout(() => {
            popupScreen.classList.add("active");
        }, 2000); //Popup the screen in 02 seconds after the page is loaded.
    });

    closeBtn.addEventListener("click", () => {
        popupScreen.classList.remove("active"); //Close the popup screen on click the close button.
        //Create a cookie for a day (to expire within a day) on click the close button.
        document.cookie = "WebsiteName=testWebsite; max-age=" + 24 * 60 * 60; //1 day = 24 hours = 24*60*60
    });

    //Use the created cookie to hide or show the popup screen.
    const WebsiteCookie = document.cookie.indexOf("WebsiteName=");

    if (WebsiteCookie != -1) {
        popupScreen.style.display = "none"; //Hide the popup screen if the cookie is not expired.
    } else {
        popupScreen.style.display = "flex"; //Show the popup screen if the cookie is expired.
    }
</script>


</html>