<?php
//Genéré par GeneratorClassV4.0.0 le 19-01-2022 à 19:50:02

class commande extends spacework
{

    public $fields = ['codecommande',  'etatcommande', 'datecommande'];
    public function __construct()
    {

        parent::__construct();
    }
    public function listecommande()
    {
        global $db;
        $query = "SELECT * FROM commande,lignecommande WHERE commande.codecommande=lignecommande.id_commande ";
        $resultat = $db->query($query);
        return $resultat->fetchAll();
    }
    public static function articleByOrder()
    {
        global $db;
        $query = "SELECT * FROM commande,lignecommande WHERE commande.id=lignecommande.id_commande ";
        $resultat = $db->query($query);
        $data = $resultat->fetchAll(PDO::FETCH_OBJ);
        $refarticle = [];
        $refcommande = [];
        foreach ($data as $datas) {
            $refarticle[] = $datas->refarticle;
            $refcommande[] = $datas->codecommande;
        }

        $ins = '(' . implode(',', $refarticle) . ')';
        $sql = 'SELECT idvendeur FROM  article  WHERE idarticle in ' . $ins;
        $query = $db->prepare($sql);
        $query->execute();
        $idvendeurconserner =  $query->FetchAll(PDO::FETCH_OBJ);
        return $arrayName = array(
            'vendeur' => $idvendeurconserner,
            'codecommande' => $refcommande,
        );
    }

    public static function vendeurByArticle()
    {

        global $db;
        $query = "SELECT refarticle,quantitearticle,prixarticle FROM commande,lignecommande WHERE commande.id=lignecommande.id_commande ";
        $resultat = $db->query($query);
        return $resultat->fetchAll();
    }




    public static function PlusDetailsCommande($idcommande, $idvendeur)
    {
        global $db;
        $query = "SELECT * FROM commande,lignecommande WHERE commande.id='$idcommande' AND lignecommande.id_commande='$idcommande' AND lignecommande.vendeur_lie_article='$idvendeur' ";
        $resultat = $db->query($query);
        return $resultat->fetchAll();
    }
    public function Detailecommande($id)
    {
        global $db;
        $query = "SELECT * FROM lignecommande WHERE  id_commande ='$id' ";
        $resultat = $db->query($query);
        return $resultat->fetchAll();
    }
}
