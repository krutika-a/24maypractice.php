<?php
require_once("dbcon.php");
$delete = "DELETE  FROM Reg
WHERE id = '".$_GET['id']."'";
$res= mysqli_query($con,$delete);
if($res)
{
    echo "deleted";
}
else{
    echo"Not deleted";
}
?>


