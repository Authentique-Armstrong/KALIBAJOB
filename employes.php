<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="employes.css">
    <link rel="icon" href="loupe.png"> 
    <title>Inscription</title>
</head>
<body>
    <div class="background">
        <div class="bulles">
            <span style="--i:11;"></span>
            <span style="--i:12;"></span>
            <span style="--i:24;"></span>
            <span style="--i:10;"></span>
            <span style="--i:14;"></span>
            <span style="--i:23;"></span>
            <span style="--i:18;"></span>
            <span style="--i:16;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span>
            <span style="--i:22;"></span>
            <span style="--i:25;"></span>
            <span style="--i:18;"></span>
            <span style="--i:21;"></span>
            <span style="--i:15;"></span>
            <span style="--i:13;"></span>
            <span style="--i:26;"></span>
            <span style="--i:17;"></span>
            <span style="--i:13;"></span>
            <span style="--i:28;"></span>
            <span style="--i:31;"></span>
            <span style="--i:32;"></span>
            <span style="--i:44;"></span>
            <span style="--i:30;"></span>
            <span style="--i:34;"></span>
            <span style="--i:43;"></span>
            <span style="--i:38;"></span>
            <span style="--i:36;"></span>
            <span style="--i:39;"></span>
            <span style="--i:40;"></span>
            <span style="--i:13;"></span>
            <span style="--i:26;"></span>
            <span style="--i:17;"></span>
            <span style="--i:13;"></span>
            <span style="--i:28;"></span>
            <span style="--i:13;"></span>
            <span style="--i:26;"></span>
            <span style="--i:17;"></span>
            <span style="--i:13;"></span>
            <span style="--i:28;"></span>
            
        </div>
        <form method="POST" id="form" action="enreg1.php">
            <div class="container">
                <h1 class="title">Inscription</h1>
                    <div class="form_group">
                        <input type="text" name="nom" id="nom" class="space" placeholder="Nom & prénom" required> 
                        <label class="form_label">Nom & prénoms</label>
                        <span id="nulle"></span> 
                        <div id="error"></div>
                    </div>

                    <div class="form_group">
                        <input type="date" name="date_naiss" id="date_naiss" class="space" placeholder="Date de naissance" required> 
                        <label class="form_label">Date de naissance</label>
                        <div id="error1"></div>
                    </div>

                    <div class="form_group">  
                        <input type="number" name="tel" class="space" id="tel" placeholder="Téléphone" required>  
                        <label class="form_label">Téléphone</label>
                        <div id="error2"></div> 
                    </div>

                    <div class="form_group">
                        <label class="form_label">Email</label>
                        <input type="text" name="email" id="email" class="space" placeholder="Email" required> 
                        <div id="error3"></div>
                    </div>

                    <div class="form_group">
                        <input type="text" name="localisation" id="localisation" class="space" placeholder="localisation" required> 
                        <label class="form_label">Localisation</label>
                        <div id="error4"></div>
                    </div>

                    <div class="btn_group">
                        <div class="submit">
                            <button name="envoyer" type="submit" class="Btn">Envoyer</button>
                        </div>
                        <div class="submit">
                            <button type="reset" class="Btn">Annuler</button>
                        </div>
                    </div>
            </div>
            <!--
            <h2 class="but">J'ai déja un compte</h2>
            <h5 class="but"><a href="connexion1.php">Connectez-vous!!</a></h5>---> 
        </form>
    </div>
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
