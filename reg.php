<?php
error_reporting(0);
$con=mysqli_connect("localhost","krutika","K.a.1195","practices");
if($con)
{ echo"dbsm connected";
} 
    else 
    { 
        echo "db not connected";
    }

if(isset ($_POST) && $_POST["submit"]=="submit")
{


$query="INSERT INTO Reg(`name`,`email`,`password`,`city`) 
value('".$_POST["name"]."','".$_POST["email"]."','".$_POST["password"]."','".$_POST["city"]."')";

$res=mysqli_query($con,$query);

if($res) { echo"inserted";}
 else
 {
     echo "not inserted";
    }
}
else{
    "exit";
}
?>

<html>
<form action="" method="post">
NAme=<input type="text" name="name" value="">
Email=<input type="email" name="email" value="">
password=<input type="password" name="password" value="">
city-<select name="city">
<option value="Nagpur" <?php if(option=="Nagpur") echo 'selected=="selected"'?> >Nagpur</option>
<option value="Mumbai" <?php if(option=="Mumbai") echo 'selected=="selected"'?> >Mumbai</option>
</select>
<button type =" submit" name="submit" value="submit">submit</button>
</form>
</html>



<?php
require_once("dbcon.php");
$query="INSERT INTO table name(name,email,password,city) 
values('".$_POST["name"]."','".$_POST["email"]."','".$_POST["password"]."','".$_POST["city"]."')";

$res=mysqli_query($con,$$query);
if($res){echo"done";}else{echo "not done";}
?>

<html><form method="post" action="method">
Name-<input type="text" name="name" value="">
email-<input type="text" name="email" value="">
password-<input type="text" name="password" value="">
City-<select name="city">
<option value="Nagpur" <?php if(options== "Nagpur") echo'selected="selected"';?>>Nagpur</option>
<option value="Pune" <?php if(options=="Pune")echo'selected="selected"';?>>Pune</option>
<option value="Mumbai" <?php if(options=="Mumbai") echo'selected="selected"';?>>Mumbai</option>
</select>
</form></html>


<?php
require_once("dbcon.php");
$selct="SELECT * FROM TABLE NAME";

$query=mysqli_query($con,$select);
if($query)
{
    echo "done";
}
else{echo "not done";}

?>


