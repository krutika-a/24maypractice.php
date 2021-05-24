<?php
require_once("dbcon.php"); 

$query = "SELECT * FROM Newreg_form";


$result= mysqli_query($con,$query);


?>

<?php
while( $register = mysqli_fetch_assoc($result)) {?>
<tr>
<td> <?php echo $register["fullname"];?></td>
<td> <?php echo $resgister["gender"];?></td>
<td> <?php echo $register["email"];?></td>
<td> <?php echo $register["password"];?></td>
<td> <?php echo $register["city"];?></td>
<td> <?php echo $register["pincode"];?></td>
<td> <?php echo $register["hobbies"];?></td>
<td> <?php echo $register["mob"];?></td>
</tr>
<td><a href= "Edit_user.php?id=<?php echo $register["id"]; ?>">Edit||
<a href= "Delete_user.php?id=<?php echo $register["id"]; ?>">Delete</td>
<?php }?>
