<?php
session_start();

require 'controlleur/controlleur.php';
	if(!empty($_GET['action']))
	{
	if($_GET['action'] == "MostPopularPicturesPage")
	{
		 MostPopularPicturesPage();
	}
	if($_GET['action'] == "ConnexionPage")
	{
		 ConnexionPage();
	}
	if($_GET['action'] == "Registration")
	{
		 RegistrationPage();
	}
	if($_GET['action'] == "AllImages")
	{
		 AllPicturesPage();
	}
	if($_GET['action'] == "AddImage")
	{
		 AddImagePage();
	}
	if($_GET['action'] == "AddImageInDatabase")
	{
		 AddImageInDatabase();
	}
	if($_GET['action'] == "Accueil")
	{
		MainPage();
	}
    if($_GET['action'] == "GetIsLiked" && isset($_GET['param']))
    {
        GetIsLiked($_GET['param']);
    }

        if($_GET['action'] == "connexion")
		{
            if (isset($_POST['username']) && isset($_POST['password']))
			{
                if(checkIfUserIsValid(htmlentities($_POST['username']),htmlentities($_POST['password'])))
				{
                    $_SESSION['username'] = $_POST['username'];
                     Test();	
                }
				else
				{
				MainPage();
                  //  pageDeConnexion();
                }
			}
	    }

    if($_GET['action'] == "RegisterUser")
	{
		 RegisterUser(htmlentitites($_POST['firstname']),htmlentitites($_POST['lastname']),htmlentities($_POST['username']), htmlentities($_POST['password']);
        Mainpage();
	

    }
    if($_GET['action'] == "Login")
	{
        $username = htmlentitites($_POST['username']);
        $password = htmlentities($_POST['password']);
	    if(CheckIfUserCredentialsAreValid($username, $password))
        {
            $_SESSION['username'] = $username;
            MainPage();
        }else{
            $errorMessage = "Nom d/'utilisateur ou mot de passe invalide"
            ConnexionPage();
        }
	}

	else
	{
	 MainPage();
	}

 ?>
