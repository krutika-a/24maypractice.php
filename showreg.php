<?php
error_reporting(0);
require_once("dbcon.php");
$show="SELECT * FROM Reg";
$res=mysqli_query($con,$show);
?>
<?php
while($reg= mysqli_fetch_assoc($res)){?>

<tr>
<td><?php echo $reg["name"];?></td>
<td><?php echo $reg["email"];?></td>
<td><?php echo $reg["password"];?></td>
<td>city-<select name="city">
<option value="Nagpur" <?php if(option=="Nagpur") echo 'selected=="selected"'?> >Nagpur</option>
<option value="Mumbai" <?php if(option=="Mumbai") echo 'selected=="selected"'?> >Mumbai</option>
</select></td>
<td><a href="editreg.phpid?<?php echo$reg['id']?>">Edit</a>||
<td><a href="deletereg.phpid=?<?php echo $reg['id']?>">Delete</a></td>
</tr>


<?php } ?>