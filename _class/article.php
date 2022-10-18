<?php
//Genéré par GeneratorClassV4.0.0 le 11-11-2021 à 01:04:48

class article extends spacework
{

    public $fields = ['idarticle', 'libellearticle', 'idcategorie',  'image', 'image2', 'image3', 'datedecreation', 'idvendeur', 'description', 'prixarticle', 'size', 'color'];

    public function __construct()
    {
        parent::__construct();
    }

    public static function listearticle()
    {

        global $db;
        $idvendeur = $_SESSION['Idvendeur'];
        $sql = "select * from article  WHERE idvendeur= $idvendeur";

        $query = $db->prepare($sql);
        $query->execute();
        return $query->FetchAll(PDO::FETCH_OBJ);
    }
    public function TestBlockHTML($replStr)
    {
        return <<<HTML
            
            <h1>{$replStr}</h1>
        HTML;
    }

    public static function ArticleByIdcat($id, $idcat)
    {
        $id = (int)$id;
        $idcat = (int)$idcat;

        $sql = "select * FROM  article WHERE idcategorie=$idcat AND idvendeur= $id";
        global $db;
        $query = $db->prepare($sql);
        $query->execute();
        $data = $query->FetchAll(PDO::FETCH_OBJ);
        if (!empty($data)) {
            return $data;
        } else {
            //return  "pas encore de produit disponible concernant cette categorie";
        }
    }
    public static function CategorieByIdIvendeur($id)
    {
        $id = (int)$id;

        $sql = "SELECT DISTINCT idcategorie FROM article WHERE idvendeur= $id";
        global $db;
        $query = $db->prepare($sql);
        $query->execute();
        $data = $query->FetchAll(PDO::FETCH_OBJ);

        if (!empty($data)) {

            $listecategorie = array();

            foreach ($data as $cat) {
                $listecategorie[] = $cat->idcategorie;
            }

            $ins = '(' . implode(',', $listecategorie) . ')';
            $sql = 'SELECT libellecategorie,idcategorie FROM  categorie  WHERE idcategorie in ' . $ins;
            $query = $db->prepare($sql);
            $query->execute();
            return  $query->FetchAll(PDO::FETCH_OBJ);
        }
    }

    public static function vendeurLierArticle($idarticle)
    {

        global $db;
        $query = "SELECT idvendeur FROM article WHERE idarticle='$idarticle' ";
        $resultat = $db->query($query);
        if ($resultat > 0) {
            return $resultat->fetch();
        } else {
            return 0;
        }
    }

