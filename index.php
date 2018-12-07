<?php
session_start();

require 'controlleur/controlleur.php';
	if(htmlentities(!empty($_GET['action'])))
	{
	if(htmlentities($_GET['action']) == "MostPopularPicturesPage")
	{
		 MostPopularPicturesPage();
	}
	if(htmlentities($_GET['action']) == "ConnexionPage")
	{
		 ConnexionPage();
	}
	if(htmlentities($_GET['action']) == "Registration")
	{
		 RegistrationPage();
	}
	if(htmlentities($_GET['action']) == "AllImages")
	{
		 AllPicturesPage();
	}
	if(htmlentities($_GET['action']) == "AddImage")
	{
		 AddImagePage();
	}
	if(htmlentities($_GET['action']) == "AddImageInDatabase" && htmlentities(isset($_POST['country'])) && htmlentities(isset($_POST['category'])) && htmlentities(isset($_POST['imageTitle'])))
	{
		 AddImageInDatabase(htmlentities($_POST['country']),htmlentities($_POST['category']),htmlentities($_POST['imageTitle']));
	}
	if(htmlentities($_GET['action']) == "Accueil")
	{
		MainPage();
	}
    if(htmlentities($_GET['action']) == "GetIsLiked" && isset($_GET['param']))
    {
        GetIsLiked(htmlentities($_GET['param']));
    }

        if(htmlentities($_GET['action']) == "connexion")
		{
            if (htmlentities(isset($_POST['username'])) && htmlentities(isset($_POST['password'])))
			{
                if(checkIfUserIsValid(htmlentities($_POST['username']),htmlentities($_POST['password'])))
				{
                    $_SESSION['username'] = htmlentities($_POST['username']);
                     Test();	
                }
				else
				{
				MainPage();
                  //  pageDeConnexion();
                }
			}
	    }

    if(htmlentities($_GET['action']) == "RegisterUser")
	{
		 RegisterUser(htmlentities($_POST['firstname']),htmlentities($_POST['lastname']),htmlentities($_POST['username']), htmlentities($_POST['password']));
        Mainpage();
    }
    if(htmlentities($_GET['action']) == "Login")
	{
        $username = htmlentities($_POST['username']);
        $password = htmlentities($_POST['password']);
	    if(CheckIfUserIsValid($username, $password)==true)
        {
            $_SESSION['username'] = $username;
             MainPage();
        }else{
            $errorMessage = "Nom d/'utilisateur ou mot de passe invalide";
            ConnexionPage();
        }
	}
    }
	else
	{
	   MainPage();
	}
    

 ?>
