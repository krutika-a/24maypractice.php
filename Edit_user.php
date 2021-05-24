<?php

error_reporting(0);

require_once("dbcon.php");

if(isset($_POST["submit"]))
{

$hobbies = implode(",",$_POST["hobbies"]);

echo $update= "UPDATE Newreg_form SET
`fullname`= '".$_POST['fullname']."',
`gender`= '".$_POST['gender']."',
`email` = '".$_POST['email']."',
`password` = '".$_POST['password']."',
`address` = '".$_POST['address']."',
`pincode`= '".$_POST['pincode']."',
`city` = '".$_POST['city']."',
`hobbies` = '".$hobbies."',
`mob` = '".$_POST["mob"]."'

WHERE id = '".$_GET['id']."'";

$res =  mysqli_query($con,$update);
if($res)
{
  echo  "Data updated successfully";
}
else
{
  echo "Data not updated";
}

}
 $query = "SELECT * FROM Newreg_form

WHERE id = '".$_GET["id"]."'";

$res = mysqli_query ($con,$query);

$user = mysqli_fetch_assoc ($res);
?>

<html>
<form action="" method="post">
Fullname- <input type = "text" name="fullname" value="<?php echo $user["fullname"];?>"/>

Gender-<input type="radio" name= "gender" value="<?php echo $user["male"]?>"/>Male
    <input type="radio" name="gender" value="<?php echo $user["female"]?>"/>Female<br><br>

Email-id-<input type ="text" name="email" value="<?php echo $user["email"]?>"/>

Password=<input type ="text name="password value="<?php echo $user["password"]?>"/>

Address-<input type ="text" name="address" value= "<?php echo $user["address"]?>"/>

Pincode-<input type ="text" name="pincode" value="<?php echo $user["pincode"]?>"/>

City-<select name="city">
<option value="Nagpur" <?php if(options=="Nagpur") echo'selected="selected"';?> > Nagpur</option>
<option value="Mumbai" <?php if(options=="Mumbai") echo 'selctected="selcted"'; ?> > Mumbai</option>
<option value="Pune" <?php if (options=="pune") echo'selected="selected"';?> > Pune </option>
</select><br><br>

Hobiess:cricket<input id="check_1" type="checkbox"  name="hobbies[]" value="cricket"/> 
painting<input id="check_2"  type="checkbox" name="hobbies[]" value="painting" />
Dancing<input id="check_3"  type="checkbox"  name="hobbies[]" value="dancing"/>
Singing<inputid="check_4"  type="checkbox"  name="hobbies[]"  value="singing"/><br><br>

Mob- <input type ="text" name="mob" value="<?php echo $user["mob"]?>"/>
Submit=<input type ="submit" name="submit" value="submit">
</form>
</html>
