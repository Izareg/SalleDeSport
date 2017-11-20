<?php
// creation d'une variable dont le nom doit correspondre à celui de la requête (nom bbd, nom utilisateur, mdp)
	$salledesport = new PDO('mysql:host=localhost;dbname=salledesport', 'salledesport', 'alonbon');
// on crée une requete attribuée au connecteur
	// $connecteur->query('SELECT * FROM adherent;')->fetchALL(PDO::FETCH_ASSOC);

// on utilise les informations récupérées par cette requête et on les attribue à une variable de notre choix
	$adherent=$salledesport->query('SELECT * FROM adherent;')->fetchALL(PDO::FETCH_ASSOC);
	// pour afficher les données dans un tableau surle html
	// var_dump($adherent);
?>


<!-- La page qui reçoit les données du formulaire de connexion doit hacher de nouveau le mot de passe et le comparer à celui stocké dans la base. S'il existe un membre qui a le même pseudonyme et le même mot de passe haché, alors on autorise la connexion et on peut créer les variables de session. Sinon, on renvoie une erreur indiquant que le pseudonyme ou le mot de passe est invalide. -->
<?php 

// Hachage du mot de passe
$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
var_dump($pass_hache);

$email = $_POST['email'];

// Vérification des identifiants
$req = $salledesport->prepare('SELECT motDePasse FROM adherent WHERE email = :email');

// Exécute la requête
// Attention : le nombre de paramètres doit être égal au nombre de paramètres passés dans la requête
$req->execute(array(
    'email' => $email));

$resultat = $req->fetch();

var_dump($resultat);

if (password_verify($_POST['pass'], $resultat['motDePasse'])){
    // echo 'Vous êtes connecté !';
    session_start();
    $_SESSION['email'] = $email;
    header('Location: ConnexionMembre.php');
} else {
    // echo 'Le mot de passe est invalide.';
    // On détruit la session
    unset($_SESSION['email']);
}

?>
