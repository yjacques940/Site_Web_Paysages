<?php ob_start();?>


<script type="text/JavaScript" src="/jquery-3.3.1.min.js"></script>


<body>
    <form id="formulaire_connexion" class="pure-form pure-form-stacked" action="index.php?action=connexion" type="actionForm" method="POST">
        <fieldset>
            <input for="username" name="username" id="username" type="text" placeholder="Nom d'utilisateur">
            <input for="password" name="password" id="password" type="password" placeholder="Mot de passe">
        </fieldset>
        <button type="submit" class="pure-button pure-button-primary">Se connecter</button>
    </form>
</body>

<script>
    $('#formulaire_connexion').validate({
        errorClass: "mon_erreur_classe",
        errorElement: "em",
        onfocusout: function(test) {
            this.element(test);
        },
        rules: {
            "username": {
                "required": true,
            },
            password: {
                required: true,
            },
        },
        messages: {
            username: {
                required: "Veuillez entrer votre nom d'usager",
            },
            note: {
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

<?php require('gabarit.php');?>
