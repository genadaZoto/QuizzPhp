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
                        <form action="./formulaireTraitement.php" method="POST">
                            <label><h1>Ajouter&nbsp;une&nbsp;question</h1></label><br>
                            <label for="sujet">Selectionner un sujet :</label>
                                <select name="Sujet">
                                    <option value="2">PHP</option>
                                    <option value="1">Javascript</option>
                                </select><br>
                                <label>Entrez votre question</label><textarea type="text" name="TextQuestion"></textarea>
                                <p>Cochez seulement la bonne réponse:</p>
                            <p><label>Entrez la première reponse</label><br><input type="radio"  name="inputAnswer" value="1"><input name="reponse1" type="text"></p>
                            <p><label>Entrez la deuxième reponse</label><br><input type="radio"  name="inputAnswer" value="2"><input  name="reponse2" type="text"></p>
                            <p><label>Entrez la troisième reponse</label><br><input type="radio"  name="inputAnswer" value="3"><input name="reponse3"  type="text"></p>
                            <button type="submit">Submit</button>
​                        </form>
                    </div>
                </div>
            </div> 
        </main>
    </body>
</html>

