
<?php 
$title = "Accueil";
$SubTitle = "Bienvenue sur notre site!";
ob_start();
?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
  </head>

  <body>
  </body>
</html>
<?php $contenu = ob_get_clean(); ?>
<?php require("gabarit.php"); ?>