    public static function cartarticle()
    {

        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
            global $db;
            $article_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
            $article = array();

            $array_to_question_marks = implode(',', array_fill(0, count($_SESSION['cart']), '?'));
            $stmt = $db->prepare('SELECT * FROM article WHERE idarticle IN (' . $array_to_question_marks . ')');

            $stmt->execute(array_keys($article_in_cart));
            $article = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $article;
        } else {
            echo 'votre panier est vide';
        }
    }

    public static function DeleteProduct($article_id)
    {
        unset($_SESSION['cart']['article_id']);
    }

    public static function total()
    {
        $total = 0;
        global $db;

        $idarticle = array_keys($_SESSION['cart']);
        if (empty($idarticle)) {
            $article = array();
        } else {
            $article = $db->query('SELECT idarticle,prixarticle FROM article WHERE idarticle IN (' . implode(',', $idarticle) . ')');
        }
        foreach ($article as $prods) {
            $total += $prods['prixarticle'] * $_SESSION['cart'][$prods['idarticle']];
        }

        return $total;
    }


    public static function rechercheAvArticle($articles, $ville, $commune=null, $marche=null)
    {

        global $db;
        $article = $articles;
        $comm = (int)$commune;
        $vil = (int)$ville;
        $march = (int)$marche;

        $sql1 = 'SELECT DISTINCT idvendeur FROM article WHERE idcategorie=:article';
        $query1 = $db->prepare($sql1);
        $query1->execute(array(
            ':article' => $article
        ));
        $idvendeur = $query1->FetchAll(PDO::FETCH_OBJ);


        $listevendeur = array();
        foreach ($idvendeur as $cat) {
            $listevendeur[] = $cat->idvendeur;
        }

        if($march==null && $comm==null){
            
            $ins = '(' . implode(',', $listevendeur) . ')';
            $sql = 'SELECT *  FROM  vendeur  WHERE id in ' . $ins . ' and ville_magasin=:vil ';
            $query = $db->prepare($sql);
            $query->execute(array(
                ':vil' => $vil
            ));
            
            return $query->FetchAll(PDO::FETCH_OBJ);
           
        }
        elseif($march==null){
            
            $ins = '(' . implode(',', $listevendeur) . ')';
            $sql = 'SELECT *  FROM  vendeur  WHERE id in ' . $ins . ' and ville_magasin=:vil and commune_magasin=:comm ';
            $query = $db->prepare($sql);
            $data=$query->execute(array(
                ':vil' => $vil,
                ':comm' => $comm
            ));
            
            return  $query->FetchAll(PDO::FETCH_OBJ);
        }
        else{
            
            $ins = '(' . implode(',', $listevendeur) . ')';
            $sql = 'SELECT *  FROM  vendeur  WHERE id in ' . $ins . ' and ville_magasin=:vil and commune_magasin=:comm and marche_magasin=:march ';
            $query = $db->prepare($sql);
         
            $data1=$query->execute(array(
                ':vil' => $vil,
                ':comm' => $comm,
                ':march'=>$march
            ));
            
            return $query->FetchAll(PDO::FETCH_OBJ);
           
        }
       
    }

    public static function GetArticleville($idarticle)
    {

        global $db;
        if ((int)$idarticle) {
            $stmt = $db->prepare("SELECT * FROM article,vendeur WHERE article.idarticle=:idarticle AND article.idvendeur=vendeur.id ");
            $stmt->execute([':idarticle' => $idarticle]);
            $data = $stmt->Fetch(PDO::FETCH_ASSOC);
            $ville = $data['ville_magasin'];


            return (new vendeur())::Getville((int)$ville);
        } else {
            return 0;
        }
    }
    public static function GetArticleMarche($idarticle)
    {
        global $db;
        if ((int)$idarticle) {
            $stmt = $db->prepare("SELECT * FROM article,vendeur WHERE article.idarticle=:idarticle AND article.idvendeur=vendeur.id ");
            $stmt->execute([':idarticle' => $idarticle]);
            $data = $stmt->Fetch(PDO::FETCH_ASSOC);
            $marche = $data['marche_magasin'];
            return (new vendeur())::Getmarche((int)$marche);
            //$('#idtentifiant').load(location.href+" #identifiant") refresh without load the page
            //$('#idtentifiant')[0].reset() form
        } else {
            return 0;
        }
    }

    public static function infoarticle($idarticle)
    {
        global $db;
        $sql = 'SELECT * FROM article , vendeur WHERE article.idarticle=:idarticle AND vendeur.id=article.idvendeur';
        $query = $db->prepare($sql);
        $query->execute(array(
            ':idarticle' => $idarticle
        ));
        return $query->FetchAll(PDO::FETCH_OBJ);
    }



    public static function rechercheOneArticle($q)
    {
        $sql = "select * FROM categorie ";
        $q = htmlspecialchars($q);
        global $db;
        $allarticles = $db->query($sql);
        if (isset($q) and !empty($q)) {
            $recherche = htmlspecialchars($q);
            $allarticles = $db->query('select * FROM categorie WHERE libellecategorie like "%' . $recherche . '%"');
            $allart = $allarticles->fetch(PDO::FETCH_ASSOC);
            if ($allart['idcategorie']) {
                $idcat = (int) $allart['idcategorie'];
                $sql = "select * FROM article WHERE idcategorie = $idcat ";
                $query = $db->prepare($sql);
                $query->execute();
                $data = $query->FetchAll();
                return $data;
            } else {
                echo '<div class="card text-center">
                <div class="card-header">
                  
                </div>
                <div class="card-body">
                  <h5 class="card-title">Error introuval recherche <strong style="color:red;">' . $q . '</strong></h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">404</a>
                </div>
              </div>';
            }
        }
    }
}
