<?php
    #Genéré par GeneratorClassV4.0.0 le 15-11-2021 à 10:52:59

    session_start();
    include "../_class/config.php";
    include "../_constantes/constantes.php";
    include "../_functions/functions.php";

    spl_autoload_register(function($class){
        include "../_class/".$class.".php";
    });

    extract($_GET);

    function add_administrateur(){

        $requireds=[];

        if(count(required($_POST,$requireds))==0){

            $administrateur = new administrateur;

            $administrateur->ld=$_POST["ld"];
            $administrateur->nom=$_POST["nom"];
            $administrateur->prenom=$_POST["prenom"];
            $administrateur->avatar=$_POST["avatar"];
            $administrateur->login=$_POST["login"];
            $administrateur->code_compte=$_POST["code_compte"];
            $administrateur->admin_ajout=$_POST["admin_ajout"];
            $administrateur->date_ajout=$_POST["date_ajout"];
            $administrateur->access=$_POST["access"];


            if($administrateur->add()){

                echo json_encode(["message"=>"Ajout éffectué avec succès","status"=>"success"]);
            }else{

                echo json_encode(["message"=>"Echec de l'ajout veuillez réessayer","status"=>"error"]);
            }

        }else{
            echo json_encode(["message"=>"Veuillez saisir tous les champs obligatoires","status"=>"error","fields"=>required($_POST,$requireds)]
                            );
        }
    }

    function update_administrateur(){

        $requireds=[];
        
        if(count(required($_POST,$requireds))==0){

            $administrateur = administrateur::find($_POST["id"]);

            $administrateur->ld=$_POST["ld"];
            $administrateur->nom=$_POST["nom"];
            $administrateur->prenom=$_POST["prenom"];
            $administrateur->avatar=$_POST["avatar"];
            $administrateur->login=$_POST["login"];
            $administrateur->code_compte=$_POST["code_compte"];
            $administrateur->admin_ajout=$_POST["admin_ajout"];
            $administrateur->date_ajout=$_POST["date_ajout"];
            $administrateur->access=$_POST["access"];


            if($administrateur->update()){

                echo json_encode(["message"=>"Mofdification éffectué avec succès","status"=>"success"]);
            }else{

                echo json_encode(["message"=>"Echec de la mofdification veuillez réessayer","status"=>"error"]);
            }

        }else{
            echo json_encode(["message"=>"Veuillez saisir tous les champs obligatoires","status"=>"error","fields"=>required($_POST,$requireds)]
                            );
        }
        
    }

    function delete_administrateur(){

        $id = $_GET["id"];

        if(!isset($id))
            routes::index();

        if(administrateur::delete($id)){

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

    