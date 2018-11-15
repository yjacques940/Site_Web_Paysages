<?php
    ob_start();
?>
<head>
    <script type="text/javascript" src="./jquery-validation-1.15.0/lib/jquery-1.11.1.js"></script>
<script type="text/javascript" src="./jquery-validation-1.15.0/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="./jquery-validation-1.15.0/dist/localization/messages_fr.js"></script>
</head>
<body>
    <form id="formulaire_connexion" class="pure-form pure-form-aligned" action="index.php?action=connexion" type="actionForm" method="POST">
        <fieldset>
            <div class="pure-control-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input name="username" id="username" type="text" placeholder="Nom d'utilisateur">
            </div>
            <div class="pure-control-group">
                    <label for="password">Mot de passe</label>
                    <input for="password" name="password" id="password" type="password" placeholder="Mot de passe">
            </div>


        </fieldset>
        <button type="submit" class="pure-button pure-button-primary">Se connecter</button>
    </form>
    <script>
    $('#formulaire_connexion').validate({
        errorClass: "mon_erreur_classe",
        errorElement: "em",
        onfocusout: function(test) {
            this.element(test);
        },
        rules: {
            username: {
                required: true,
            },
            password: {
                required: true,
            },
        },
        messages: {
            username: {
                required: "Veuillez entrer votre nom d'usager",
            },
            password: {
                required: 'Veuillez entrez votre mot de passe',
            },
        }
    });

</script>

<style>
    .mon_erreur_classe {
        color: red;
    }

</style>
</body>



<?php require('gabarit.php');?>
