<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <link rel="stylesheet" href="./style.css">
    <body>
        <header class="header">InterQuizz</header>
        <nav id="navbar" class="navbar">
        <div class="container">
          <div class="row">
            <div class="col">
                <ul class="list-inline">
                <li>
                    <a href="./index<.php"><strong><span>Home</span></strong></a>
                </li>
                <li>
                    <a href="./quizz.php"><strong><span>Quizz</span></strong></a>
                </li>
                 <li>
                     <a href="./login.php"><strong><span>Mon compte</span></strong></a>
                </li>
                 <li>
                     <a href="./formulaire.php"><strong><span>Ajouter question</span></strong></a>
                </li>
              </ul>
          </div>
        </div>
       </div>     
      </nav>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col">
        <?php

         try{
                include"./config/config.php";

                $bdd = new PDO(DBDRIVER.':host='.DBHOST.';port='.DBPORT.
                    ';dbname='.DBNAME.';charset='
                    .DBCHARSET,DBUSER,DBPASS);
        }
        catch(Exeption $e){
                echo $e->getMessage();
        }
        
        // pour le log in
        $email2 = $_POST['email2'];
        $nom2 = $_POST['nom2'];
        $password2 = $_POST['password2'];
        
        
       $sql= "SELECT * FROM utilisateur WHERE Email= :email2 AND Password= :password2";
        $statement= $bdd->prepare($sql);
        $statement->bindValue(':email2', $email2);
        $statement->bindValue(':password2', $password2);
        
        if($statement->execute()){
            echo " Bonjour " . $nom2."! ";
            
        }
        else{
            echo "Vous devez vous s'inscrire!";
            var_dump ($bdd->errorInfo());
            var_dump($statement->errorInfo());
        }    

        ?>
                        
                    </div>
                </div>
            </div> 
        </main>
    </body>
</html>
