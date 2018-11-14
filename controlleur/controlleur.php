

<?php
	/*require 'Modele.php';*/
	function Test(){		
        header('Location: view/vue_test.php');
	}
	
	function pageDeConnexion(){
		require 'view/vue_connexion.php';
	}

    function checkIfUserIsValid($username, $password){
        if($username == "Bob" && $password == "111"){
            
        }
    }
?>   