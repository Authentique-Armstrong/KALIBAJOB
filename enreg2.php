<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="loupe.png">
    <title>Authentification</title>
</head>
<body>
    
    
</body>
</html>



<?php
    
    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);


    $host = 'localhost';
    $dbname = 'alphatech';
    $user = 'root';
    $pwd = '';
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        echo "";
    } catch(PDOException $e){
        echo "La connexion a échouée" . $e->getMessage();
    }

        if(isset($_POST['envoyer'])) {
            $nom = !empty($_POST['nom'])? $_POST['nom'] : NULL;
            $nom_entrep = !empty($_POST['nom_entrep'])? $_POST['nom_entrep'] : NULL;
            $secteur = !empty($_POST['secteur'])? $_POST['secteur'] : NULL;
            $localisation = !empty($_POST['localisation'])? $_POST['localisation'] : NULL;
            $lien = !empty($_POST['lien'])? $_POST['lien'] : NULL;
    
        $insert2 = $conn->prepare("INSERT INTO employeurs (nom,nom_entrep,secteur,localisation,lien) VALUES (:nom, :nom_entrep, :secteur, :localisation, :lien)") or die (print_r($conn->errorInfo()));
        
        $insert2->bindParam(':nom',$nom);
        $insert2->bindParam(':nom_entrep',$nom_entrep);
        $insert2->bindParam(':secteur',$secteur);
        $insert2->bindParam(':localisation',$localisation);
        $insert2->bindParam(':lien',$lien);
          $insert2->execute();

          echo "Merci à monsieur ".$_POST['nom']." de l'entreprise ".$_POST['nom_entrep']." pour son enregistrement";
    }else {
        echo "non inscrit";
    }
    ?>

