<?php


require ('controlleur/controlleur.php');
try {
	
	if (isset($_SESSION['username']))
    {
        if(isset($_GET['action']) && ($_GET['action'] == "AllerPageDeTest"))
        {
            PageAccueilTest();
        }
	}
	else 
    {
		pageDeConnexion();
	}
}

catch (PDOException $e) 
{
  $msgErreur = $e->getMessage();
  require 'view/vueErreur.php';
} 
?>
