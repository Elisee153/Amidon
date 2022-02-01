<?php

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PWD','');
define('DB_NAME','amidon');
define('DSN', 'mysql:host='.DB_SERVER.'; dbname='.DB_NAME);


//connexion function
function connexion()
{
    // offline

        
    $resource = new PDO (DSN,DB_USER,DB_PWD,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    

    // online
    
    //self::$resource = new PDO (DSN,DB_USER,DB_PWD,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_SILENT)); 

    return $resource;
}


