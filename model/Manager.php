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

	public function GetAllCategories()
	{
		$sql = 'select * from tbl_category order by category desc';
		$categoryList = self::getConnexion()->query($sql);
		return $categoryList;
	}

	public function GetAllCountries()
	{
		$sql = 'select * from tbl_country order by countryName desc';
		$countryList = self::getConnexion()->query($sql);
		return $countryList;
	}

	function SavePathInDataBase($path)
	{
			$id_category = 1;
			$id_country = '1';
			$id_user = 1;
        $dateTime = date('Y-m-d H-i-s');
		$sql = 'call RegisterPicture(:path,:dateTimePicture,:id_category,:id_country,:id_user)';
		$registerImage = self::getConnexion()->prepare($sql);
        $registerImage->bindParam(':path',$path,PDO::PARAM_STR);
		$registerImage->bindParam(':dateTimePicture',$dateTime,PDO::PARAM_STR);
		$registerImage->bindParam(':id_category',$id_category,PDO::PARAM_INT);
		$registerImage->bindParam(':id_country',$id_country,PDO::PARAM_STR);
		$registerImage->bindParam(':id_user',$id_user,PDO::PARAM_INT);
		$registerImage->execute();
	}
}

?>