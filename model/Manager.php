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

	function SavePathInDataBase($path,$id_country)
	{
			$id_category = 1;
            $title = "Test";
			$id_country = $id_country;
        echo "idcountry " . $id_country;
			$id_user = self::GetUserIdByUserName()->fetch();
        $dateTime = date('Y-m-d H-i-s');
		$sql = 'call RegisterPicture(:path,:dateTimePicture,:id_category,:id_country,:id_user,:title)';
		$registerImage = self::getConnexion()->prepare($sql);
        $registerImage->bindParam(':path',$path,PDO::PARAM_STR);
		$registerImage->bindParam(':dateTimePicture',$dateTime,PDO::PARAM_STR);
		$registerImage->bindParam(':id_category',$id_category,PDO::PARAM_INT);
		$registerImage->bindParam(':id_country',$id_country,PDO::PARAM_STR);
		$registerImage->bindParam(':id_user',$id_user['id_user'],PDO::PARAM_INT);
        $registerImage->bindParam(':title',$title,PDO::PARAM_STR);
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
        $id_user = self::GetUserIdByUserName()->fetch();
        $sql ='call RegisterNewLike(:dateTimePictureLike,:id_picture,:id_user)';
        $registerLike = self::getConnexion()->prepare($sql);
        $registerLike->bindParam(':dateTimePictureLike',$dateTime,PDO::PARAM_STR);
        $registerLike->bindParam(':id_picture',$id_picture,PDO::PARAM_INT);
        $registerLike->bindParam(':id_user',$id_user['id_user'],PDO::PARAM_INt);
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

    function GetMostLikedPictures()
    {
        $sql = 'select count(id_picture_like) as likes,id_picture_like,id_picture from tbl_picture_like group by id_picture order by likes desc limit 10';
        $result = self::getConnexion()->query($sql);
        $result->execute();
        return $result;
    }
    
    function GetLikesOfAPicture($id_picture)
    {
        $sql = 'select count(id_picture_like) as likes,id_picture_like,id_picture from tbl_picture_like where id_picture = :id_picture';
        $result = self::getConnexion()->prepare($sql);
        $result->bindParam(':id_picture',$id_picture,PDO::PARAM_INT);
        $result->execute();
        return $result;
    }

    function GetMostLikedPicturesByIdPicture($id_picture)
    {
            $sql = 'select * from tbl_pictures where id_picture = :id_picture';
            $result = self::getConnexion()->prepare($sql);
            $result->bindParam(':id_picture',$id_picture,PDO::PARAM_INT);
            $result->execute();
        return $result;
    }

    function GetUserForEachPicture($id_picture)
    {
            $sql = 'select id_user from tbl_pictures where id_picture = :id_picture';
            $result = self::getConnexion()->prepare($sql);
            $result->bindParam(':id_picture', $id_picture,PDO::PARAM_INT);
            $result->execute();
            $id_user = $result->fetch();
            $userName = self::GetUserByIdUser($id_user);
            return $userName;
    }

    function GetUserByIdUser($id_user)
    {
        $sqlUser = 'select * from tbl_user where id_user = :id_user';
        $user = self::getConnexion()->prepare($sqlUser);
        $user->bindParam('id_user',$id_user['id_user'],PDO::PARAM_INT);
        $user->execute();
        return $user;
    }
    
    function GetUserIdByUserName()
    {
        $yaya = "yannJac";
        $sql = 'select id_user from tbl_user where userName = :userName';
        $user = self::getConnexion()->prepare($sql);
        $user->bindParam(':userName',$_SESSION['username'],PDO::PARAM_STR);
        $user->execute();
        return $user;
    }
    
    function IsPictureLikeByUser($username, $id_picture){
        $sql = 'select 1 from tbl_picture_like where id_user in (select id_user from tbl_user where userName = :username) and id_picture = :id_picture';
        $pictureLiked= self::getconnexion()->query($sql);
        $pictureLiked->bindParam(':username',$username,PDO::PARAM_STR);
        $pictureLiked->bindParam(':id_picture',$id_picture,PDO::PARAM_INT);
        return $pictureLiked;
    }
    
    function GetMostLikedPictures()
    {
        $sql = 'select count(id_picture_like) as likes,id_picture_like from tbl_picture_like group by id_picture order by likes desc limit 10; ';
        $result = self::getConnexion()->query($sql);
        $result->execute();
        return $result;
    }

    function GetMostLikedPicturesByIdPicture($mostLikedPictures)
    {
        $sql = 'select * from tbl_pictures where (tbl_picture.id_picture in ($mostLikedPictures))';
        $result = self::getConnexion()->query($sql);
        $result->execute();
        return $result;
    }

    function GetUserForEachPicture($id_picture)
    {
            $sql = 'select id_user from tbl_pictures where id_picture = :id_picture';
            $result = self::getConnexion()->prepare($sql);
            $result->bindParam(':id_picture', $id_picture,PDO::PARAM_INT);
            $result->execute();
         $id_user = $result->fetch();
        $sqlUser = 'select * from tbl_user where id_user = :id_user';
        $user = self::getConnexion()->prepare($sqlUser);
        $user->bindParam('id_user',$id_user['id_user'],PDO::PARAM_INT);
        $user->execute();
        return $user;
    }

    function GetUserByIdUser($result)
    {
        
    }
    
    function CheckIfUserCredentialsAreValid($username, $password)
    {
        $validCredentials = false;
        $sql ='select 1 as valid from tbl_user where userName = :userName and password = :password';
        $checkUser = self::getConnexion()->prepare($sql);
        $checkUser->bindParam(':userName',$username,PDO::PARAM_STR);
        $checkUser->bindParam(':password',$password,PDO::PARAM_STR);
        $checkUser->execute();
        return $checkUser;
    }
}
?>