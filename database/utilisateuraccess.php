<?php
require_once '/hpdocs/photopost/model/utilisateur.php';
class utilisateuraccess
{
    public static function create($pdo,$utilisateur)
    {
        $sql="INSERT INTO UTILISATEUR(`pseudo`,`email`,`motdepasse`)
            VALUEs ('$utilisateur->$pseudo',
            '$utilisateur->$email',
            '$utilisateur->motdepasse')";
        echo "<br>Utilisateuraccess::create - sql=$sql";
        try 
        {
            $pdo->exec($sql);
            return true;
        }
        catch (PDOexception $exception)
        {
            return false;
        }
    }
    public function chekPassword($pdo,$email,$motdepasse):bool;
}
?>