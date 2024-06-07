
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/perso.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>inscription.fr</title>
</head>

    
    
    
    
    <header class="corpinscription">
        <div class="suite">
        <img class="logo" src="asset/img/logo.jpg" alt="logo">
        </div>
        <div class="b">
            <button class="r"><a href="acceuil.php"> Acceuil </a></button>
        </div>
        


    </header>
<body class="onepage">

    <main class="toto">


        <div class="login">
            <form class="yoyo" action="traitement_contacter.php" method="post">
                <h1 class="h">Contactez-nous</h1>
                <label class="rtt">Adresse e-mail</label>
                <input class="rt" type="email" name="email" id="" pattern="[/^[A-Za-z0-9\x{00c0}-\x{00ff}]{1,20}$/u]">
                
                <label class="rtt">Nom</label>
                <input class="rt" type="text" name="nom" id="" pattern="[/^[A-Za-z0-9\x{00c0}-\x{00ff}]{1,20}$/u]">
                
                <label class="rtt">Prenom</label>
                <input class="rt" type="text" name="prenom" id="" pattern="[/^[A-Za-z0-9\x{00c0}-\x{00ff}]{1,20}$/u]">
                
                <label class="rtt">Votre message</label>
                <input class="rt" type="text" name="message" id="">
                
                <input class="tt" type="submit" value="envoyer">
              
            </form>
        </div>

    </main>
    <?php include ('commun/footer.php'); ?>