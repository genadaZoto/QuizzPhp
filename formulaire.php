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
                        <form action="./formulaireTraitement.php" method="POST">
                            <label for="sujet">Selectionner un sujet :</label>
                                <select name="Sujet">
                                    <option value="2">PHP</option>
                                    <option  value="1">Javascript</option>
                                    <option  value="3">HTML</option>
                                </select><br>
                                <label>Poser votre question</label><textarea type="text" name="TextQuestion"></textarea>
                            <p>Cochez seulement la bonne réponse:</p>
                            <p><label>Entrez la première reponse </label><input name="reponse1" type="text" ><input type="radio"  name="inputAnswer" value="1"></p>
                            <p><label>Entrez la deuxième reponse</label><input  name="reponse2" type="text" ><input type="radio"  name="inputAnswer" value="2"></p>
                            <p><label>Entrez la troisième reponse</label><input name="reponse3"  type="text" ><input type="radio"  name="inputAnswer" value="3"></p>
                            <button type="submit">Submit</button>
​                        </form>
                    </div>
                </div>
            </div> 
        </main>
    </body>
</html>

