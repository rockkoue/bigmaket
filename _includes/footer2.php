
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

<script src="loginuser.js"></script>



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



</html>