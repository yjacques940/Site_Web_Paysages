<?php
function Test()
{
    require 'view/vue_test.php';
}

function MainPage()
{
    require 'view/accueil.php';
}

function MostPopularPicturesPage()
{
    require 'model/Manager.php';
    $manager = new Manager();
    $mostLikedPictures = $manager->GetMostLikedPictures();
    require 'view/view_most_popular_pictures.php';
}

function AddImagePage()
{
    require 'model/Manager.php';
    $manager = new Manager();
    $countryList = $manager->GetAllCountries();
    $categoryList = $manager->GetAllCategories();
    require 'view/view_add_image.php';
}

function ConnexionPage()
{
    require 'view/view_connexion.php';
}

function AllPicturesPage()
{
    require 'model/Manager.php';
    $manager = new Manager();
    $Images = $manager->GetAllPictures();
    require 'view/view_gallery.php';
}

function RegistrationPage()
{
    require 'view/view_registration.php';
}

    function checkIfUserIsValid($username, $password){
        $validCredentials = false;
        require_once 'model/Manager.php';
        $manager = new Manager();
        $data = $manager->CheckIfUserCredentialsAreValid($username,$password);
        $valid = $data->fetch();
        if($valid['valid'] == 1){
		  $validCredentials = true;
	     }
        return $validCredentials;  
    }

function RegisterUser($firstname, $lastname, $username, $password)
{
    require 'model/Manager.php';
    $manager = new Manager();
    $manager->RegisterUser($firstname, $lastname, $username, $password);
}

	function AddImageInDatabase($id_country,$id_category,$title)
	{
		require 'view/addData.php';
		require 'model/Manager.php';
		$addData = new addData();
		$path = $addData->CheckImage();
		$manager = new Manager();
		$manager->SavePathInDataBase($path,$id_country,$id_category,$title,$_SESSION['username']);
        header("Location: index.php?action=AddImage");
	}
    
    function GetIsLiked($path)
    {
        require 'model/Manager.php';
        $manager = new Manager();
        $Isliked = $manager->GetIsLiked($path);
    }

?>   