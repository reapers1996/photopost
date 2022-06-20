<?php
require_once 'imageaccess.php';
require_once 'photosaccess.php';
require_once 'utilisateuraccess.php';

function pdo_connect()
{
    $host='localhost';
    $user='root';
    $password='';
    $name='webimage';
    try 
    {
        return PDO("mysql:host=$host:dbname=$name;charset=utf8",$user,$password);
    }
    catch (PDOException $exception)
    {
        echo $exception->getMessage();
        die('CONNECTION ECHOUEE');
    }
}
?>