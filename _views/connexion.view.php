<div class="wrapper">

    <h5> Se connecter</h5>
    <form action="_controllers/controlleruser.php?function=connexion_user
" method="POST" id="loginUser">
        <div class="field email">
            <div class="input-area">
                <input type="email" placeholder="Entrer e-mail ou numero ." name="email" required>
                <i class="icon fas fa-envelope"></i>
            </div>
        </div>
        <div class="field password">
            <div class="input-area">
                <input type="password" placeholder="Entrer votre mot de passe." name="password" required>
                <i class="icon fas fa-lock"></i>
            </div>
        </div>
        <div class="password-icon">
            <i class="far fa-eye"></i>
            <i class="far fa-eye-slash"></i>
        </div>
        <div class="blod-s">
            <div class="remerberx">
                <input type="checkbox" name="remerberme" id="checkv">
                <label for="remerberme">se souvenir</label>
            </div>
            <div class="re-password">
                <a href="motpasse.html">Mot de passe oublié?</a>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>

    <div class="sign-txt">Pas encore membre? <a href="inscriptions.php">S'inscrire maintenant</a></div>
    <h4 class="pourc">connectez-vous avec:</h4>

    <div class="btnRow">

        <a href="https://fr-fr.facebook.com/" class="=btn btnGroup">
            <img src="https://image.flaticon.com/icons/png/512/733/733547.png" />
            <!--fac-->
        </a>
        <a href="https://accounts.google.com/signin/v2/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="=btn btnGroup">
            <img src="https://img.icons8.com/color/48/000000/google-logo.png" />
            <!--goo-->
        </a>
        <a href="https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=13&ct=1629067290&rver=7.0.6737.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1%26RpsCsrfState%3dcd2dd6cb-8297-6cc8-918e-00cac160c666&id=292841&aadredir=1&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015" class="=btn btnGroup">
            <img src="https://image.flaticon.com/icons/png/512/732/732223.png" />
            <!--hot-->
        </a>
        <a href="https://www.linkedin.com/uas/login?session_redirect=%2Foauth%2Fv2%2Flogin-success%3Fapp_id%3D4238991%26auth_type%3DAC%26flow%3D%257B%2522authorizationType%2522%253A%2522OAUTH2_AUTHORIZATION_CODE%2522%252C%2522redirectUri%2522%253A%2522https%253A%252F%252Fpassport.alibaba.com%252Foauth_sign.htm%253Ftype%253Dlinkedin%2526return_url%253Dhttps%25253A%25252F%25252Flogin.alibaba.com%25252Fauto_login.htm%2522%252C%2522currentStage%2522%253A%2522LOGIN_SUCCESS%2522%252C%2522currentSubStage%2522%253A0%252C%2522authFlowName%2522%253A%2522generic-permission-list%2522%252C%2522appId%2522%253A4238991%252C%2522creationTime%2522%253A1629067563420%252C%2522state%2522%253A%2522eyJhY3Rpb24iOiJXSU5ET1ciLCJhcHBFbnRyYW5jZSI6ImRlZmF1bHQiLCJhcHBOYW1lIjoiaWNidSIsImxhbmciOiJ6aF9DTiIsIm1vYmlsZSI6ZmFsc2UsInN0YXRlIjoiMjIzM2E0MGU5M2MyNGFlN2E2NGU4MTgxNjczZjVjNWQiLCJ0b2tlbiI6ImlkY18yRE9pZzdXREJTcXljUUQwOXoxY0tDdyJ9%2522%252C%2522scope%2522%253A%2522r_liteprofile%2Br_emailaddress%2522%257D&fromSignIn=1&trk=oauth&cancel_redirect=%2Foauth%2Fv2%2Flogin-cancel%3Fapp_id%3D4238991%26auth_type%3DAC%26flow%3D%257B%2522authorizationType%2522%253A%2522OAUTH2_AUTHORIZATION_CODE%2522%252C%2522redirectUri%2522%253A%2522https%253A%252F%252Fpassport.alibaba.com%252Foauth_sign.htm%253Ftype%253Dlinkedin%2526return_url%253Dhttps%25253A%25252F%25252Flogin.alibaba.com%25252Fauto_login.htm%2522%252C%2522currentStage%2522%253A%2522LOGIN_SUCCESS%2522%252C%2522currentSubStage%2522%253A0%252C%2522authFlowName%2522%253A%2522generic-permission-list%2522%252C%2522appId%2522%253A4238991%252C%2522creationTime%2522%253A1629067563420%252C%2522state%2522%253A%2522eyJhY3Rpb24iOiJXSU5ET1ciLCJhcHBFbnRyYW5jZSI6ImRlZmF1bHQiLCJhcHBOYW1lIjoiaWNidSIsImxhbmciOiJ6aF9DTiIsIm1vYmlsZSI6ZmFsc2UsInN0YXRlIjoiMjIzM2E0MGU5M2MyNGFlN2E2NGU4MTgxNjczZjVjNWQiLCJ0b2tlbiI6ImlkY18yRE9pZzdXREJTcXljUUQwOXoxY0tDdyJ9%2522%252C%2522scope%2522%253A%2522r_liteprofile%2Br_emailaddress%2522%257D" class="=btn btnGroup">
            <img src="https://image.flaticon.com/icons/png/512/124/124011.png" />
            <!--tw-->
        </a>
    </div>

</div>
