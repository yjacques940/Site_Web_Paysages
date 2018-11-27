<?php
	function Test(){		
        require 'view/vue_test.php';
	}

	function MainPage(){
		require 'view/view_main_page.php';
	}

	function MostPopularPicturesPage(){
		require 'view/view_most_popular_pictures.php';
	}

	function AddImagePage(){
		require 'view/view_add_image.php';
	}

	function ConnexionPage(){
		require 'view/view_connexion.php';
	}

	function AllPicturesPage(){
		require 'view/view_gallery.php';
	}

	function RegistrationPage(){
		require 'view/view_registration.php';
	}

    function checkIfUserIsValid($username, $password){
        return ($username == "Bob" && $password == "111");   
    }

    function RegisterUser($firstname,$lastname,$username,$password){
        require 'model/Manager.php';
        $manager = new Manager();
        $manager->RegisterUser($firstname,$lastname,$username,$password);

    }
?>   