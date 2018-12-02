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
    
    function GetIsLiked($path)
    {
        $sql = 'call GetIsLiked(:path)';
        $IsLiked = self::getConnexion()->prepare($sql);
        $IsLiked->bindParam(':path',$path,PDO::PARAM_STR);
        $IsLiked->execute();
        return !IsEmpty($IsLiked);
    }
    
    function SetNewLike($path)
    {
        $dateTime = date('Y-m-d H-i-s');
        $id_picture = 1;
        $id_user = 1;
        $sql ='call RegisterNewLike(:dateTimePictureLike,:id_picture,:id_user)';
        $registerLike = self::getConnexion()->prepare($sql);
        $registerLike->bindParam(':dateTimePictureLike',$dateTime,PDO::PARAM_STR);
        $registerLike->bindParam(':id_picture',$id_picture,PDO::PARAM_INT);
        $registerLike->bindParam(':id_user',$id_user,PDO::PARAM_INt);
        $registerLike->execute();
    }
    
    function UnlikeAPicture()
    {
        
    }
    
    function GetAllPictures()
    {
        $sql = 'select * from tbl_pictures';
        $pictures = self::getconnexion()->query($sql);
        return $pictures;
    }
}

?>