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
                        <form class="enregistrement" action="./utilisateurTraitement.php" method="POST">
                            <label><h3>Enregistrez vous</h3></label><br>
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