<?php
    define("DB_user", "root");
    define("DB_pass", "");
        
    $servername = "localhost";
    $dbname     = "cdicksoncareerdb";

    try
    {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", DB_user, DB_pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
?>