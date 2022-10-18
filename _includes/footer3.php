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




<script>
    const eye = document.querySelector('.fa-eye');
    const eyeoff = document.querySelector('.fa-eye-slash');
    const passwordFied = document.querySelector('input[type=password]');

    eye.addEventListener('click', () => {
        eye.style.display = "none";
        eyeoff.style.display = "block";
        passwordFied.type = "text";
    })

    eyeoff.addEventListener('click', () => {
        eyeoff.style.display = "none";
        eye.style.display = "block";
        passwordFied.type = "password";

    })
</script>



<script>
    const popupScreen = document.querySelector(".popup-screen");
    const popupBox = document.querySelector(".popup-box");
    const closeBtn = document.querySelector(".close-btn");

    window.addEventListener("load", () => {
        setTimeout(() => {
            popupScreen.classList.add("active");
        }, 20);
    });

    closeBtn.addEventListener("click", () => {
        popupScreen.classList.remove("active");

        document.cookie = "WebsiteName=testWebsite; max-age=" + 24 * 60 * 60;
    });

    const WebsiteCookie = document.cookie.indexOf("WebsiteName=");

    if (WebsiteCookie != -1) {
        popupScreen.style.display = "none";
    } else {
        popupScreen.style.display = "flex";
    }
</script>






</html>