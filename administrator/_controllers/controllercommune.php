<?php
    #Genéré par GeneratorClassV4.0.0 le 16-11-2021 à 16:40:31

    session_start();
    include "../_class/config.php";
    include "../_constantes/constantes.php";
    include "../_functions/functions.php";

    spl_autoload_register(function($class){
        include "../_class/".$class.".php";
    });

    extract($_GET);

    function add_commune(){

        $requireds=[];

        if(count(required($_POST,$requireds))==0){

            $commune = new commune;

            $commune->nom_commune=$_POST["nom_commune"];
            $commune->ville=$_POST["ville"];


            if($commune->add()){

                echo json_encode(["message"=>"Ajout éffectué avec succès","status"=>"success"]);
            }else{

                echo json_encode(["message"=>"Echec de l'ajout veuillez réessayer","status"=>"error"]);
            }

        }else{
            echo json_encode(["message"=>"Veuillez saisir tous les champs obligatoires","status"=>"error","fields"=>required($_POST,$requireds)]
                            );
        }
    }

    function update_commune(){

        $requireds=[];
        
        if(count(required($_POST,$requireds))==0){

            $commune = commune::find($_POST["id"]);

            $commune->nom_commune=$_POST["nom_commune"];
            $commune->ville=$_POST["ville"];


            if($commune->update()){

                echo json_encode(["message"=>"Mofdification éffectué avec succès","status"=>"success"]);
            }else{

                echo json_encode(["message"=>"Echec de la mofdification veuillez réessayer","status"=>"error"]);
            }

        }else{
            echo json_encode(["message"=>"Veuillez saisir tous les champs obligatoires","status"=>"error","fields"=>required($_POST,$requireds)]
                            );
        }
        
    }

    function delete_commune(){

        $id = $_GET["id"];

        if(!isset($id))
            routes::index();

        if(commune::delete($id)){

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

    