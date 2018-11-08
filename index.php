<?php


require '/controlleur/controlleur.php';

try {
	
	if (isset($_POST['username'])){
        if(isset($_POST['action']) && htmlentities($_POST['action']) == "AllerPageDeTest")
		Test();
	}
	else {
		pageDeConnexion();
	}
}
catch (PDOException $e) {
  $msgErreur = $e->getMessage();
  require 'view/vueErreur.php';

} ?>
