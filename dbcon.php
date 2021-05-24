<?php
require_once("dbcon.php");
$con=mysqli_connect("localhost","krutika","K.a.1195","practices");
//echo ($con);
if(!$con)
{
   echo" please check connection";
}else
{
echo"Database connected";
}
?>