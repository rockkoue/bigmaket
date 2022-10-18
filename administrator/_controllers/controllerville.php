<?php
    #Genéré par GeneratorClassV4.0.0 le 16-11-2021 à 16:40:35

    session_start();
    include "../_class/config.php";
    include "../_constantes/constantes.php";
    include "../_functions/functions.php";

    spl_autoload_register(function($class){
        include "../_class/".$class.".php";
    });

    extract($_GET);

    function add_ville(){

        $requireds=[];

        if(count(required($_POST,$requireds))==0){

            $ville = new ville;

            $ville->nom_ville=$_POST["nom_ville"];


            if($ville->add()){

                echo json_encode(["message"=>"Ajout éffectué avec succès","status"=>"success"]);
            }else{

                echo json_encode(["message"=>"Echec de l'ajout veuillez réessayer","status"=>"error"]);
            }

        }else{
            echo json_encode(["message"=>"Veuillez saisir tous les champs obligatoires","status"=>"error","fields"=>required($_POST,$requireds)]
                            );
        }
    }

    function update_ville(){

        $requireds=[];
        
        if(count(required($_POST,$requireds))==0){

            $ville = ville::find($_POST["id"]);

            $ville->nom_ville=$_POST["nom_ville"];


            if($ville->update()){

                echo json_encode(["message"=>"Mofdification éffectué avec succès","status"=>"success"]);
            }else{

                echo json_encode(["message"=>"Echec de la mofdification veuillez réessayer","status"=>"error"]);
            }

        }else{
            echo json_encode(["message"=>"Veuillez saisir tous les champs obligatoires","status"=>"error","fields"=>required($_POST,$requireds)]
                            );
        }
        
    }

    function delete_ville(){

        $id = $_GET["id"];

        if(!isset($id))
            routes::index();

        if(ville::delete($id)){

            echo json_encode(["message"=>"Suppresion éffectué avec succès","status"=>"success"]);
        }else{

            echo json_encode(["message"=>"Echec de la suppression","status"=>"error"]);
        }
    
    }

    if (function_exists($function)) {
    
        $function();

    }else{
    
        routes::index();
    }

    