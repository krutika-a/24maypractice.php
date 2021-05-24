<?php

require_once("dbcon.php");

$delete = "DELETE FROM  Newreg_form
where id = '".$_GET['id']."'";
$res = mysqli_query($con,$delete);

if ($res)
{
    echo "Data Deleted";
}
else
{
    echo "Data not Deldeted";
}




?>