<?php 
$title = "Toutes les photos";
$SubTitle = "Voici toutes nos photos";
ob_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>
        <?php $title ?>
    </title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <div>
        <?php
        while($image = $Images->fetch())
        {
                $pathh = $image['picture'];
				$count =0;
				$count++;
				?>
            <div class="photo-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
                <?php
				  echo '<img src="' .$pathh . '"/>';
			?>
                    <aside class="photo-box-caption">
                        <span>
				<button id="add-to-favorites"
               class="mdc-icon-button"
               aria-label="Add to favorites"
               aria-hidden="true"
               aria-pressed="false">
               <i class="material-icons mdc-icon-button__icon mdc-icon-button__icon--on">favorite</i>
               <i class="material-icons mdc-icon-button__icon">favorite_border</i>
                </button>
                    by <?php echo $count ?>
                </span>
                    </aside>
            </div>
            <?php } ?>

    </div>
</body>

</html>

<?php $contenu = ob_get_clean(); ?>
<?php require("gabarit.php"); ?>
