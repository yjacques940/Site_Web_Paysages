
<?php ob_start();?>


<script type="text/JavaScript" src="jquery-3.3.1.min.js"></script>


<body>
    <form class="pure-form" action="index.php?action=AllerPageDeTest" method="post">
    <fieldset>
        <input for="username" name = "username" id="username" type="text" placeholder="Nom d'utilisateur">
        <input for="password" name = "password" id="password" type="password" placeholder="Mot de passe"> 
    </fieldset>
    <button type="submit" class="pure-button pure-button-primary">Se connecter</button>
</form>
</body>
<?php require('gabarit.php');?>







