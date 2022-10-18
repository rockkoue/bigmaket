<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content=">" />
    <title> </title>

    <!--favicon-->
    <link rel="icon" href="<?= '' ?>" type="image/x-icon">
    <!-- Bootstrap core CSS-->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="../assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Custom Style-->
    <link href="../assets/css/app-style.css" rel="stylesheet" />

</head>

<body>

    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- end loader -->

    <!-- Start wrapper-->
    <div id="wrapper">

        <div class="card-authentication2 mx-auto my-5">
            <div class="card-group">
                <div class="card mb-0">
                    <div class="bg-signin2" style="background:url('https://www.affde.com/uploads/article/7966/UDAGzFMqrpIenAm1.jpg');background-size:cover"></div>
                    <div class="card-img-overlay rounded-left my-5">
                        <h2 style="color:#fff">
                            <!-- =NOM_SITE-->
                        </h2>
                        <p style="color:blue">Login</p>
                    </div>
                </div>

                <div class="card mb-0 ">
                    <div class="card-body">
                        <div class="card-content p-3">
                            <div class="text-center">
                                <img style="width:150px" src="" alt="logo icon">
                            </div>
                            <div class="card-title text-uppercase text-center py-3">Connexion</div>
                            <form method="post" action="connexion_user" class='connexion_user'>
                                <div class="form-group">
                                    <div class="position-relative has-icon-left">
                                        <label for="exampleInputUsername" class="sr-only">Login</label>
                                        <input type="text" id="exampleInputUsername" name="login" class="form-control" placeholder="Login" required>
                                        <div class="form-control-position">
                                            <i class="icon-user"></i>
                                        </div>
                                    </div>
                                    <!-- =TokenGenerate('_login')-->
                                </div>
                                <div class="form-group">
                                    <div class="position-relative has-icon-left">
                                        <label for="exampleInputPassword" class="sr-only">Mot de passe</label>
                                        <input type="password" id="exampleInputPassword" name="code_compte" class="form-control" placeholder="Mot de passe" required>
                                        <div class="form-control-position">
                                            <i class="icon-lock"></i>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block waves-effect waves-light " id='connexion_user'>Connexion</button>
                                <div class="text-center pt-3">

                                    <hr>
                                    <p class="text-dark"><?= date('Y') ?> &copy; </a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->



    </div>
    <!--wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/jx/jquery.min.js"></script>
    <script src="../assets/jx/popper.min.js"></script>
    <script src="../assets/jx/bootstrap.min.js"></script>

    <!-- sidebar-menu js -->
    <script src="../assets/jx/sidebar-menu.js"></script>

    <!-- Custom scripts -->
    <script src="../assets/jx/app-script.js"></script>

    <script src="../assets/plugins/alerts-boxes/js/sweetalert.min.js"></script>

    <?= AjaxQueryJS('connexion_user', 'window.location="accueil";') ?>

</body>

</html>