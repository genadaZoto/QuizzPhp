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
                        <form action="./quizzSelection.php" method="POST">
                            <label><h1>Choisissez&nbsp;le&nbsp;quizz:</h1></label>
                            <select name="choix">
                                <label><option value="1">Js</option></label>
                                <label><option value="2">PHP</option></label>
                            </select><br>
                            <button>Submit</button>
                        </form>
                    </div>
                </div>
            </div> 
        </main>
    </body>
</html>