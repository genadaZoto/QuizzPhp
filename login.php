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
                        <form action="./utilisateurTraitement2.php" method="POST">
                            <label><h1>Connectez&nbsp;vous</h1></label><br>
                            <label>Nom </label><input type="text" name="nom2"><br>
                            <label>Email </label><input type="email" name="email2"><br>
                            <label>Password </label><input type="password" name="password2"><br>
                            <label><button type="submit2" >Submit</button></label>
                        </form> 
                    </div>
                </div>
            </div> 
        </main>
    </body>
</html>