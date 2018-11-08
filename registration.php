<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Page de login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
    <!--<![endif]-->
    <?php
    session_unset();
    session_destroy();
    ?>
</head>
<body>

<div class="pure-g">
    <div class="pure-u-1 pure-u-md-2-3 pure-u-lg-1-5">
    </div>
    <div class="pure-u-1 pure-u-md-2-3 pure-u-lg-2-5 form-box"> <!-- pour centrer -->
    <form action="index.php?action=inscription" method="post" name = 'inscription' id = 'inscription' class="pure-form pure-form-aligned" >  
    	
         <fieldset>
              <legend><h3>Inscription</h3></legend>
               <div class="pure-control-group">
                  <label for="first_name">Prénom : </label>
                  <input  id="first_name" name="first_name"  type="text" placeholder="Entrez votre prénom"/>
               </div> 
               
              <div class="pure-control-group">
                  <label for="last_name">Nom : </label>
                  <input  id="last_name" name="last_name"  type="text" placeholder="Entrez votre nom"/>
              </div>   
              
              <div class="pure-control-group">
                  <label for="user_name">Nom d'utilisateur : </label>
                  <input  id="user_name" name="user_name"  type="text" placeholder="Entrez un nom d'utilisateur"/>
              </div>   
              
              <div class="pure-control-group"> 
                  <label for="password">Mot de passe : </label>
                  <input  id="password" name="password"  type="text" placeholder="Entrez un mot de passe"/>
              </div>   
              
              <div class="pure-controls">
                <input type="submit" name="Submit" value="S'inscrire" class="pure-button pure-button-primary" > 
              </div>
    	</fieldset>
	</form> 
</div>


</body> 
</html> 