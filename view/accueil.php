
<?php 
$title = "Accueil";
$SubTitle = "Bienvenue sur notre site!";
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
</head>


	<body>
	<div>
	<H1>Bienvenue sur notre site Web!</h1>
		<h4>Vous voulez ajouter des photos sur notre site? </br>
		Inscrivez-vous et rendez vous dans la section "Ajouter une photo".</br>
		Montrez au monde entier que votre photo est la plus belle.</br> Bonne visite!</h4>
	</div>
	</body>
	
</html>
<?php $contenu = ob_get_clean(); ?>
<?php require("gabarit.php"); ?>