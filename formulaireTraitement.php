
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
        var_dump($sujet);
        $question = $_POST['TextQuestion'];
        var_dump($question);
        $reponse1 = $_POST['reponse1'];
        $reponse2 = $_POST['reponse2'];
        $reponse3 = $_POST['reponse3'];
        var_dump($reponse1, $reponse2,$reponse3);
        $reponseVrai = $_POST['inputAnswer'];
        var_dump($reponseVrai);
        
        
        $sql = "INSERT INTO Question (IdSujet, TextQuestion) VALUES  (:Sujet, :TextQuestion)";

        $statement = $bdd->prepare($sql);
        $statement->bindValue(":Sujet", $sujet);
        $statement->bindValue(":TextQuestion", $question);
        
        
        if($statement->execute()){
            echo"Insertion correcte";
            $last_id = $bdd->lastInsertId();
            var_dump($last_id);
        }
        else{
            echo "Probleme!";
            var_dump ($bdd->errorInfo());
            var_dump($statement->errorInfo());
        }    
//       
        
       //inserer les reponses
        $vrai1 = $reponseVrai == "1"? "Vrai": "Faux";
        $vrai2 = $reponseVrai == "2"? "Vrai": "Faux";
        $vrai3 = $reponseVrai == "3"? "Vrai": "Faux";
        var_dump($vrai1, $vrai2, $vrai3);
        
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
            echo"Insertion correcte";
        }
        else{
            echo "Probleme!";
            var_dump ($bdd->errorInfo());
            var_dump($statement->errorInfo());
        }    
        
   
        ?>
    </body>
</html>




