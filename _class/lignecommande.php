<?php
//Genéré par GeneratorClassV4.0.0 le 19-01-2022 à 19:50:02

class lignecommande extends spacework
{

    public $fields = ['id_commande', 'refarticle', 'quantitearticle', 'prixarticle', 'vendeur_lie_article'];

    public function __construct()
    {

        parent::__construct();
    }

    public static function vendeur_commande($identifiant)
    {
        global $db;

        $query = "SELECT * FROM lignecommande WHERE  vendeur_lie_article ='$identifiant' ";
        $resultat = $db->query($query);
        return $resultat->fetchAll();
    }
    public static function diffcommande($identifiant)
    {
        global $db;
        $query = "SELECT DISTINCT id_commande FROM lignecommande WHERE  vendeur_lie_article ='$identifiant' ";
        $resultat = $db->query($query);
        return $resultat->fetchAll();
    }
    public static function Detailcommande($identifiant, $idcommande)
    {
        global $db;
        $query = "SELECT *  FROM lignecommande WHERE  vendeur_lie_article ='$identifiant' AND id_commande='$idcommande'";
        $resultat = $db->query($query);
        return $resultat->fetchAll();
    }
    public static function vendeurcommandeTest($identifiant)
    {
        global $db;
        $query = "SELECT DISTINCT id_commande FROM lignecommande WHERE  vendeur_lie_article ='$identifiant' ";
        $resultat = $db->query($query);
        return $resultat->fetchAll();
    }
    public static function PrixTotaleParcommande($idcommande, $idvendeur)
    {
        global $db;
        $query = "SELECT * FROM lignecommande WHERE   id_commande='$idcommande'  AND vendeur_lie_article ='$idvendeur' ";
        $resultat = $db->query($query);
        if ($resultat > 0) {
            $total = 0;
            foreach ($resultat as $data) {
                $total += $data['quantitearticle'] * $data['prixarticle'];
            }
            return $total;
        }
    }
}
