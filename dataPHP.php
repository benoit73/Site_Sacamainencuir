<?php
// Établir une connexion à la base de données
$servername = "localhost"; // Nom du serveur MySQL
$username = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe MySQL
$dbname = "sacjen"; // Nom de la base de données

// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérifier la connexion
if (!$conn) {
  die("Connexion échouée : " . mysqli_connect_error());
}
else {
	echo ("");
}
// Exécuter une requête SQL
$sql = "SELECT * FROM sac";
$result = mysqli_query($conn, $sql);

// Vérifier si la requête a été exécutée avec succès
if (!$result) {
  die("Erreur dans la requête : " . mysqli_error($conn));
}



$count = 0;
while ($row = mysqli_fetch_assoc($result)) {
	if ($count % 2 == 0)
	{
		echo '<div class="row">';
		echo '<div class="col">';
		echo '<div class="article">';
		echo '<a href="' . $row['URL'] . '"><h2>' . $row['Nom'] . '</h2></a>';
		echo '<p>Prix : ' . $row['Prix'] . '</p>';
		echo '<p>Temps : ' . $row['Temps'] . '</p>';
		echo '<img src="' . $row['Image'] . '" alt="' . $row['Nom'] . '">';
		echo '<a href="' . $row['URL'] . '">Voir sur le site</a>';
		echo '</div>';
		echo '</div>';
	}
	else {
		
		echo '<div class="col">';
		echo '<div class="article">';
		echo '<a href="' . $row['URL'] . '"><h2>' . $row['Nom'] . '</h2></a>';
		echo '<p>Prix : ' . $row['Prix'] . '</p>';
		echo '<p>Temps : ' . $row['Temps'] . '</p>';
		echo '<img src="' . $row['Image'] . '" alt="' . $row['Nom'] . '">';
		echo '<a href="' . $row['URL'] . '">Voir sur le site</a>';
		echo '</div>';
		echo '</div>';
		echo '</div>'; // Fermeture de la div "row"
	}
	$count++;
}











// Fermer la connexion à la base de données
mysqli_close($conn);
?>
