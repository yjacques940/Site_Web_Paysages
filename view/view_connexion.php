<?php
$title = "Connexion";
$SubTitle ="";
ob_start();
?>
<head>
<meta charset="UTF-8">


</head>
<body>
    <form id="formulaire_connexion" class="pure-form pure-form-aligned" action="index.php?action=Login" type="actionForm" method="POST">
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
<?php $contenu = ob_get_clean(); ?>
<?php require('gabarit.php');?>
