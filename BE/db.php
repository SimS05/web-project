<?php
function DBConnect(){
    $dbhost="127.0.0.1";
    $dbname="web-project";
    $dbuser="user05";
    $dbpass="user0505user";
    $db=null;
    try {
        $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);		
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    return $db;
}


?>