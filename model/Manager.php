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

}
?>