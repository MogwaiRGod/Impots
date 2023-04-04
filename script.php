<?php

// import de la classe Impot
include 'model/Impot.php';

// on convertit l'objet JSON obtenu dans $_POST (inutilisable sinon)
// à commenter si on utilise la V2
$_POST = json_decode(
    /* file_get_contents : lit le fichier en tant que chaîne 
    php://input : fichier temporaire contenant le corps de la requête POST ; ce fichier est créé automatiquement à l'envoi d'une requête POST
    et contient les données brutes de la requête avant qu'elles ne soient envoyées dans $_POST ou $_REQUEST */
    file_get_contents('php://input'),
    /* booléen : pour retourner un tableau associatif ou non */
    true
);

// création d'un objet impôt avec les valeurs des inputs dans $_POST
$impot = new Impot($_POST['name'], $_POST['income']);

// calcul de l'impôt et stockage du message
$msgMontant = $impot->afficheImpot();

// puis affichage du message
echo $msgMontant;
