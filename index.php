<?php
require_once './controllers/controllers.php';

if ((!isset($_RESQUEST['command']))
||
($_REQUEST['command']=='homepage'))
{
    afficherHomePage();
}
else
{
    if(($_REQUEST['command']=='login')
    &&
    (Utilisateuraccess::chekPassword($_POST['email'], $_POST['motdepasse'])))
    {

        afficherHomePage();
    }
    else
    {
        afficherHomePage();
    }
}
?>