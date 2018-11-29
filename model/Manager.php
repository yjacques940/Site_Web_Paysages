<?php
require_once("model/Connexion.php"); // on pourra utiliser dbConnexion

class Manager extends Connexion
{   
    public function RegisterUser($firstname, $lastname, $username, $password){
        $sql = 'call RegisterUser(:firstname,:lastname,:username,:password)';
        $inscription = self::getConnexion()->prepare($sql);
        $inscription->bindParam(':firstname',$firstname,PDO::PARAM_STR);
        $inscription->bindParam(':lastname',$lastname,PDO::PARAM_STR);
        $inscription->bindParam(':username',$username,PDO::PARAM_STR);
        $inscription->bindParam(':password',$password,PDO::PARAM_STR);
        $inscription->execute();
	}

	public function AddNewPicture($pathname)
	{
		$guid = com_create_guid();
		$id_category = 1;
		$id_country = 1;
		$id_user = 1;
		$conn = new Connexion();
		$sql = 'insert into tbl_pictures(id_picture,picture,dateTimePicture,id_category,id_country,id_user) 
				values('$guid','$pathname','date("Y-m-d H:i:s")','$id_category','$id_country','$id_user');'

		$add = self::getConnexion()->prepare($sql);
		$add->execute();
	}

	public function GetAllCategories()
	{
		$sql = 'select * from tbl_category'
		$data = self::getConnexion()->prepare($sql);
		$data->execute();
	}

	public function GetAllCountries()
	{
		$sql = 'select * from tbl_country'
		$data = self::getConnexion()->prepare($sql);
		$data->execute();
	}

}
?>