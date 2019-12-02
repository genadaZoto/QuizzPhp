<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

      try{
            include "./config/config.php";

            $bdd = new PDO(DBDRIVER.':host='.DBHOST.';port='.DBPORT.
                ';dbname='.DBNAME.';charset='
                 .DBCHARSET,DBUSER,DBPASS);
        }
        catch(Exeption $e){
                echo $e->getMessage();
//                var_dump($e);
//                  header();
//                  die();
        }
        // pour le enregistrement
        session_start();
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $sql="INSERT INTO utilisateur (nom, prenom, email, password) VALUES(:nom, :prenom, :email, :password)";
        $statement= $bdd->prepare($sql);
        $statement->bindValue(':nom', $nom);
        $statement->bindValue(':prenom', $prenom);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        
        
        if($statement->execute()){
            echo"Votre inscription c'est effectue correctement! Choisissez votre quizz."; 
            header("location:./quizz.php");  
        }
        else{
            echo"Il y a eu un probleme!";  
        }
        
        $last_id = $bdd->lastInsertId();
        $_SESSION["idUtilistaeur"]=$last_id;
            
        
        
          

      
        
  
        
        ?>