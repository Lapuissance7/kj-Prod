
<?php include ('commun/header.php'); ?>
<body class="onepage">

    
    <main class="toto">


        <div class="login">
            <form class="yoyo" action="traitementconnexion.php" method="post">
                <h1 class="h">Connexion</h1>
                
                <label for="email" class="rtt">Adresse e-mail</label>
                <input class="rt" type="email" name="email" pattern="[/^[A-Za-z0-9\x{00c0}-\x{00ff}]{1,20}$/u]">

                
                <label for="password" class="rtt"> Mot de passe</label>
                <input class="rt" type="password" name="password" pattern="[A-Za-z0-9$]{8,}">
                
                <input class="tt" type="submit" value="connexion">
                <!-- <button class="tt"><a href="pageprofil.php"> Connexion </a></button> -->

                <p class="obl"><a href="inscription.php"> Vous n'avez pas de compte?</a></p>
                <p class="obl"><a href="reinitialiser.php">Reinitialiser le mot de passe</a></p>
                <p class="obl"><a href="acceuil.php">Retour vers la page d'Acceuil</a></p>
            </form>
        </div>

    </main>
    <?php include ('commun/footer.php'); ?>