<?php

session_start();
if(!isset($_SESSION['lang'])){
    $_SESSION['lang'] = 'fr';
}

if(isset($_GET['lang']) && $_GET['lang'] == 'en'){
    $_SESSION['lang'] = 'en';
}elseif (isset($_GET['lang']) && $_GET['lang'] == 'fr'){
    $_SESSION['lang'] = 'fr';
}


function langEN()
{
    if (isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){
        return true;
    }
    else{
        return false;
    }
}



?>