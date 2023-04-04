<?php

// import de la classe Impot
include 'model/Impot.php';

// création d'un objet impôt avec les valeurs des inputs dans $_POST
$impot = new Impot($_POST['name'], $_POST['income']);

// calcul de l'impôt
$msgMontant = $impot->afficheImpot();

// puis affichage du message
echo $msgMontant;

