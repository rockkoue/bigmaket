///////////////////////////////////Mot de passe eye///////////////////////////////////////////////////////

const eye = document.querySelector('.fa-eye');
const eyeoff = document.querySelector('.fa-eye-slash');
const passwordFied = document.querySelector('input[type=password]');

eye.addEventListener('click',() => {
  eye.style.display = "none";
  eyeoff.style.display = "block";
  passwordFied.type = "text";
})

eyeoff.addEventListener('click', () => {
  eyeoff.style.display = "none";
  eye.style.display = "block";
  passwordFied.type = "password";

})

/////////////////////////////////////////////////////////////////////////////////

class FormValidation{
    formValues = {
        username : "",
        phonenumber : "",
        password : "",
        confirmpassword : ""
    }
    errorValues = {
        usernameErr : "",
        phonenumberErr : "",
        passwordErr : "",
        confirmpasswordErr : ""
    }
    showErrorMsg(index,msg){
        const form_group = document.getElementsByClassName('form-group')[index]
        form_group.classList.add('error')
        form_group.getElementsByTagName('span')[0].textContent = msg   
    }
    showSuccessMsg(index){
        const form_group = document.getElementsByClassName('form-group')[index]
        form_group.classList.remove('error')
        form_group.classList.add('success')
    }
    getInputs(){
        this.formValues.username = document.getElementById('username').value.trim()
        this.formValues.phonenumber = document.getElementById('phonenumber').value.trim()
        this.formValues.password = document.getElementById('password').value.trim()
        this.formValues.confirmpassword = document.getElementById('confirmpassword').value.trim()
    }
    validateUsername(){
        if(this.formValues.username === ""){
            this.errorValues.usernameErr = "* Entrez votre nom et prénom s'il vous plaît ! "
            this.showErrorMsg(0,this.errorValues.usernameErr)
        } else if(this.formValues.username.length <= 4 ){
            this.errorValues.usernameErr = "* Le nom  doit comporter au moins 5 caractères"
            this.showErrorMsg(0,this.errorValues.usernameErr)
        } else if(this.formValues.username.length > 20){
            this.errorValues.usernameErr = "* Le nom d'utilisateur ne doit pas dépasser 20 caractères"
            this.showErrorMsg(0,this.errorValues.usernameErr)
        } else {
            this.errorValues.usernameErr = ""
            this.showSuccessMsg(0)
        }
    }

    validatePhonenumber(){
       const phoneno = /^\d{10}$/
       if(this.formValues.phonenumber === ""){
           this.errorValues.phonenumberErr = "* Entrez un numéro de téléphone s'il vous plait !"
           this.showErrorMsg(1,this.errorValues.phonenumberErr)
       } else if(phoneno.test(this.formValues.phonenumber)){
           this.errorValues.phonenumberErr = ""
           this.showSuccessMsg(1)
       } else {
           this.errorValues.phonenumberErr = "* Numéro de téléphone invalide."
  
           this.showErrorMsg(1,this.errorValues.phonenumberErr)
       }
    }
    validatePassword(){
        if(this.formValues.password === ""){
            this.errorValues.passwordErr = "* fournir un mot de passe s'il vous plait !  "
            this.showErrorMsg(2,this.errorValues.passwordErr)
        } else if(this.formValues.password.length <= 4){
            this.errorValues.passwordErr = "* Au moins 5 caractères !"
            this.showErrorMsg(2,this.errorValues.passwordErr)
        } else if(this.formValues.password.length > 15){
            this.errorValues.passwordErr = "* Ne doit pas dépasser 15 caractères !"
            this.showErrorMsg(2,this.errorValues.passwordErr)
        } else {
            this.errorValues.passwordErr = ""
            this.showSuccessMsg(2)
        }
    }
    validateConfirmpassword(){
        if(this.formValues.confirmpassword === ""){
            this.errorValues.confirmpasswordErr = "* le mot de passe doit être conforme."
            this.showErrorMsg(3,this.errorValues.confirmpasswordErr)
        } else if(this.formValues.confirmpassword === this.formValues.password && this.errorValues.passwordErr === ""){
            this.errorValues.confirmpasswordErr = ""
            this.showSuccessMsg(3)
        } else if(this.errorValues.passwordErr){
            this.errorValues.confirmpasswordErr = "* Une erreur s'est produite. "
            this.showErrorMsg(3,this.errorValues.confirmpasswordErr)
        } else {
            this.errorValues.confirmpasswordErr = "* Le mot de passe doit correspondre."
            this.showErrorMsg(3,this.errorValues.confirmpasswordErr)
        }
    }
    alertMessage(){
        const {usernameErr , phonenumberErr , passwordErr , confirmpasswordErr}= this.errorValues
        if(usernameErr === "" && phonenumberErr === "" && passwordErr === "" && confirmpasswordErr === ""){
            swal("Inscription réussi","Merci, "+this.formValues.username,"success").then(() => {
                console.log(this.formValues)
                this.removeInputs()
            })
        } else {
            swal("Entrées des informations valides.","Cliquez sur ok pour continuer" ,"error")
        }
    }
  
    removeInputs(){
        const form_groups = document.getElementsByClassName('form-group')
        Array.from(form_groups).forEach(element => {
            element.getElementsByTagName('input')[0].value = ""
            element.getElementsByTagName('span')[0].textContent = ""
            element.classList.remove('success')
        })
    }
  } 
  
  const ValidateUserInputs = new FormValidation()
  
  document.getElementsByClassName('form')[0].addEventListener('submit' , event => {
    event.preventDefault()
    ValidateUserInputs.getInputs()
    ValidateUserInputs.validateUsername()
    ValidateUserInputs.validatePhonenumber()
    ValidateUserInputs.validatePassword()
    ValidateUserInputs.validateConfirmpassword()
    ValidateUserInputs.alertMessage()
  })
  
  
  