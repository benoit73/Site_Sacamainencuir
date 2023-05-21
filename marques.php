<?php
require 'connection.php';


$compteur = 1;
$marques = "SELECT * FROM marques";
$result2 = mysqli_query($conn, $marques);
while ($row = mysqli_fetch_assoc($result2)) {
    echo '<input type="checkbox" id="checkbox' . $compteur . '">';
    echo ' <label for="checkbox' . $compteur . '">' . $row['Marque'] . '</label>';
    $compteur++;
}











?>