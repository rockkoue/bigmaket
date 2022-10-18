<?php
//Genéré par GeneratorClassV4.0.0 le 11-11-2021 à 01:04:48

class stock extends spacework
{

    public $fields = ['id', 'reference_stock', 'article',  'quantite', 'date_stockage', 'colors', 'prix', 'taille', 'description', 'magasin'];

    public function __construct()
    {

        parent::__construct();
    }

    public static function stockbymagasin($idmag)
    {
        $idmagasin = $idmag;
        global $db;
        $query = $db->prepare("SELECT * FROM stock,article WHERE magasin=$idmagasin AND article=idarticle");
        $query->execute();

        return $query->FetchAll(PDO::FETCH_OBJ);;
    }
}
