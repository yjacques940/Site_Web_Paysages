
<?php 
$title = "Les plus populaires";
$SubTitle = "Voici les 10 plus populaires";

ob_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php $title ?></title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>
<body>
<div>
        <?php
        while($image = $mostLikedPictures->fetch())
        {
                $picturePath = $manager->GetMostLikedPicturesByIdPicture($image['id_picture'])->fetch();
                $path = $picturePath['picture'];
				?>
            <div class="photo-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
               
                <?php
				  echo '<img src="' .$path . '"/>';
			?>
                   
                    <aside class="photo-box-caption">
                     <span>
                      by <?php $name =  $manager->GetUserForEachPicture($image['id_picture'])->fetch() ;
                        echo $name['userName'];
                            ?>
                      <button><a href = " <?php echo $path ?> "><i class="material-icons">center_focus_weak</i>
                    </a></button>
                       
                        
				<button id="add-to-favorites"
               class="mdc-icon-button"
               aria-label="Add to favorites"
               aria-hidden="true"
               aria-pressed="false">
               <i class="material-icons mdc-icon-button__icon mdc-icon-button__icon--on">favorite</i>
               <i class="material-icons mdc-icon-button__icon">favorite_border</i>
               <?php echo $image['likes'];?>
                </button>
                   
                </span>
                    </aside>
            </div>
            <?php } ?>
   

</div>
</body>
</html>
<?php $contenu = ob_get_clean(); ?>
<?php require("gabarit.php"); ?>