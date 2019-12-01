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
                        <form action="./quizzSelection.php" method="POST">
                            <label>Choisissez le quizz:</label>
                            <select name="choix">
                                <label><option value="1">Js</option></label>
                                <label><option value="2">PHP</option></label>
                                <label><option value="html">HTML</option></label>
                            </select>
                            <button>Submit</button>
                        </form>
                    </div>
                </div>
            </div> 
        </main>
    </body>
</html>