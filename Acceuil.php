<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/perso.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>KJ Prod.fr</title>
</head>


<body class="body_acceuil">
    <header class="menu">
        <div class="aa">
        <img class="logo" src="asset/img/logo.jpg" alt="logo">
        <div class="b">
            <button class="r"><a href="connexion.php">Se Connecter </a></button>
            <button class="r"><a href="inscription.php"> S'bonner </a></button>
        </div>

        <div class="m">
            <h1>Courts-métrages, film et séries<h1>
                <h1>uniques dans ton canapé</h1>

                <button class="touche"><a href="inscription.php"> Je M'abonne</a></button>
                <p>A partir de 4,99 € par mois<p>
                    <p>sans engagement, annulable a tout moment </p>
    </div>
</div>

    </header>
    
    <main>

        <section class="block">
            
            <article class="article cm">   
                    <div class="titres">
                    <h1 id="temps" class="pop">Courts-métrages</h1>
                </div>
                
                <div class="affiches marquee " id="box">
                    <div class="marquee__group box" >
                    <span style="--i:1"><a href="page3.php"><img class="cmi" src="asset/img/genoux.jpg" alt="court métrage abandon"></a></span>
                    <span style="--i:2;"><a href="page2.php"><img class="cmi" src="asset/img/Enfant.jpg" alt="court métrage respire"></a></span>
                    <span style="--i:3;"><a href="Page1.php"><img class="cmi" src="asset/img/assis.jpg" alt="Court métrage "></a></span>
                    
             
                </div>
            </div>

            </article>

            <article class="article cm1" id="box">
                <div class="affiches box first">
                    <span style="--i:1"><a href="page4.php"><img class="cmi" src="asset/img/sisters.jpg" alt="Film 7 sisters"></a></span>
                    <span style="--i:2;"><a href="page5.php"><img class="cmi" src="asset/img/matrix.jpg" alt="film matrix"></a></span>
                    <span style="--i:3;"><a href="page6.php"><img class="cmi" src="asset/img/me-before-you.webp" alt="film me befor you"></a></span>
                </div>

                <div class="titres">
                    <h1 id="anne" class="pop">Fimls</h1>
                </div>

            </article>

            <article class="article cm2" id="box">

                <div class="titres">
                    <h1 id="pin" class="pop kil">Séries</h1>
                </div>
                <div class="affiches box last">
                    <span style="--i:1"><a href="page7.php"><img class="cmi" src="asset/img/topboy.jpg" alt="Série top boy"></a></span>
                    <span style="--i:2;"><a href="page8.php"><img class="cmi" src="asset/img/prison.jpg" alt="série prison break"></a></span>
                    <span style="--i:3;"><a href="page9.php"><img class="cmi" src="asset/img/teenwolf.jpg" alt="Série teen wolf"></a></span>
                </div>
            </article>
        </section>

        
        
        <div class="cm3">

            <img class="cmm" src="asset/img/bas.jpg" alt="Film 7 sisters">

            <div class="txt">
            <h1>Où que vous soyez</h1>
            <p>Regardez vos courts-métrages, films et séries
                <p>sur votre smartphone, tablette et ordinateurs</p>
            </div>
        </div>


    <h1 class="questions">Des Questions?</h1>
    <section >
        
        <nav class="questiooon">
        <ul class="menus quoi">
            <li><a href="#">Kj Prod qu’est-ce que c’est ?</a>
                <ul class="sousmenu">
                    <li>Kj Prod est un service de streaming qui propose une vaste sélection de séries, 
                    films et courts-métrages issu du cinéma français.</li>
                </ul>
            </li>
        </ul>

        <ul class="menus quoi">
            <li><a href="#">Quel est le prix de Kj Prod ?</a>
                <ul class="sousmenu">
                    <li>L’abonnement mensuel est à 4,99€. Sans engagement.
                        Soyez malin et profitez de l’entièreté du catalogue en illimité pour 49,99€/an (Soit 2 mois offerts)</li>
                </ul>
            </li>
        </ul>
    
        <ul class="menus">
            <li><a href="#">Comment puis-je annuler mon abonnement ?</a>
                <ul class="sousmenu">
                    <li>Vous pouvez arrêter votre abonnement à tout moment à partir de votre espace client.
                        Si vous avez opté pour l’abonnement annuel, vous pourrez continuer à profiter du catalogue 
                        jusqu’à la fin de la période.</li>
                </ul>
            </li>
        </ul>
    </nav>
    
    </section>



    </main>
    <script src="asset/js/pro.js"></script>
    <?php include ('commun/footer.php'); ?>


