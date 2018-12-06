
<?php
class addData{
    private $path; 
    function CheckImage()
    {
        if(!empty($_FILES['fichier_source']['tmp_name']))
            {
            $path = self::extension_ok();
                if(!empty($path))
                {
                        /*if(filesize($_FILES['fichier_source']['tmp_name'])<2000000)
                        {*/
                            
                            return $path;
                       // }
                }
            }
            else 
            {
                echo '<p> erreur </p>';
            }
    }
    
    function extension_ok()
	{
		$info_fichier = pathinfo($_FILES['fichier_source']['name']);
		$nom_fichier = self::GetNewFileName();
		$extension_upload = $info_fichier['extension'];
		$extension_autorisee = array('jpg', 'jpeg', 'gif', 'png','JPG', 'JPEG', 'GIF', 'PNG');
			if(in_array($extension_upload,$extension_autorisee))
			{
				$path = "Images/".$nom_fichier.'.'. $extension_upload;
				move_uploaded_file($_FILES['fichier_source']['tmp_name'], $path);
				return $path;
			}
	}

	function GetNewFileName()
	{
		return date('YmdHis');
	}
}

?>