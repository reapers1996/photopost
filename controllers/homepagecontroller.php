<?php

function afficherHomePage()
{
    // il va faloire detecter plus tard si l'utilisateur est connecter ou non 
    $connecte = false;
    if ($connecte)
    require_once 'C:/xampp/htdocs/photopost/view/homepage/template_homepage_connected.php';

    else
    require_once 'C:/xampp/htdocs/photopost/view/homepage/template_homepage_not_connect_connected.php';



}