
<?php 
$title = "Toutes les photos";
$SubTitle = "Voici toutes nos photos";
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
