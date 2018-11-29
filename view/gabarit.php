<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php $title ?></title>


<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
 <!--[if lte IE 8]>
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
    <!--<![endif]-->
    
    
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/layouts/gallery-old-ie.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="css/layouts/gallery.css">
        <!--<![endif]-->


</head>

<header>
    <div class="pure-u-1 pure-u-md-2-3 pure-u-lg-4-5">
       
    </div>
</header>
<body>

 <div>
        <div class="pure-menu pure-menu-horizontal">
			<a class="pure-menu-heading" href="index.php?action=Accueil">Accueil</a>
            <a class="pure-menu-heading" href="index.php?action=MostPopularPicturesPage">Les plus populaires</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item pure-menu-selected"><a href="index.php?action=ConnexionPage" class="pure-menu-link">Se connecter</a></li>
                <li class="pure-menu-item"><a href="index.php?action=Registration" class="pure-menu-link">S'inscrire</a></li>
                <li class="pure-menu-item"><a href="index.php?action=AllImages" class="pure-menu-link">Toutes les images</a></li>
                <li class="pure-menu-item"><a href="index.php?action=AddImage" class="pure-menu-link">Ajouter une image</a></li>
            </ul>
        </div>

    <div class="pure-u-1 form-box">
        <div class="text-box pure-u-1 pure-u-md pure-u-lg">
            <div class="l-box">
                <div class="photo-box pure-u-1 pure-u-md-1-3 pure-u-lg-1-3">
                    <h1 class="text-box-head"><?php echo $title ?></h1>
                    <p class="text-box-subhead"><?php echo $SubTitle ?></p>
                </div>
            </div>
        </div>
		<?php echo $contenu ?>  
		<div class="footer">
            Copyright © 2018
        </div>
	</div>
</div>

<script <?php echo $lien_ajax ?>></script>
<script <?php echo $gestion_ajax ?> ></script>	
</body>
</html>