<?php

function connection(){

    
    $user = "root";
    $passPCOffice = "Thesis1";
    $pasPCHome = "pass";

    try{

        $db = new PDO("mysql:host=localhost;dbname=mobsdb", $user, $passPCOffice);
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $db;
    }
    catch(PDOException $e)
    {
        return $e->getMessage();
    }


}
