<?php
// $servername =
// $username = "root";
// $password = "";
//
// try {
//     $conn = new PDO("mysql:host=$servername;dbname=dictionary", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
//     }
// catch(PDOException $e)
//     {
//     echo "Connection failed: " . $e->getMessage();
//     }
    class DBC{
      private $servername;
      private $username;
      private $password;
      private $dbname;
      private $charset;

      public function connect(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "dictionary";
        $this->charset = "utf8";
        try {
            $conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset, $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
            }
        catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }
      }

    }
?>
