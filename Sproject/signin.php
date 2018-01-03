
<html>
<body>
	<?php
	echo 
$user="root";
$pass='';



	$conn = mysqli_connect('localhost', $user, $pass);
	$sql = "CREATE DATABASE IF NOT EXISTS user_registration";
	
	if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
		
	$db = "user_registration";

	
	$regNo = mysql_real_escape_string($_POST["regNo"]);
$fullName =  mysql_real_escape_string($_POST["fullName"]);
$email =  mysql_real_escape_string($_POST["email"]);

$password =  mysql_real_escape_string($_POST["password"]);
$repassword = mysql_real_escape_string($_POST["repassword"]);
$submit = $_POST["submit"];	
	
		//mail from digitizedinfo
mail($_POST["email"], 'Registration Successful', 'Thanks for signing up with digitized info wall','From: digitizedinfowall@gmail.com');
		
$db=new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
	$sql = "CREATE TABLE  IF NOT EXISTS registration(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
regNo VARCHAR(30) NOT NULL,
fullName VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
password VARCHAR(30) NOT NULL
)";
		if ($db->query($sql) === TRUE) {
    echo "Table created successfully";
}
		else
			  echo "Error: " . $sql . "<br>" . $db->error;
			
$sql = "INSERT INTO registration (regNo, fullName, email, password)
VALUES ('$regNo', '$fullName', '$email', '$password')";
//echo $sql;
if ($db->query($sql) === TRUE) {
    //<p>Group Was Created Succesfully</p>
}
		else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
	}
		else
			echo "Failed to create database";
	
	
	
$db->close();

?>
	</body>
</html>