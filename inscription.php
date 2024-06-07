
<?php include ('commun/header.php'); ?>
<body class="onepage">


    <main class="toto">

    
        <div class="login">
            <form class="yoyo" action="traitement_ins.php" method="post">
                <h1 class="h">Inscription</h1>
                <label class="rtt">Nom</label>
                <input class="rt" type="text" name="nom" id="" pattern="[/^[A-Za-z0-9\x{00c0}-\x{00ff}]{1,20}$/u]">

                <label class="rtt">Prenom</label>
                <input class="rt" type="text" name="prenom" id="" pattern="[/^[A-Za-z0-9\x{00c0}-\x{00ff}]{1,20}$/u]">

                <label class="rtt">Adresse e-mail</label>
                <input class="rt" type="email"  name="email" id="" pattern="[/^[A-Za-z0-9\x{00c0}-\x{00ff}]{1,20}$/u]">

                <label class="rtt"> Mot de passe</label>
                <input class="rt" type="password" name="password"id=""pattern="[A-Za-z0-9$]{8,}">

                <!-- <label class="rtt">Confirmer le mot de passe</label>
                <input class="rt" type="text" name="confirmer_password"> -->
                <!-- <input class="tt"><a href="pageprofil.php">S'inscrire</a> </button> -->
                <input class="tt" type="submit" value="envoyer">
                <p class="obl"><a href="connexion.php"> Vous avez déja compte?</a></p>
            </form>
        </div>

    </main>
    <?php include ('commun/footer.php'); ?>