<?php
require_once("model/Connexion.php"); // on pourra utiliser dbConnexion

class Manager extends Connexion
{
// Renvoie la liste de tous les départements
    function GetAllPictures()
    {
        $sql = 'select * from tbl_pictures';
        return self::getconnexion()->query($sql);
    }
    
    function GetCountryNameByPictureId($picture_id)
    {
       /* $sql = 'select countryName from tbl_pictures inner join tbl_country on
                tbl_pictures.id_country = tbl_country.id_country';*/
        return self::getConnexion()->query($sql);
    }
    
    function GetCategoryByPictureId($picture_id)
    {
        $sql =1;
       // select * from tbl_pictures inner join tbl_category on 
         //   tbl_pictures.id_category = tbl_category.id_category
    }
    
    function IsAlreadyExistingInDatabase($username)
    {
        $sql =1;
        //select * from tbl_user where username  = $user_name
        //return query.Any();
    }
    
    function GetQuantityOfLikesOfAPicture($picture_id)
    {
        $sql =1;
        //A REVERIFIER
        //elect id_picture_like.Count from tbl_picture_like where id_picture = //$id_picture
    }
    
    function HasLikedThePicture($current_user_id, $current_picture_id)
    {
        $sql =1;
        //select * from tbl_picture_like where id_user = $current_user_id 
        //and id_picture = $current_picture_id
    }
    
    function IsUserRegistered($user_name, $password)
    {
        $sql =1;
        //select * from tbl_user where username = $user_name and password = $password //and Active
        //return bool
    }

}
?>