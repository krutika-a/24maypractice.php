<?php
error_reporting(0);
require_once("opooslogin.php");

if (isset($_POST) && $_POST["submit"] == "submit")
{
    $db= new dbconnection();
    $res+ $db->insertuser($_POST);

}
?>
<html>
<form method="post" action="">
Name- <input type="text" name="name" value=""/>
Sirname- <input type="sirname" name="sirname" value=""/>
Gender- <input type="radio" name="gender" value=" "/>Female
        <input type="radio" name="gender" value=""/>male
Address- <input type="text" name="address" value=""/>
pincode- <input type="text" name="pincode" value=""/>
<button name="submit">Submit</button>

</form>
</html>