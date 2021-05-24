<?php
error_reporting(0);
$con= mysqli_connect("localhost","krutika","K.a.1195","user");
if($con){
    echo"db connect";
}else
{
    echo "db not conneted";
}

if (isset ($_POST) && $_POST["submit"]=="submit")
{


echo $query="INSERT INTO newuser(name,email,password) 
values('".$_POST["name"]."','".$_POST["email"]."','".$_POST["password"]."')";

$res= mysqli_query($con,$query);

if($res)
{
    echo"inserted";
}else{
    echo "not inserted";
}
}
else
{
    "exit";
}
?>
<html>
<form action="" method="post">
Name-<input type="text" name="name" value="">
email-id-<input type="email" name="email" value="">
Password-<input type="password" name="password" value="password">
<button type="submit" name="submit" value="submit">submit</button>
</form>
</html>