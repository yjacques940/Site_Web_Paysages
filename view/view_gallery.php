
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
	<div>
	<?php
                $directory = "Images";
				$images = glob($directory . "/*.{jpg,jpeg,gif,png,JPG,JPEG,GIF,PNG}",GLOB_BRACE);
				$count =0;
				foreach($images as $image)
				{
				$count++;
				?>
		<div class="photo-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
            <a href="http://www.nilssonlee.se/">
			<?php
				  echo '<img src="' .$image . '"/>';
			?>
            </a>
            <aside class="photo-box-caption">
                <span>
                    by <a href="http://www.nilssonlee.se/"><?php echo $count ?></a>
                </span>
            </aside>
        </div>
		<?php } ?>

	</div>
	</body>

</html>

<?php $contenu = ob_get_clean(); ?>
<?php require("gabarit.php"); ?>
