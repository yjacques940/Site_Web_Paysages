<?php
    if(!empty($_FILES['fichier_source']['tmp_name'])){
        if(traite_initial()){
            if(is_uploaded_file($_FILES['fichier_source']['tmp_name'])){
                echo '<p>uploaded</p>';
                if(filesize($_FILES['fichier_source']['tmp_name'])<2000000){
                    echo'<p> taille correct</p>';
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
			move_uploaded_file($_FILES['fichier_source']['tmp_name'], "Images/".$nom_fichier.'.'. $extension_upload);
			return true;
		}
	}

	function GetNewFileName()
	{
		return date('Ymd-H_i_s');
	}
?>