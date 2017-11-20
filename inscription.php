<?php
session_start();

// creation d'une variable dont le nom doit correspondre à celui de la requête (nom bbd, nom utilisateur, mdp)
    $connecteur = new PDO('mysql:host=localhost;dbname=salledesport', 'isa', 'alonbon');
// on crée une requete attribuée au connecteur
    // $connecteur->query('SELECT * FROM adherent;')->fetchALL(PDO::FETCH_ASSOC);

// on utilise les informations récupérées par cette requête et on les attribue à une variable de notre choix
    // $adherent=$connecteur->query('SELECT * FROM adherent;')->fetchALL(PDO::FETCH_ASSOC);
    
    // pour afficher les données dans un tableau surle html
    // var_dump($adherent);



// Formulaire d'inscription

// Définition des variables
$forname = $_POST['prenom'];
$name = $_POST['nom'];
$email = $_POST['email'];
$numero = rand(1000, 100000);



// Hachage du mot de passe
$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

// Insertion
$req = $connecteur->prepare('INSERT INTO adherent(prenom, nom, email, numero, dateInscription, motDePasse) VALUES(:prenom, :nom, :email, :numero, NOW(), :pass)');
    
// Exécution de la requête
$req->execute(array(
    'prenom' => $forname,
    'nom' => $name,
    'email' => $email,
    'numero' => $numero,
    'pass' => $pass_hache));

    $_SESSION['prenom'] = $forname;
    $_SESSION['nom'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['numero'] = $numero;
    // echo 'vous êtes connecté';
    // ouverture de la page connexionMembre
    header('Location: ConnexionMembre.php');
    
    // print_r($req->errorInfo());
    // print_r — Affiche des informations lisibles pour une variable
?>

<!-- Pour avoir un numéro d'adhérent unique, utiliser l'id et le transformer en string (ex: si id = 17, numéro adhérent = 00000017) -->