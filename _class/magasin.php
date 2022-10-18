<?php
//Genéré par GeneratorClassV4.0.0 le 11-11-2021 à 01:04:48

class magasin extends spacework
{

    public $fields = ['id', 'nommagasin', 'stock', 'vendeur', 'lieu', 'numeroderegiste', 'datecreation', 'status', 'document', 'marche'];

    public function __construct()
    {

        parent::__construct();
    }
    public function nombremagazin()
    {
        global $db;
        $query = $db->prepare("SELECT * FROM magasin");
        $query->execute();
        $s = $query->FetchAll(PDO::FETCH_OBJ);
        return count($s);
    }
    public function magazin()
    {
        global $db;
        $query = $db->prepare("SELECT * FROM magasin ,marche,commune WHERE lieu=commune.id AND marche=marche.id");
        $query->execute();

        return $query->FetchAll(PDO::FETCH_OBJ);;
    }
    public static function Onemagazin($ids)
    {
        global $db;
        $query = $db->prepare("SELECT nommagasin FROM magasin  WHERE  id=$ids");
        $query->execute();
        $result = $query->Fetch(PDO::FETCH_OBJ);
        return $result->nommagasin;
    }
}
