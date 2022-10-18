<?php
class administrateur extends spacework
{

    public $fields = ['id', 'nom', 'prenom', 'avatar', 'login', 'code_compte', 'date_ajout', 'admin_ajout', 'access'];

    public function __construct()
    {

        parent::__construct();
    }
    public static function connexion($login, $password)
    {

        global $db;

        $requete = $db->prepare(" SELECT * FROM administrateur WHERE login=:login AND code_compte=:code_compte ");
        $requete->execute(["login" => $login, "code_compte" => hash('ripemd160', $password)]);

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

        unset($_SESSION['IdAdministrateur']);
        return true;
    }
}
