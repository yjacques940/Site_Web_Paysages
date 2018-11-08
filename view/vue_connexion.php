
<?php ob_start();?>


<script type="text/JavaScript" src="jquery-3.3.1.min.js"></script>


<body>
    <form class="pure-form" action="index.php?action=AllerPageDeTest" >
    <fieldset>
        <input name = "username" id="username" type="text" placeholder="Nom d'utilisateur" method="POST">
        <input name = "password" id="password" type="password" placeholder="Mot de passe" method="POST"> 
    </fieldset>
    <button type="submit" class="pure-button pure-button-primary">Se connecter</button>
</form>
</body>
<?php require('gabarit.php');?>







