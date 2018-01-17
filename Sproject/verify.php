<?php

if(isset($_POST['submit']))
{$email =  $_POST['email'];
$code = $_POST['code'];
$user="root";
$pass='';
$db=new mysqli('localhost', $user, $pass, 'user_registration') or die("Unable to connect");
$sql = "SELECT email, verifycode, verified FROM registration where email = '$email' and verifycode = '$code'";
 if ($res = mysqli_query($db, $sql)) 
	{
	
	$val = mysqli_fetch_array($res);
	 //echo $val['email'];
	if ($val['email'] === $email and $val['verifycode'] === $code)
	{
		echo "xa";
		$sql = "UPDATE  registration set  verified = '1' where email = '$email' and verifycode = '$code'";

	if (mysqli_query($db, $sql)) 
	{
	
		echo "Verify vayo";
	}
 else
	 echo "Vayena";
		
		
		
	}
	 else
		 echo "xain";
	}
 else
	 echo "Vayena";

 /*
*/
}
?>

<!DOCTYPE html>
<html>
<body>


	
	
	
	<form action="" method="post">

E-mail: <input type="text" name="email"><br>
Code: <input type="text" name="code"><br>	
<input type="submit" name="submit" value="Verify">
</form>
	
	
	


</body>
</html>