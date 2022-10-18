<section class="barriere">

    <div class="autoplayin">

        <span class="txt t1">Achète partour et tout en un clic sur Market Online (mo.com) - La priorité de notre service client, c’est votre sécurité et la protection de vos données
            personnelles.
            &nbsp;</span>
        <span class="txt t2">&nbsp;</span>
    </div>

    </div>
</section>

<div class="baspages">
    <div class="quick-links">
        <ul>
            <li class="quick-items"><a href="#">Conditions d'utilisation</a></li>
            <li class="quick-items"><a href="#">Avis de confidentialité</a></li>
        </ul>
    </div>
    <br><br>
    <div class="copy-links">
        <ul>
            <p>&copy; 2021 Market Online | mo.com, tous droits réservés.</p>
        </ul>
    </div>
</div>

</section>

</body>

<script></script>


<script>
    const prevBtns = document.querySelectorAll(".btn-prev");
    const nextBtns = document.querySelectorAll(".btn-next");
    const progress = document.getElementById("progress");
    const formSteps = document.querySelectorAll(".form-step");
    const progressSteps = document.querySelectorAll(".progress-step");

    let formStepsNum = 0;

    nextBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            formStepsNum++;
            updateFormSteps();
            updateProgressbar();
        });
    });

    prevBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            formStepsNum--;
            updateFormSteps();
            updateProgressbar();
        });
    });

    function updateFormSteps() {
        formSteps.forEach((formStep) => {
            formStep.classList.contains("form-step-active") &&
                formStep.classList.remove("form-step-active");
        });

        formSteps[formStepsNum].classList.add("form-step-active");
    }

    function updateProgressbar() {
        progressSteps.forEach((progressStep, idx) => {
            if (idx < formStepsNum + 1) {
                progressStep.classList.add("progress-step-active");
            } else {
                progressStep.classList.remove("progress-step-active");
            }
        });

        const progressActive = document.querySelectorAll(".progress-step-active");

        progress.style.width =
            ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
    }




    $('.form').submit(function(e) {
        e.preventDefault();
        email = document.querySelector('.email').value;
        emailconf = document.querySelector('.emailconf').value;
        mdp = document.querySelector('.mdp').value;
        mdpconf = document.querySelector('.mdpconf').value;

        if (email != '' || mdp != '') {
            $('#msg_info').text('');
            if (email != emailconf) {
                $('#msg_info').append('<div class="alert alert-danger" role="alert">!  L\'adresse email doit être identique</div>');
            }
            if (mdp != mdpconf) {

                $('#msg_info').append('<div class="alert alert-danger" role="alert">!  Le mot de passe doit être identique</div>');
            }

            /**if(IsEmail(email)==false){
             $('#invalid_email').show();
                 return false;
             }*/
            if (email == emailconf & mdp == mdpconf) {
                var form = new FormData($(this)[0]);
                var buttonDefault = $('#Formmultiplstep').text();
                var button = $('#Formmultiplstep');

                button.attr('disabled', true);
                button.text('Veuillez patienter ...');

                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: form,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    success: function(result) {
                        button.attr('disabled', false);
                        button.text(buttonDefault);
                        if (result.status == "success") {
                            swal({
                                text: result.message,
                                icon: "success",
                            });

                        } else {
                            swal({
                                text: result.message,
                                icon: "warning",
                            });

                        }


                    }
                });
            }

        } else {
            var form = new FormData($(this)[0]);
            var buttonDefault = $('#Formmultiplstep').text();
            var button = $('#Formmultiplstep');

            button.attr('disabled', true);
            button.text('Veuillez patienter ...');

            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: form,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function(result) {
                    button.attr('disabled', false);
                    button.text(buttonDefault);
                    if (result.status == "success") {
                        swal({
                            text: result.message,
                            icon: "success",
                        });

                    } else {
                        swal({
                            text: result.message,
                            icon: "warning",
                        });

                    }


                }
            });
        }




    });

    function FetchVilleMagasin(id) {
        $('#commune_magasinM').html('');
        $('#marche_magasinM').html(' <option class="hidden" selected disabled>   le marché où est située votre magasin * </option>');
        //$('#commune_magasinM').html('<option>Select City</option>');
        $.ajax({
            type: 'post',
            url: '_controllers/controllerville.php?function=VilleMagasin',
            data: {
                ville_magasin: id
            },
            success: function(data) {
                $('#commune_magasinM').html(data);
            }

        })
    }

    function FetchCommuneMagasin(id) {
        $('#marche_magasinM').html('');
        $.ajax({
            type: 'post',
            url: '_controllers/controllercommune.php?function=CommuneMagasin',
            data: {
                commune_magasin: id
            },
            success: function(data) {
                $('#marche_magasinM').html(data);
            }

        })
    }
</script>







</html>