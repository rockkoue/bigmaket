<?php
//Genéré par GeneratorClassV4.0.0 le 23-11-2021 à 04:58:03

class abonnement extends spacework
{

    public $fields = ['id', 'id_user', 'id_magasin', 'created'];


    public function __construct()
    {
        parent::__construct();
    }
    public static function checketat($user, $magasin)
    {

        global $db;
        $requete = $db->prepare(" SELECT * FROM abonnement WHERE id_user=:user AND id_magasin=:magasin");
        $requete->execute(array(
            ':user' => $user,
            ':magasin' => $magasin
        ));
        if ($requete->FetchColumn()) {
            return 1;
        } else {
            return 0;
        }
    }
    public static function magasinid($user, $magasin)
    {

        global $db;
        $requete = $db->prepare(" SELECT id FROM abonnement WHERE id_user=:user AND id_magasin=:magasin");
        $requete->execute(array(
            ':user' => $user,
            ':magasin' => $magasin
        ));
        return $requete->Fetch();
    }
    public static function Nbreabonne($idvendeur)
    {
        global $db;
        $requete = $db->prepare(" SELECT COUNT(id_magasin)  FROM abonnement WHERE id_magasin=:idvendeur");
        $requete->execute(array(
            ':idvendeur' => $idvendeur
        ));
        $count = $requete->Fetch();
        return $count["COUNT(id_magasin)"];
    }
}
