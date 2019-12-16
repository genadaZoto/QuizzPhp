<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <link rel="stylesheet" href="./style.css">
    <body>
        
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="./index.php"><strong><span>Home</span></strong></a>
            <a href="./quizz.php"><strong><span>Quizz</span></strong></a>
            <a href="./login.php"><strong><span>Mon compte</span></strong></a>
            <a href="./formulaire.php"><strong><span>Ajouter question</span></strong></a>   
      </div>
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
      <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
    </script>
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