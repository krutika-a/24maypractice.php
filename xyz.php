<?php
error_reporting(0);

require_once("opooslogin.php");


if (isset($_POST) &&  $_POST["submit"] =="submit")
{


    $db = new dbconnection();
    $res =$b->insertuser($_POST);
    if(!$this->$res)
    {
        exit("provide data");
    }
}


?>

<html>
<form method="POST">
<fieldset>

Log-in-<input type="text" name="login" value=""><br><br>
password-<input type="password" name="password" value=""><br><br>
mob-no-<input type="text" name="mobno" value=""><br><br>
<button name="submit">submit</button>

</fieldset>
</form>
</html>

