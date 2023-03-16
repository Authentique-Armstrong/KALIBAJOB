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
            $date_naiss = !empty($_POST['date_naiss'])? $_POST['date_naiss'] : NULL;
            $tel = !empty($_POST['tel'])? $_POST['tel'] : NULL;
            $email = !empty($_POST['email'])? $_POST['email'] : NULL;
            $localisation = !empty($_POST['localisation'])? $_POST['localisation'] : NULL;
    
        $insert1 = $conn->prepare("INSERT INTO employes (nom,date_naiss,tel,email,localisation) VALUES (:nom, :date_naiss, :tel, :email, :localisation)") or die (print_r($conn->errorInfo()));
        
        $insert1->bindParam(':nom',$nom);
        $insert1->bindParam(':date_naiss',$date_naiss);
        $insert1->bindParam(':tel',$tel);
        $insert1->bindParam(':email',$email);
        $insert1->bindParam(':localisation',$localisation);
          $insert1->execute();

          echo "Merci à monsieur ".$_POST['nom']." pour son enregistrement"; 
    }else {
        echo "non inscrit";
    }
    ?>


