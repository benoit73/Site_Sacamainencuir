<?php
// �tablir une connexion � la base de donn�es
$servername = "localhost:3308"; // Nom du serveur MySQL
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
?>