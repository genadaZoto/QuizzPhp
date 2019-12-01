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
        var_dump($sujet);
        
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
            $score +=$_POST["Q".$el['Id']];
        }
         echo $score;
        
        ?>
    </body>
</html>
