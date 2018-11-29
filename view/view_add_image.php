
<?php 
$title = "Ajouter une image";
$SubTitle = "Ayez l'image la plus populaire en l'ajoutant ici";
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
		 <div class="pure-u-1 pure-u-md-2-3 pure-u-lg-4-5 form-box"> <!-- pour centrer -->   
        <form class="pure-form pure-form-aligned" id="mon_formulaire" method="Post" action="index.php?action=AddImageInDatabase" enctype="multipart/form-data">
          <fieldset>
            <h1 for="fichier_source">Choisissez une image</h1> 
             <div>
			<h3>Ville de provenance :
			<select name="country">
			<option value="">Mont-réal</option>
			</select>
			</h3>
			</div>
			<div>
			<h3>Catégorie :
			<select name="category">
			<option value="">Saint-Jessy</option>
			</select>
			</h3>
			</div>
              <div class="pure-control-group">
                 <h4> <form action="upload.php" method="post" enctype="multipart/form-data">
                      <p>
					  <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
					  <input type="hidden" name="MIN_FILE_SIZE" value="100">
                          <input type="file" name="fichier_source" />
                          <input type="submit" value="Envoyer" />
                      </p>
                  </form></h4>
              </div>
           </fieldset>
        </form>  
    </div>

	</body>

</html>

<?php $contenu = ob_get_clean(); ?>
<?php require("gabarit.php"); ?>




