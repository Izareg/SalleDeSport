<pre><?php
// creation d'une variable que l'on nomme connecteur
	$connecteur = new PDO('mysql:host=localhost;dbname=salledesport', 'salledesport', 'alonbon');
// on crée une requete attribuée au connecteur

	// $connecteur->query('SELECT * FROM adherent;')->fetchALL(PDO::FETCH_ASSOC);

// on utilise les informations récupérées par cette requête et on les attribue à une variable de notre choix
	$adherent=$connecteur->query('SELECT * FROM adherent;')->fetchALL(PDO::FETCH_ASSOC);
	var_dump($adherent);
?></pre>