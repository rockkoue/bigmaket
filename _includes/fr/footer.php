            <!-- ***** Footer section ***** -->
            <footer class="footer-section" id="footerSection">
                <div class="content">
                    <div class="inner">
                        <div class="row">
                            <div class="large-3 columns">
                                <img alt="" src="<?= LOGO ?>">
                            </div><!-- /.columns -->
                            <div class="large-3 columns info-box">

                                <h1><?= NOM_SITE ?></h1>
                                <p>Évangélisation Vision 2000 plus est un organe satellitaire d’évangélisation né de l’intuition fondatrice de la Communauté Mère du Divin Amour en 1997 et mise en œuvre en Août 2012.<br>Cet organe international d’évangélisation accompagne le ministère personnel du Frère Jean Emmanuel Clément AKOBE, Fondateur de la Communauté Mère du Divin Amour.</p>

                            </div><!-- /.columns -->
                            <div class="large-3 columns blogroll-box">
                                <h1>Pages</h1>
                                <ul class="list-arrow">
                                    <li><a href="accueil">ACCUEIL</a></li>
                                    <li><a href="presentation">QUI SOMMES NOUS ?</a></li>
                                    <li><a href="#">AVODA</a></li>
                                    <li><a href="#">A.M.I</a></li>
                                    <li><a href="#">CONTACTS</a></li>
                                </ul>
                            </div><!-- /.columns -->
                            <div class="large-3 columns contact-box">
                                <ul class="contact">
                                    <li><?= CONTACT_1 ?></li>
                                    <li><?= CONTACT_2 ?></li>
                                    <li><?= EMAIL ?></li>
                                </ul>
                                <div class="text-center">
                                    <a href="#" class="button btn-dark">Contacter nous</a>
                                </div>
                                <ul class="socials">
                                    <li><a href="#" class="icon"><i class="fa fa-facebook-official"></i></a></li>
                                    <li><a href="#" class="icon"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#" class="icon"><i class="fa fa-youtube-square"></i></a></li>
                                    <li><a href="#" class="icon"><i class="fa fa-pinterest-square"></i></a></li>
                                    <li><a href="#" class="icon"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div><!-- /.columns -->
                        </div><!-- /.row -->
                    </div><!-- /.inner -->
                </div><!-- /.content -->
                <div class="copyright">
                    <div class="inner">
                        <div class="row">
                            <div class="medium-10 columns">
                            <?= AUTEUR ?> - <?= NOM_SITE ?>
                            </div>
                            <div class="medium-2 columns">
                                <a href="pageTop.html" class="scroll-to"><i class="fa fa-angle-up"></i>Plus haut</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer><!-- #footerSection -->



            <a class="exit-off-canvas"></a>

        </div>
    </div>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.js"></script>
    <![endif]-->

    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery.cookie.js"></script>
    <script src="assets/js/foundation.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/jquery.validate.js"></script>
    <script src="assets/js/jquery.countdown.js"></script>
    <script src="assets/js/jquery.counterup.js"></script>
    <script src="assets/js/jquery.scrollTo.js"></script>
    <script src="assets/js/parallax.js"></script>
    <script src="assets/js/jquery.waypoints.js"></script>
    <script src="assets/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min838f.js?rev=5.4.8"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min838f.js?rev=5.4.8"></script>

    <!-- Application main -->
    <script src="assets/js/application.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <script>
        APP.init();
        APP.initPlugins();
    </script>
    
    <?= AjaxQueryJS('add_payer','window.location=result.link'); ?>
    <?= AjaxQueryJS('don_payer','window.location=result.link'); ?>
    <?= AjaxQueryJS('offrande_payer','window.location=result.link'); ?>
    <?= AjaxQueryJS('akobe_payer','window.location=result.link'); ?>
    <?= AjaxQueryJS('enseignement_payer','window.location=result.link'); ?>
    <?= AjaxQueryJS('promesse_payer','window.location=result.link'); ?>
    <?= AjaxQueryJS('operation_payer','window.location=result.link'); ?>
    <?= AjaxQueryJS('donateurs_payer','$(".donateurs_payer")[0].reset()'); ?>
    <?= AjaxQueryJS('add_faithful',"window.location='promesse'"); ?>
    <?= AjaxQueryJS('login_faithful',"window.location='promesse'"); ?>
    <?= AjaxQueryJS('restore_faithful'); ?>
    <?= AjaxQueryJS('password_faithful'); ?>
    <?= AjaxQueryJS('add_promesse',"window.location='promesse'"); ?>
    <?= AjaxQueryJS('update_faithful'); ?>
    <?= AjaxQueryJS('contact_user',"$('.contact_user')[0].reset()"); ?>
    <?= AjaxQueryJS('subscribe_user',"$('.subscribe_user')[0].reset()"); ?>
    <?= AjaxQueryJS('add_ticket','window.location=result.link'); ?>
    

    <script>
    
        $('input[name="etudiant"]').on('click',()=>{

            if($('input[name=etudiant]:checked').val()=='oui'){

                $('.date_session').removeClass('hidden');
                $('.date_session_input').attr('required',true);

            }else{

                $('.date_session').addClass('hidden');
                $('.date_session_input').attr('required',false);
            }
        });

        $('#option,#option_2').on('change',()=>{

            if($('input[name=option_]:checked').val()=='1'){

                $('.option').removeClass('hidden');
            }else{
                $('.option').addClass('hidden');
            }

        })


        $('#choix_don,#choix_don_non').on('change',()=>{

            if($('input[name=choix_don]:checked').val()=='1'){

                $('._don').removeClass('hidden');
            }else{
                $('._don').addClass('hidden');
            }

        })



        $('#lieu').on('change',()=>{

            $('#montant').val($('#lieu').val());

            if($('#lieu option:selected').data('type')=='Ligne'){
                $('.Ligne').removeClass('hidden');
                $('.pseudo').attr('required',true);
            }else{
                $('.Ligne').addClass('hidden');
                $('.pseudo').attr('required',false);
            }

            console.log( $('#lieu option:selected').data('amount'));
            
            let devise = $('#devise').val();
            let montant = $('#lieu option:selected').data('amount');

            if(montant=='10000' && devise=='978'){

                $('#montant').val(20);
            }

            if(montant=='10000' && devise=='952'){

                $('#montant').val(10000);
            }

            if(montant=='10000' && devise=='840'){

                $('#montant').val(25);
            }

            //----------------------//
            
            if(montant=='15000' && devise=='978'){

                $('#montant').val(30);
            }

            if(montant=='15000' && devise=='952'){

                $('#montant').val(15000);
            }

            if(montant=='15000' && devise=='840'){

                $('#montant').val(35);
            }
            //----------------------//
            
            if(montant=='20000' && devise=='978'){

                $('#montant').val(31);
            }

            if(montant=='20000' && devise=='952'){

                $('#montant').val(20000);
            }

            if(montant=='20000' && devise=='840'){

                $('#montant').val(44);
            }
            
            //----------------------//

            if(montant=='25000' && devise=='978'){

                $('#montant').val(40);
            }

            if(montant=='25000' && devise=='952'){

                $('#montant').val(10000);
            }

            if(montant=='25000' && devise=='840'){

                $('#montant').val(55);
            }

        });


        $('#devise').on('change',()=>{

            let devise = $('#devise').val();
            let montant = $('#lieu option:selected').data('amount');

            if(montant=='10000' && devise=='978'){

                $('#montant').val(20);
            }

            if(montant=='10000' && devise=='952'){

                $('#montant').val(10000);
            }

            if(montant=='10000' && devise=='840'){

                $('#montant').val(25);
            }

            //----------------------//
            
            if(montant=='15000' && devise=='978'){

                $('#montant').val(30);
            }

            if(montant=='15000' && devise=='952'){

                $('#montant').val(15000);
            }

            if(montant=='15000' && devise=='840'){

                $('#montant').val(35);
            }
            //----------------------//
            
            if(montant=='20000' && devise=='978'){

                $('#montant').val(31);
            }

            if(montant=='20000' && devise=='952'){

                $('#montant').val(20000);
            }

            if(montant=='20000' && devise=='840'){

                $('#montant').val(44);
            }
            
            
            //----------------------//

            if(montant=='25000' && devise=='978'){

                $('#montant').val(40);
            }

            if(montant=='25000' && devise=='952'){

                $('#montant').val(10000);
            }

            if(montant=='25000' && devise=='840'){

                $('#montant').val(55);
            }

        });

        

        $('#now_1,#now_2').on('change',()=>{

            if($('input[name=now_]:checked').val()=='0'){

                $('.now').removeClass('hidden');
                $('.mode-paiement').addClass('hidden');
                $('#mode').attr('required',false);
            }else{
                $('.now').addClass('hidden');
                $('.mode-paiement').removeClass('hidden');
                $('#mode').attr('required',true);
            }

        })


        $('#type_compte').on('change',()=>{

            if($('#type_compte').val()=='Facebook'){

                $('.pseudo').removeClass('hidden');
                $('.pseudo').attr('required',true);
            }else{
                $('.pseudo').addClass('hidden');
                $('.pseudo').attr('required',false);
            }

        })

        $('#choix_2_').on('change',function(){


            if($('#choix_2_').val()=='Partenaire BRONZE (de 25.000 à 49.000FCFA – 38 à 75 EUROS)'){
                
                $('#montant_partenaire').attr('min','25000');
                $('#montant_partenaire').attr('max','49000');
                $('#montant_partenaire').attr('placeholder','25000 à 49000FCFA – 38 à 75 EUROS');

            }if($('#choix_2_').val()=='Partenaire ARGENT (50.000 à 99.000FCFA – 76 à 151 EUROS)'){
                
                $('#montant_partenaire').attr('min','50000');
                $('#montant_partenaire').attr('max','99000');
                $('#montant_partenaire').attr('placeholder','50000 à 99000FCFA – 76 à 151 EUROS');

            }if($('#choix_2_').val()=='Partenaire LEADER (minimum 100.000 FCFA – 152,45 EUROS)'){

                $('#montant_partenaire').attr('min','100000');
                $('#montant_partenaire').attr('max','10000000000');
                $('#montant_partenaire').attr('placeholder','100000 FCFA – 152,45 EUROS');
            }

        });
        
        $('#choix_1_').on('change',function(){


            if($('#choix_1_').val()=='Donateur'){
                
                $('.don').removeClass('hidden');
                $('.choix_1_').removeClass('hidden');
                $('.partenaire').addClass('hidden');
                $('#now_1').attr('required',true);
                $('#montant_').attr('required',true);
                $('#montant_partenaire').attr('required',false);
                $('#choix_2_').attr('required',false);

            }else{

                $('.partenaire').removeClass('hidden');
                $('.choix_1_').removeClass('hidden');
                $('.don').addClass('hidden');
                $('#now_1').attr('required',false);
                $('#montant_').attr('required',false);
                $('#choix_2_').attr('required',true);
                $('#montant_partenaire').attr('required',true);
            }

        });
        $(document).ready(function(){
            $('.dropdown-submenu a.test').on("click", function(e){
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        });
        


    </script>

    <script>
                    
        $(window).on('load', function() { // makes sure the whole site is loaded 
            $('.add_payer')[0].reset();
        });

    </script>


</body>

</html>