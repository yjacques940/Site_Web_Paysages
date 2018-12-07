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
    <div id="gallery">
        <?php
        while($image = $Images->fetch())
        {
                
                $path = $image['picture'];
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
                       
                        
                         
				<button class= "likeDislikeButton"
               class="mdc-icon-button"
               aria-label="Add to favorites"
               aria-hidden="true"
               aria-pressed="false"
              value= <?php echo $image['id_picture'] ?>
               >
               <?php 
                if(!empty($_SESSION['username'])){
                    if($manager->IsPictureLikeByUser($image['id_picture'], $_SESSION['username'])){
                   echo  '<i  class="material-icons mdc-icon-button__icon">favorite</i>';
                    }
                }else{
                     echo  '<i class="material-icons mdc-icon-button__icon">favorite_border</i>';
                }

                ?>
                </button>
                    by <?php $name =  $manager->GetUserForEachPicture($image['id_picture'])->fetch() ;
                        echo $name['userName'];
                            ?>
                </span>
                    </aside>
            </div>
            <?php } ?>

    </div>
    <script>
        $(document).ready(function(){
          
               $('#gallery').on('click','.likeDislikeButton',function(){
                   alert(this.value);
                $.ajax({
                        url: "index.php?action=LikeDislikePicture&id_picture="+this.value,

                        

                });
            });
        });

</script>
</body>
</html>

<?php $contenu = ob_get_clean(); ?>
<?php require("gabarit.php"); ?>
