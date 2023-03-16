<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="KalibaJobs.css">
    <link rel="icon" href="loupe.png"> 
    <title>Employés</title>
</head>
<body>
<form method="POST" id="form" action="enreg1.php">
        <fieldset>
         <table align="center">
      <tr>
          <td><label>Nom & prenoms</label></td>
          <center> <span id="nulle"></span> </center>
          <td><input type="text" name="nom" id="nom" class="space"> <div id="error"></div></td>
        </tr>
        <tr>
          <td><label>Date de naissance</label></td>
          <td><input type="date" name="date_naiss" id="date_naiss" class="space" > <div id="error1"></div></td>
      </tr>
      <tr>
          <td><label>Téléphone</label></td>
          <td><input type="number" name="tel" class="space" id="tel"> <div id="error2"></div></td>
      </tr>
      <tr>
          <td><label>Email</label></td>
          <td><input type="text" name="email" id="email" class="space" > <div id="error3"></div></td>
      </tr>
      <tr>
          <td><label>Localisation</label></td>
          <td><input type="text" name="localisation" id="localisation" class="space"> <div id="error4"></div></td>
      </tr>
      <tr>
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
        let date_naiss = document.getElementById("date_naiss");        
        if (tel.value == "") {
            let error1 = document.getElementById('error1');
            error1.innerHTML = "Veuillez vérifier votre date de naissance";
            error1.style.color = "red";
            b.preventDefault();
        }if (date_naiss.value != "" ) {
           error.style.display = "none";
        }
    })
    form.addEventListener('submit', function (a) {
        let tel = document.getElementById("tel");        
        if (tel.value == "") {
           let error2 = document.getElementById('error2');
            error2.innerHTML = "Veuillez entrez votre numéro de téléphone";
            error2.style.color = "red";
            a.preventDefault();
        }if (tel.value != "" ) {
           error.style.display = "none";
        }
    })
    form.addEventListener('submit', function (c) {
        let email = document.getElementById("email");        
        if (email.value == "") {
            let error3 = document.getElementById('error3');
            error3.innerHTML = "Veuillez entrez votre email";
            error3.style.color = "red";
            c.preventDefault();
        }if (email.value != "" ) {
           error.style.display = "none";
        }
    })
    form.addEventListener('submit', function (d) {
        let localisation = document.getElementById("localisation");        
        if (localisation.value == "") {
           let error4 = document.getElementById('error4');
            error4.innerHTML = "Veuillez insérer votre localisation";
            error4.style.color = "red";
           d.preventDefault();
        }if (localisation.value != "" ) {
           error.style.display = "none";
        }
    })
</script>
