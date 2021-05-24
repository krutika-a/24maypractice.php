<?php
error_reporting(0);
require_once("dbcon.php");
?>
<?php
echo $hobbies = implode(",",$_POST["hobbies"]);


echo $query= "INSERT INTO Newreg_form(fullname,gender,email,password,city,address,pincode,hobbies,mob,photo) 
values('".$_POST["fullname"]."','".$_POST["gender"]."','".$_POST["email"]."','".$_POST["password"]."',
'".$_POST["city"]."','".$_POST["address"]."','".$_POST["pincode"]."','".$hobbies."','".$_POST["mob"]."','".$_FILES["photo"]["name"]."')";
$res = mysqli_query($con,$query);
if (!$res) {echo "data not inserted";}else { echo "Data inserted";}



if(move_uploaded_file($_FILES["photo"]["tmp_name"],
"./photos/".$_FILES["photo"]["name"]))
{
   echo "uploaded";
}else
{
   echo "not up";
}

?>
<form  action="" method="post" enctype="multipart/form-data">
<fieldset>

Name-<input type="text" name="fullname" value=""><br><br>

Gender-<input type="radio" name= "gender" value="male">Male
    <input type="radio" name="gender" value="female">Female<br><br>

Email-id-<input type="email" name="email" value=""> <br><br>

Password-<input type="password" name="password" value=""><br><br>

Mob <input type="text" name="mob" value=""><br><br>

City-<select name="city">
<option value="Nagpur" <?php if(options=="Nagpur") echo'selected="selected"';?> > Nagpur</option>
<option value="Mumbai" <?php if(options=="Mumbai") echo 'selctected="selected"'; ?> > Mumbai</option>
<option value="Pune" <?php if (options=="pune") echo'selected="selected"';?> > Pune </option>
</select><br><br>

Address-<input type="text" name="address" value=""><br><br>

pincode-<input type="text" name="pincode" value=""><br><br>


Hobiess:cricket<input id="check_1" type="checkbox"  name="hobbies[]" value="cricket"/> 
painting<input id="check_2"  type="checkbox" name="hobbies[]" value="painting" />
Dancing<input id="check_3"  type="checkbox"  name="hobbies[]" value="dancing"/>
Singing<inputid="check_4"  type="checkbox"  name="hobbies[]"  value="singing"/><br><br>


File: <input type="file"  name="photo">
                

<button name="submit" >submit</button>
</fieldset>
</form>
