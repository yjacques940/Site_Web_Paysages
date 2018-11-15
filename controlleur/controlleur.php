<?php
	/*require 'Modele.php';*/
	function Test(){		
        //header('Location: view/vue_test.php');
        require 'view/vue_test.php';
	}
	
	function pageDeConnexion(){
		require 'view/vue_connexion.php';
	}

    function checkIfUserIsValid($username, $password){
        return ($username == "Bob" && $password == "111");   
    }
?>   