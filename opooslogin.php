<?php
class dbconnection
{
    private $dbhost = "localhost";
    private $username = "krutika";
    private $pass = "K.a.1195";
    private $dbname = "Newpractice";
    private $con;


    function _construct()
    {
        $this->connect();
    }
    private function connect()
    {
        $this-> con = mysqli_connect($this->$dbhost,$this->username,$this->$pass,$this->$dbname);

        if(!$this->con)
        {
             exit ("db not connected");
        }
    }

public function insertuser($data)
{
    $insertquery= "INSERT into logpage (login,password,mobno) values('".$data["login"]."',
    '".$data["password"]."','".$data["mobno"]."')";

    $res = mysqli_query($tis->con,$insertquery);
    if($this->$res)
    {
        exit ("provide data");
    }
}



}
?>