<?php

// import de la classe Impot
include 'model/Impot.php';

// on convertit l'objet JSON obtenu dans $_POST (inutilisable sinon)
// à commenter si on utilise la V2
$_POST = json_decode(file_get_contents('php://input'), true);

// création d'un objet impôt avec les valeurs des inputs dans $_POST
$impot = new Impot($_POST['name'], $_POST['income']);

// calcul de l'impôt et stockage du message
$msgMontant = $impot->afficheImpot();

// puis affichage du message
echo $msgMontant;

