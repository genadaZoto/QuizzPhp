<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Shadows+Into+Light&display=swap" rel="stylesheet">
    <body>
       <div id="mySidenav" class="sidebar">
            <span class="interquizz">InterQuizz</span>
            <a href="./index.php"><strong><span>Home</span></strong></a>
            <a href="./quizz.php"><strong><span>Quizz</span></strong></a>
            <a href="./login.php"><strong><span>Mon compte</span></strong></a>
            <a href="./formulaire.php"><strong><span>Ajouter question</span></strong></a>   
        </div>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col">
                         
                    </div>
                </div>
            </div> 
        </main>

        <?php
        
         try{
    //        1 Importer la config et creer l'objet connexion
                include"./config/config.php";

                $bdd = new PDO(DBDRIVER.':host='.DBHOST.';port='.DBPORT.
                    ';dbname='.DBNAME.';charset='
                    .DBCHARSET,DBUSER,DBPASS);
            }
            catch(Exeption $e){
                echo $e->getMessage();
//                var_dump($e);
//                  header();
                  die();
            }
            
        session_start();
        $sujet = $_SESSION["sujet"];
        
       $sql2 = "SELECT Id FROM `question`  WHERE IdSujet=:sujet";
       $statement= $bdd->prepare($sql2);
       $statement->bindValue(':sujet', $sujet);

        if($statement->execute()){
            $question =$statement->fetchAll(PDO::FETCH_ASSOC);
        }
        else{
            echo "Probleme!";
            var_dump ($bdd->errorInfo());
            var_dump($statement->errorInfo());
        }  
        
        $score= 0;
        foreach($question as $el) {
            $score += $_POST["Q".$el['Id']];
        }
        
        echo ('<form><h2>Vous avez ').$score.(" reponse exact.</h2></form>");
        
        //insertion des données dans la table quizzUtilisateur
        $idUtilisateur = $_SESSION["idUtilisateur"];
        $time = date("Y-m-d H:i:s");

        
        $sql3 = "INSERT INTO quizzutilisateur(Score, StartTime, IdUtilisateur, IdSujet) VALUES (:score, :time, :idUtilisateur, :sujet)";
        $statement = $bdd->prepare($sql3);
        $statement->bindValue(':score', $score);
        $statement->bindValue(':time', $time);
        $statement->bindValue(':idUtilisateur', $idUtilisateur);
        $statement->bindValue(':sujet', $sujet);
        $statement->execute();
 
        ?>
    </body>
</html>
