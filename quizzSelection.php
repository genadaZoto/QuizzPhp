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
        
        $choix = 1; // $_POST['choix'];
    
   
        // deuxieme requete
       $sql2 = "SELECT TextQuestion,question.ID, IdSujet FROM `question` INNER JOIN sujet ON Idsujet=sujet.id WHERE IdSujet=:choix";
       $statement= $bdd->prepare($sql2);
       $statement->bindValue(':choix', $choix);

        if($statement->execute()){
            $question =$statement->fetchAll(PDO::FETCH_ASSOC);
        }
        else{
            echo "Probleme!";
            var_dump ($bdd->errorInfo());
            var_dump($statement->errorInfo());
        }    
      
      session_start();
      $_SESSION["sujet"] = $question[0]['IdSujet'];
       
   
       foreach($question as $el) {
           print("<form action='./quizzTraitement2.php' method='POST'>");
           print("<label name=Sujet".$el['IdSujet'].">".$el['TextQuestion']."</label><br>");
           $sql3 ="SELECT TextReponse,IdQuestion, Vrai FROM `reponse` WHERE IdQuestion=:question_id";
           $statement3= $bdd->prepare($sql3);
           $statement3->bindValue(':question_id', $el['ID']);

           if($statement3->execute()){
               $reponse=$statement3->fetchAll(PDO::FETCH_ASSOC);
               
              foreach($reponse as $rep) {
                  $value = $rep['Vrai']=="Vrai"? 1:0;
                  print("<input type='radio'  name=Q".$rep['IdQuestion']." value=".$value."><label>".$rep['TextReponse']."</label><br>");
            
              }
              
           }
           
       }
       print("<button type='submit'>Submit</button>");
       print("</form>");
       
       

       
        ?>

    </body>
</html>