<?php
    // Credentials for database access
    // you can use mysqli() or other on example i'am using PDO
    define('DBINFO', 'mysql:host=localhost;dbname=');
    define('DBUSER','');
    define('DBPASS','');
    function fetchAll($query){
        $con = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $con->query($query);
        return $stmt->fetchAll();
    }
    function performQuery($query){
        $con = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $con->prepare($query);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
?>