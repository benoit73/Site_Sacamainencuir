<?php
// �tablir une connexion � la base de donn�es
$servername = "localhost"; // Nom du serveur MySQL
$username = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe MySQL
$dbname = "sacjen"; // Nom de la base de donn�es

// Connexion � la base de donn�es
$conn = mysqli_connect($servername, $username, $password, $dbname);

// V�rifier la connexion
if (!$conn) {
  die("Connexion �chou�e : " . mysqli_connect_error());
}
else {
	echo ("");
}
// Ex�cuter une requ�te SQL
$sql = "SELECT * FROM sac";
$result = mysqli_query($conn, $sql);

// V�rifier si la requ�te a �t� ex�cut�e avec succ�s
if (!$result) {
  die("Erreur dans la requ�te : " . mysqli_error($conn));
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











// Fermer la connexion � la base de donn�es
mysqli_close($conn);
?>
