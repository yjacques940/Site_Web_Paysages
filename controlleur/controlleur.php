<?php
    //require('model/ManagerCoursProfesseurs.php');
	require ('model/Manager.php');
	function PageAccueilTest()
    {		
        require ('view/vue_test.php');
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

	function MostPopularPicturesPage(){
		require 'view/view_most_popular_pictures.php';
		require("javascript/zoom.js");
	}

	function AddImagePage(){
		require 'model/Manager.php';
		$manager = new Manager();
		$countryList = $manager->GetAllCountries();
		$categoryList = $manager->GetAllCategories();
		require 'view/view_add_image.php';
	}

	function ConnexionPage(){
		require 'view/view_connexion.php';
	}

	function AllPicturesPage(){
		
        require 'model/Manager.php';
        $manager= new Manager();
        $Images = $manager->GetAllPictures();
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

	function AddImageInDatabase()
	{
		require 'view/addData.php';
		require 'model/Manager.php';
		$addData = new addData();
		$path = $addData->CheckImage();
		$manager = new Manager();
		$manager->SavePathInDataBase($path);
	}
    
    function GetIsLiked($path)
    {
        require 'model/Manager.php';
        $manager = new Manager();
        $Isliked = $manager->GetIsLiked($path);
    }
?>   