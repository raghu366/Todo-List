<?php

class Dbconfig
{

    private $hostname ="127.0.0.1";
    private $root = "root";
    private $password = "root12345";
    private $dbname = "todo";
    public $con ;
    public function __construct(){
        $this->con = new \mysqli($this->hostname,$this->root,$this->password,$this->dbname);
        if($this->con->connect_error){
            echo "connection failed";
        }
        return $this->con;
    }

    public function validateString($a)
    {
        $data = mysqli_real_escape_string($this->con,$a);
        return $data;
    }

}

?>
