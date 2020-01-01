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
                        <form class="enregistrement" action="./utilisateurTraitement.php" method="POST">
                            <label><h1>Enregistrez&nbsp;vous</h1></label><br>
                            <label>Nom <input type="text" name="nom"></label><br>
                            <label>Prenom<input type="text" name="prenom"> </label><br>
                            <label>Email<input type="email" name="email"></label><br>
                            <label>Password <input type="password" name="password"> </label><br>
                            <label><button type="submit" >Submit</button></label>
                        </form>
                    </div>
                </div>
            </div> 
        </main>
    </body>
</html>