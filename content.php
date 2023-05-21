<?php
require 'connection.php';

$count = 0;
while ($row = mysqli_fetch_assoc($result)) {
	if ($count % 2 == 0) {
		echo '<div class="row">';
	}
	
	echo '<div class="col">';
	echo '<div class="article">';
	echo '<a href="' . $row['URL'] . '"><h2>' . $row['Nom'] . '</h2></a>';
	echo '<p>Prix : ' . $row['Prix'] . ' €</p>';
	echo '<p>Temps : ' . $row['Temps'] . '</p>';
	echo '<div class="cadreimg"><img src="' . $row['Image'] . '" class="imageSac"></div>';
	echo '<a href="' . $row['URL'] . '">Voir sur le site</a>';
	echo '</div>';
	echo '</div>';
	
	if ($count % 2 != 0 || $count == mysqli_num_rows($result) - 1) {
		echo '</div>'; // Fermeture de la div "row" si le nombre total d'éléments est impair ou si c'est le dernier élément
	}
	
	$count++;
}








// Fermer la connexion � la base de donn�es
mysqli_close($conn);
?>
