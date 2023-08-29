<?php 
    function connect_database(){
        $servername = "";
        $username = "";
        $password = "";
        $dbname = "";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e){
            echo "Connection failed: " . $e->getMessage();
            $conn = null;
            return null;
        }
    }

?>
