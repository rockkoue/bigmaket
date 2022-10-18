<!--debut footer-->

<div class="pos-footer">
    <section class="barriere">
        <div class="autoplayin">
            <span class="txt t1"> Achète partour et tout en un clic sur Market Online (mo.com) - La priorité de notre
                service client, c’est votre sécurité et la protection de vos données
                personnelles. &nbsp;</span>
            <span class="txt t2">&nbsp;</span>
        </div>

    </section>

    <section id="footerG">

        <footer class="py-5">
            <div class="row">

                <div class="col-md-4 col-lg-3 col-xl-3 max-auto mt-3">
                    <ul class="nav flex-column">

                        <li class="titlef">Pages.</li>

                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Acceuil</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Devenir
                                Vendeur</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Qui sommes
                                nous?</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contacts</a></li>
                    </ul>
                    <br>
                </div>


                <div class="col-md-4 col-lg-3 col-xl-3 max-auto mt-3">
                    <ul class="nav flex-column">

                        <li class="titlef">Conditions d'utilisation.</li>

                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Politique de
                                Confidentialité</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Publicité sur
                                mo</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Aide</a></li>
                    </ul>
                    <br>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 max-auto mt-3">
                    <ul class="nav flex-column">

                        <li class="titlef">Applications Mobiles.</li>

                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    </ul>
                    <br>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 max-auto mt-3">
                    <form>
                        <h5 class="bg30">Newsletter.</h5>
                        <p class="bg35">Restez les premiers informés.</p>
                        <div class="d-flex w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="E-mail... ">
                            <button class="btn btn-outline-primary" type="button">S'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="justify-content-between py-4 my-4 border-top">
                <div class="lion">
                    <h6>&copy; 2021 Market Online | mo.com, tous droits réservés.</h6>
                    <ul class="list-unstyled d-flex">
                        <div class="bg65">
                            <li class="ms-3"><a class="fab fa-twitter" href="#">
                                    <use xlink:href="#twitter" />
                                </a></li>
                            <li class="ms-3"><a class="fab fa-instagram" href="#">
                                    <use xlink:href="#instagram" />
                                </a></li>
                            <li class="ms-3"><a class="fab fa-facebook" href="#"></a>
                                <use xlink:href="#facebook" /></a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </footer>
</div>
</section>
<!--fin footer-->

<!---Debut store search magasin--->



<!---Fin store search--->



<!-- Debut Chatbot-->

<section class="autochat">

    <div class="chat_icon">
        <i class="bi bi-chat-text"></i>
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




<script>

    $(".par__delete .par-delete").click(function () {
        $(this).parent().toggleClass("active");
    });

</script>


<script>
    $(document).ready(function () {
        $(".mul-select").select2({
            placeholder: "selectionner les tailles........*", //placeholder
            tags: true,
            tokenSeparators: ['/', ',', ';', " "]
        });
    })
</script>


<script>
    $(document).ready(function () {
        $(".mul-select1").select2({
            placeholder: "selectionner les couleurs...*", //placeholder
            tags: true,
            tokenSeparators: ['/', ',', ';', " "]
        });
    })
</script>



<script>

    function previewBeforeUpload(id) {
        document.querySelector("#" + id).addEventListener("change", function (e) {
            if (e.target.files.length == 0) {
                return;
            }
            let file = e.target.files[0];
            let url = URL.createObjectURL(file);
            document.querySelector("#" + id + "-preview div").innerText = file.name;
            document.querySelector("#" + id + "-preview img").src = url;
        });
    }

    previewBeforeUpload("file-1");
    previewBeforeUpload("file-2");
    previewBeforeUpload("file-3");

</script>

<!--script-->

<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<script type="text/javascript">
    $('.main-carousel').flickity({
        // options
        cellAlign: 'left',
        wrapAround: true,
        freeScroll: true
    });
</script>


<script src="jsv\fonctionnalites.js"></script>
<script src="jsv\suggestions.js"></script>
<script src="jsv\autochat.js"></script>
<script src="jsv\barrefooter.js"></script>
<script src="jsv\btnretour.js"></script>
<script src="jsv\aide.js"></script>
<script src="jsv\scroll.js"></script>
<script src="jsv\scrollnav.js"> </script>
<script src="jsv\profilesx.js"></script>
<script src="jsv\mdl\Jquery"></script>


<script src="like.js"></script>

<script src="jsv\mdl\Jquery"></script>


<!--script carousel-->

<script src="js/mdl/jquery.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="https://cdn.jsdeliver.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="jsv\script.js"></script>


<script>
    $(document).ready(function (e) {
        $('#formulaireIDuser').submit(function (e) {
            e.preventDefault();
            var form = new FormData($(this)[0]);

            // var buttonDefault = $('#<?= $id_form ?>').text();
            var button = $('#submit')
            button.attr('disabled', true);

            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: form,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function (result) {
                    button.attr('disabled', false);
                    //button.text(buttonDefault);

                    if (result.status == "success") {
                        window.location.reload();
                    } else {
                        console.log('eexee');
                        // new swal("", result.message, result.status);
                    }
                }
            });

        });

    });
</script>


</html>