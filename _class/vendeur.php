<?php
//Genéré par GeneratorClassV4.0.0 le 11-11-2021 à 01:04:48

class vendeur extends spacework
{

    public $fields = [
        'nom',
        'prenom',
        'telephone',
        'password',
        'status',
        'access',
        'email',
        'pays',
        'ville',
        'genre',
        'registe',
        'avatar',
        'nom_magasin',
        'ville_magasin',
        'commune_magasin',
        'marche_magasin',
        'logo_magasin',
        'docmagasin',
        'docidentite'
    ];

    public function __construct()
    {

        parent::__construct();
    }



    public static function connexion($login, $password)
    {

        global $db;

        $requete = $db->prepare(" SELECT * FROM vendeur WHERE email=:email AND password=:password ");
        $requete->execute(["email" => $login, "password" => hash('ripemd160', $password)]);

        return $requete->FetchColumn();
    }

    public static function status($status)
    {

        if ($status == 0) {

            $text_status = '<span class="text-success">Activer</span>';
        } else {

            $text_status = '<span class="text-danger">Désactiver</span>';
        }

        return $text_status;
    }


    public static function deconnexion()
    {

        unset($_SESSION['Idvendeur']);
        return true;
    }
    public static function nombremagazin()
    {
        global $db;
        $query = $db->prepare("SELECT * FROM vendeur");
        $query->execute();
        $s = $query->FetchAll(PDO::FETCH_OBJ);
        return count($s);
    }
    public function rechervale()
    {
        if ($_POST['idformation'] && $_POST['iddomain']) {
            global $db;
            $idformation = $_POST['idformation'];
            $iddomain = $_POST['iddomain'];
            $query = "SELECT * FROM sous_domaine WHERE formation='$idformation' AND domaine ='$iddomain' ";
            $resultat = $db->query($query);

            if ($resultat->rowCount() > 0) {
                while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value=" . $row['id'] . ">" . $row['libelle_sousdomaine'] . "</option>";
                }
            } else {
                echo '<option >No DATA</option>';
            }
        }
    }

    public static function vendeurencour()
    {
        global $db;

        $stmt = $db->prepare("SELECT * FROM vendeur WHERE status=1 ");
        $stmt->execute();
        return $stmt->FetchAll(PDO::FETCH_OBJ);
    }
    public static function vendeurvalider()
    {
        global $db;

        $stmt = $db->prepare("SELECT * FROM vendeur WHERE status=0 ");
        $stmt->execute();
        return $stmt->FetchAll(PDO::FETCH_OBJ);
    }
    public static function Getcommune($idcommune)
    {
        global $db;
        if ((int)$idcommune) {

            $stmt = $db->prepare("SELECT * FROM commune WHERE id=:idcommune ");
            $stmt->execute([':idcommune' => $idcommune]);
            $data = $stmt->Fetch(PDO::FETCH_ASSOC);
            return $data['nom_commune'];
        } else {
            return '';
        }
    }
    public static function Getville($idville)
    {
        global $db;
        if ((int)$idville) {
            $stmt = $db->prepare("SELECT * FROM ville WHERE id=:idville ");
            $stmt->execute([':idville' => $idville]);
            $data = $stmt->Fetch(PDO::FETCH_ASSOC);
            return $data['nom_ville'];
        } else {
            return '';
        }
    }
    public static function Getmarche($idmarche)
    {
        global $db;
        if ((int)$idmarche) {
            $stmt = $db->prepare("SELECT * FROM marche WHERE id=:idmarche ");
            $stmt->execute([':idmarche' => $idmarche]);
            $data = $stmt->Fetch(PDO::FETCH_ASSOC);
            return $data['nom_marche'];
        } else {
            return '';
        }
    }




    public function EnvoieMailActivation($adresse, $messageEmail, $access)
    {
        //$email_from = 'info@ezyshopci.com';
        $email = $adresse;
        $headers = 'From:momomarket@gmail.com' . "\r\n";
        $headers .= "Organization: Sender Organization\r\n";
        $headers .= 'Reply-To: http://adompoi7.beget.tech/' . "\r\n";
        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= 'Content-Type: text/html; charset="utf-8; charset=iso-8859-1" ' . "\r\n";
        $headers .= 'X-Mailer: ' . phpversion() . "\r\n";
        $message = '<Doctype html><html><body>';
        $message .= '<img width=100 src="http://adompoi7.beget.tech/assets/img/logo/logo-2.png" alt="logo" alt="momo market" /><br><br>';
        $message .= " $messageEmail <br> \n";
        $message .= "<p>Cliquez sur le liens ci desous pour <strong> pour active votre compte</strong> .<br><a href='http://adompoi7.beget.tech/verification.php?validation=$access'>adompoi7.beget.tech/</a></p> \n";
        $message .= '</body></html>';
        $sujet = 'Nouveau message';
        //adresse d'envoie
        mail($email, $sujet, $message, $headers);

        return true;
    }

    public function EnvoieMailcreationdecompte($adresse, $messageEmail, $access)
    {
        //$email_from = 'info@ezyshopci.com';
        $email = $adresse;
        $headers = 'From:momomarket@gmail.com' . "\r\n";
        $headers .= "Organization: Sender Organization\r\n";
        $headers .= 'Reply-To: http://adompoi7.beget.tech/' . "\r\n";
        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= 'Content-Type: text/html; charset="utf-8; charset=iso-8859-1" ' . "\r\n";
        $headers .= 'X-Mailer: ' . phpversion() . "\r\n";
        $message = '<Doctype html><html><body>';
        $message .= '<img width=100 src="http://adompoi7.beget.tech/assets/img/logo/logo-2.png" alt="logo" alt="momo market" /><br><br>';
        $message .= " $messageEmail <br> \n";
        $message .= "<p>votre compte a bien ete creer merci,votre dossier est en cours de verifiaction</strong> .<br>
        </p> \n";
        $message .= '</body></html>';
        $sujet = 'Nouveau message';
        //adresse d'envoie
        mail($email, $sujet, $message, $headers);

        return true;
    }
}
