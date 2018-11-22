<?php
session_start();
require 'view/gabarit.php';
ob_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Page d'inscription</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
        <script type="text/javascript" src="./jquery-validation-1.15.0/lib/jquery-1.11.1.js"></script>
        <script type="text/javascript" src="./jquery-validation-1.15.0/dist/jquery.validate.min.js"></script>
        <script type="text/javascript" src="./jquery-validation-1.15.0/dist/localization/messages_fr.js"></script>
    <!--<![endif]-->
    <?php
    session_unset();
    session_destroy();
    ?>
</head>
<body>

<div class="pure-g">
    <div class="pure-u-1 pure-u-md-2-3 pure-u-lg-1-5">
    </div>
    <div class="pure-u-1 pure-u-md-2-3 pure-u-lg-2-5 form-box"> <!-- pour centrer -->
    <form action="index.php?action=inscription" method="post" name = 'formulaire_inscription' id = "formulaire_inscription" class="pure-form pure-form-aligned" >  
    	
         <fieldset>
              <legend><h3>Inscription</h3></legend>
               <div class="pure-control-group">
                  <label for="firstname">Prénom : </label>
                  <input  id="firstname" name="firstname"  type="text" />
               </div> 
               
              <div class="pure-control-group">
                  <label for="lastname">Nom : </label>
                  <input  id="lastname" name="lastname"  type="text" />
              </div>   
              
              <div class="pure-control-group">
                  <label for="user_name">Nom d'utilisateur : </label>
                  <input  id="user_name" name="username"  type="text" />
              </div>   
              
              <div class="pure-control-group"> 
                  <label for="password">Mot de passe : </label>
                  <input  id="password" name="password"  type="password" />
              </div>
              
              <div class="pure-control-group"> 
                  <label for="password">Confirmer Mot de passe : </label>
                  <input  id="password_confirm" name="password_confirm"  type="password" />
              </div>   
              
              <div class="pure-controls">
                <input type="submit" name="Submit" value="S'inscrire" class="pure-button pure-button-primary" > 
              </div>
    	</fieldset>
	</form> 
</div>
    <script>
    $('#formulaire_inscription').validate({
        errorClass: "mon_erreur_classe",
        errorElement: "em",
        onfocusout: function(test) {
            this.element(test);
        },
        rules: {
            firstname:{
                required: true,
            },
            lastname:{
                required: true,
            },
            username: {
                required: true,
            },
            password: {
                required: true,
            },
            password_confirm:{
                equalTo : "#password",
            }
        },
        messages: {
            firstname: {
                required: "Veuillez entrer votre prénom",
            },
            lastname: {
                required: "Veuillez entrer votre nom de famille",
            },
            username: {
                required: "Veuillez entrer votre nom d'usager",
            },
            password: {
                required: 'Veuillez entrez votre mot de passe',
            },
            password_confirm:{
                equalTo: 'Les mots de passe ne concordent pas',
            }
        }
    });

</script>

<style>
    .mon_erreur_classe {
        color: red;
    }

</style>

</body> 
</html> 
<?php require 'view/gabarit.php';?>