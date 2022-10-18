const form = document.querySelector("form");
eField = form.querySelector(".email"),
  eInput = eField.querySelector("input"),
  pField = form.querySelector(".password"),
  pInput = pField.querySelector("input");

form.onsubmit = (e) => {
  e.preventDefault(); //empêcher l'envoi du formulaire
  //si l'e-mail et le mot de passe sont vides, ajoutez une classe de secousses
  (eInput.value == "") ? eField.classList.add("shake", "error") : checkEmail();
  (pInput.value == "") ? pField.classList.add("shake", "error") : checkPass();

  setTimeout(() => { //supprimer la classe 
    eField.classList.remove("shake");
    pField.classList.remove("shake");
  }, 500);

  eInput.onkeyup = () => { checkEmail(); } // la fonction checkEmail lors de la saisie de l'e-mail
  pInput.onkeyup = () => { checkPass(); } // la fonction checkPassword lors de la saisie du mot de passe

  function checkEmail() { //checkEmail function
    let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/; //modèle pour valider l'e-mail
    if (!eInput.value.match(pattern)) { //si le motif ne correspond pas, ajoutez une erreur et supprimez la classe valide
      eField.classList.add("error");
      eField.classList.remove("valid");
      let errorTxt = eField.querySelector(".error-txt");
      //si la valeur de l'e-mail n'est pas vide alors afficher s'il vous plaît entrer un e-mail valide sinon afficher L'e-mail ne peut pas être vide
      (eInput.value != "") ? errorTxt.innerText = "Entrez une adresse e-mail ou un numéro valide." : errorTxt.innerText = "Entrez votre adresse e-mail ou numéro s'il vous plait!";
    } else { //si le motif correspond, supprimez l'erreur et ajoutez une classe valide
      eField.classList.remove("error");
      eField.classList.add("valid");
    }
  }

  function checkPass() { //Fonction checkPass
    if (pInput.value == "") { //si pass est vide, ajoutez une erreur et supprimez la classe valide
      pField.classList.add("error");
      pField.classList.remove("valid");
    } else { //si pass est vide, supprimez l'erreur et ajoutez une classe valide
      pField.classList.remove("error");
      pField.classList.add("valid");
    }
  }

  //si eField et pField ne contiennent pas de classe d'erreur, cela signifie que l'utilisateur a correctement rempli les détails
  if (!eField.classList.contains("error") && !pField.classList.contains("error")) {
    window.location.href = form.getAttribute("action"); //rediriger l'utilisateur vers l'URL spécifiée qui se trouve dans l'attribut action de la balise form
  }
}

///////////////////////////////////Mot de passe eye///////////////////////////////////////////////////////

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





