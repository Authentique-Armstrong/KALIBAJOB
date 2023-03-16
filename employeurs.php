<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="KalibaJobs.css">
    <link rel="icon" href="loupe.png">
    <title>Employeurs</title>
</head>
<body>
<form method="POST" id="form" action="enreg2.php">
        <fieldset>
         <table align="center">
      <tr>
          <td><label>Nom du PDG</label></td>
          <center> <span id="nulle"></span> </center>
          <td><input type="text" name="nom" id="nom" class="space"><div id="error"></div></td>
        </tr>
     
      <tr>
          <td><label>Nom de l'entreprise</label></td>
          <td><input type="text" name="nom_entrep" id="nom_entrep" class="space" ><div id="error1"></div></td>
      </tr>
      <tr>
          <td><label>Secteur d'activité</label></td>
          <td><input type="text" name="secteur" id="secteur" class="space" ><div id="error2"></div></td>
      </tr>
      <tr>
          <td><label>Localisation</label></td>
          <td><input type="text" name="localisation" id="localisation" class="space" placeholder="Ville/Quartier"><div id="error3"></div></td>
      </tr>
      <tr>
          <td><label>Lien site de l'entreprise</label></td>
          <td><input type="text" name="lien" id="lien" class="space" placeholder="email/699999999" > <div id="error4"></div></td>
          <td><a href="#">Mon entreprise ne possède pas de Site web.</a></td>
      </tr>
      <tr>
          <td><button name="envoyer" type="submit">Envoyer</button></td>
          <td><button type="reset" class="rest">Annuler</button></td>
      </tr> 
        </table>
    </fieldset>
      <style>
          .space{
            padding: 15px;
            border-radius: 5px;
            border: none;
            background-color: #f2f2f2;
            margin-bottom: 15px;
            outline: none;
            font-size: medium;

 }
 .but{
     align-items: center;
     text-align: center;
 }
      </style>
        <br>
        <br>
        <h2 class="but">J'ai déja un compte</h2>
        <br>
        <br>
        <h5 class="but"><a href="connexion1.php">Connectez-vous!!</a></h5>
      </form>
</body>
</html>

<script>
    let form = document.getElementById('form');
    form.addEventListener('submit', function (e) {
        let nom = document.getElementById("nom");        
        if (nom.value == "") {
            let error = document.getElementById('error');
            error.innerHTML = "Veuillez entrez votre nom";
            error.style.color = "red";
            e.preventDefault();
        }if (nom.value != "" ) {
           error.style.display = "none";
        }
    })

    form.addEventListener('submit', function (b) {
        let nom_entrep = document.getElementById("nom_entrep");        
        if (nom_entrep.value == "") {
            let error1 = document.getElementById('error1');
            error1.innerHTML = "Veuillez insérer le nom de votre entreprise";
            error1.style.color = "red";
            b.preventDefault();
        }if (nom_entrep.value != "" ) {
           error.style.display = "none";
        }
    })
    form.addEventListener('submit', function (a) {
        let secteur = document.getElementById("secteur");        
        if (secteur.value == "") {
           let error2 = document.getElementById('error2');
            error2.innerHTML = "Veuillez entrez le secteur d'activité de l'entreprise";
            error2.style.color = "red";
            a.preventDefault();
        }if (secteur.value != "" ) {
           error.style.display = "none";
        }
    })
    form.addEventListener('submit', function (c) {
        let localisation = document.getElementById("localisation");        
        if (localisation.value == "") {
            let error3 = document.getElementById('error3');
            error3.innerHTML = "Veuillez entrez votre localisation";
            error3.style.color = "red";
            c.preventDefault();
        }if (localisation.value != "" ) {
           error.style.display = "none";
        }
    })
</script>


