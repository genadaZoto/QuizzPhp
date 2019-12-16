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
                    <a href="./index.php"><strong><span>Home</span></strong></a>
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
                  die();
            }
        
       
        $sujet = $_POST['Sujet'];
        $question = $_POST['TextQuestion'];
        $reponse1 = $_POST['reponse1'];
        $reponse2 = $_POST['reponse2'];
        $reponse3 = $_POST['reponse3'];
        $reponseVrai = $_POST['inputAnswer'];

        
        
        $sql = "INSERT INTO Question (IdSujet, TextQuestion) VALUES  (:Sujet, :TextQuestion)";

        $statement = $bdd->prepare($sql);
        $statement->bindValue(":Sujet", $sujet);
        $statement->bindValue(":TextQuestion", $question);
        
        
        if($statement->execute()){
            echo"<h3>Merci d'avoir ajouter une nouvelle question.</h3>";
            $last_id = $bdd->lastInsertId();
        }
        else{
            echo "Probleme!";
        }    
//       
        
       //inserer les reponses
        $vrai1 = $reponseVrai == "1"? "Vrai": "Faux";
        $vrai2 = $reponseVrai == "2"? "Vrai": "Faux";
        $vrai3 = $reponseVrai == "3"? "Vrai": "Faux";
        
        $sql2 = "INSERT INTO Reponse (IdQuestion, TextReponse, Vrai) VALUES  (:IdQuestion,:reponse1, :vrai1), (:IdQuestion,:reponse2,:vrai2), (:IdQuestion,:reponse3,:vrai3)";

        $statement2 = $bdd->prepare($sql2);
        $statement2->bindValue(":IdQuestion", $last_id);
        $statement2->bindValue(":reponse1", $reponse1);
        $statement2->bindValue(":reponse2", $reponse2);
        $statement2->bindValue(":reponse3", $reponse3);
        $statement2->bindValue(":vrai1", $vrai1);
        $statement2->bindValue(":vrai2", $vrai2);
        $statement2->bindValue(":vrai3", $vrai3);
        
        if($statement2->execute()){
            
        }
        else{
            echo "Probleme!";
        }    
        
   
        ?>
                    </div>
                </div>
            </div> 
        </main>
    </body>
</html>




