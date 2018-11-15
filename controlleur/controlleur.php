<?php
	function Test(){		
        require 'view/vue_test.php';
	}
	
	function pageDeConnexion(){
		require 'view/vue_connexion.php';
	}

    function checkIfUserIsValid($username, $password){
        return ($username == "Bob" && $password == "111");   
    }
?>   