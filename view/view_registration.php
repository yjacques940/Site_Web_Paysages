
<?php 
$title = "Inscription";
$SubTitle = "Inscrivez-vous pour naviguer sur notre site!";
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title><?php $title ?></title>
    <link rel="stylesheet" href="/css/main.css">
</head>

	<body>
		<p> This is a Paragraph </p>
	</body>

</html>

<?php $contenu = ob_get_clean(); ?>
<?php require("gabarit.php"); ?>
