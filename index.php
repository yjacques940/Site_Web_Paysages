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
		 RegisterUser($_POST['firstname'],$_POST['lastname'],$_POST['username'], $_POST['password']);
        Mainpage();
	}
    }

	else
	{
	 MainPage();
	}

 ?>
