<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Page d'inscription</title>
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
                  <label for="firstname">Prénom : </label>
                  <input  id="firstname" name="firstname"  type="text" placeholder="Votre prénom"/>
               </div> 
               
              <div class="pure-control-group">
                  <label for="lastname">Nom : </label>
                  <input  id="lastname" name="lastname"  type="text" placeholder="Votre nom"/>
              </div>   
              
              <div class="pure-control-group">
                  <label for="user_name">Nom d'utilisateur : </label>
                  <input  id="user_name" name="username"  type="text" placeholder="Entrez un nom d'utilisateur"/>
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