<?php
include_once("commun/inc7.php");

// Vérification des jetons

$email = isset($_POST["email"]) ? $_POST["email"] : "";
$nom = isset($_POST["nom"]) ? $_POST["nom"] : "";
$prenom = isset($_POST["prenom"]) ? $_POST["prenom"] : "";
$message = isset($_POST["message"]) ? $_POST["message"] : "";



$erreurs = [];


// Vérification de l'email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erreurs["email"] = "L'email n'est pas valide";
}

// Vérification du nom
if (!preg_match("/^[A-Za-z0-9\x{00c0}-\x{00ff}]{1,20}$/u", $nom)) {
    $erreurs["nom"] = "Le format du nom est invalide";
}
// Vérification du prenom
if (!preg_match("/^[A-Za-z0-9\x{00c0}-\x{00ff}]{1,20}$/u", $prenom)) {
    $erreurs["prenom"] = "Le format du prenom est invalide";
}


// Protection XSS
$email = htmlspecialchars($email);
$nom = htmlspecialchars($nom);
$prenom = htmlspecialchars($prenom);
$message = htmlspecialchars($message);

if (count($erreurs) > 0) {
    $_SESSION["donnees"]["email"] = $email;
    $_SESSION["donnees"]["nom"] = $nom;
    $_SESSION["donnees"]["prenom"] = $prenom;
    $_SESSION["donnees"]["message"] = $message;
    $_SESSION["erreurs"] = $erreurs;
    echo "Désolé, les champs ne sont pas corrects";
    echo "<a href='contactez.php'>Vers la page de message</a>";
    exit(); // Ajouté pour arrêter l'exécution en cas d'erreurs
}

// Parcourir le tableau et valider les entrées
$tableauDonnes = [];
foreach ($_POST as $key => $val) {
    $tableauDonnes[":" . $key] = isset($val) && !empty($val) ? htmlspecialchars($val) : null;
}

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_password);
    // Options de PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // // Préparation de la requête pour vérifier si l'email existe dans la base
    // $sql = "SELECT COUNT(*) as nb FROM utilisateur WHERE email=?";
    // $qry = $pdo->prepare($sql);
    // $qry->execute([$tableauDonnes[":email"]]);
    // $row = $qry->fetch();

    // // Vérification si l'email existe
    // if ($row["nb"] > 0) { // Changé de === 1 à > 0 pour être plus générique
    //     echo "L'email existe déjà dans la base de données";
    //     echo "<a href='inscription.php'>Vers la page d'inscription</a>";
    // } 
    // else {
        $sql = "INSERT INTO contacter(email, nom, prenom, message) VALUES (:email, :nom, :prenom, :message)";
        $qry = $pdo->prepare($sql);
        $qry->execute($tableauDonnes);
        unset($pdo);
        header("location:acceuil.php");
    // }

} catch (PDOException $err) {
    // Gestion des erreurs
    $_SESSION["compte-erreur-sql"] = $err->getMessage();
    header("location:pageerreur.php");
    exit();
}
?>