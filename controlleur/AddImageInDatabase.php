<?php
    if(!empty($_FILES['fichier_source']['tmp_name'])){
        if(traite_initial()){
            if(is_uploaded_file($_FILES['fichier_source']['tmp_name'])){
                echo '<p>uploaded</p>';
                if(filesize($_FILES['fichier_source']['tmp_name'])<2000000){
                    require("view/view_add_image.php");
                }
            }
        }
    }
	else 
	{
        echo '<p> erreur </p>';
    }


function traite_initial(){
    $info_fichier = pathinfo($_FILES['fichier_source']['name']);
    $nom_fichier = GetNewFileName();
    $extension_upload = $info_fichier['extension'];
    $extension_autorisee = array('jpg', 'jpeg', 'gif', 'png','JPG', 'JPEG', 'GIF', 'PNG');
		if(in_array($extension_upload,$extension_autorisee))
		{
			$path ="Images/".$nom_fichier.'.'. $extension_upload;
			move_uploaded_file($_FILES['fichier_source']['tmp_name'], $path);
			SavePathInDataBase($path);
			return true;
		}
	}

	function GetNewFileName()
	{
		return date('YmdHis');
	}

	function SavePathInDataBase()
	{
	
	}
?>