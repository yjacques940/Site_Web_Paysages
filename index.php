<?php
session_start();

require 'controlleur/controlleur.php';

try {
	if(!empty($_GET['action'])){
        if($_GET['action'] == "connexion"){
            if (isset($_POST['username']) && isset($_POST['password'])){
                //if(checkIfUserIsValid(htmlentities($_POST['username']),htmlentities($_POST['password']))){
                    $_SESSION['username'] = $_POST['username'];
                     Test();	
                //};

	       }
        }
    }
    
    

	else {
		pageDeConnexion();
	}
}

catch (PDOException $e) 
{
  $msgErreur = $e->getMessage();
  require 'view/vueErreur.php';
} 
?>
