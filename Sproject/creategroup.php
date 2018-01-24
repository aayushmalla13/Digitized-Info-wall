<?php
if(isset($_POST['submit']))
{
$user="root";
$pass='';
$db='CreateGroup';
$GName = $_POST["GName"];
$DName = $_POST["DName"];
$YName = $_POST["YName"];
$Email = $_POST["Email"];
$Year = $_POST["Year"];
$Semester = $_POST["Semester"];

$Batch = $_POST["Batch"];
			
$groupname = $GName.$Batch;
//Check if email exists and is verified

$db='user_registration';
$conn = mysqli_connect('localhost', $user, $pass, $db);
//$//db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
$sql = "SELECT Email, verified FROM registration WHERE Email = '$Email' and verified = '1'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { //If email exists and is verified
  //If raixa vaney
	
	//Groups ko info rakhna table banauney
	$db ='user_registration';
	$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
	     $sql = "CREATE TABLE  IF NOT EXISTS Groups(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    GName VARCHAR(30) NOT NULL,
    group_code VARCHAR(30) NOT NULL,
	batch VARCHAR(30) NOT NULL,
	sem VARCHAR(30) NOT NULL,
	creator  VARCHAR(30) NOT NULL
    )";
	if ($db->query($sql) === TRUE) {
                                //  echo "Table created successfully";
                } else
                                echo "Error: " . $sql . "<br>" . $db->error;
	
/////
	
	///////Send Group Code to email
	//mail from digitizedinfo
                ///****************************//        
                $code    = mt_rand(100000, 999999); //Generate random group code
	
	
	
	
	
	
$code = $code.$groupname; 
	
	


	
	
	
	///
	
                $message = 'Thanks for creating group in digitized info wall. Your group code for '. $groupname.' is :' . $code ;
                if (mail($Email, 'Registration Successful:', $message, 'From: digitizedinfowall@gmail.com')) 
	
				{	///////
	
	//////Insert Group info on table
	
$db='user_registration';
$db=new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
$sql = "INSERT INTO Groups  (GName, group_code, batch, sem, creator)
VALUES ('$groupname','$code','$Batch','$Semester', '$Email')";
//echo $sql;
if ($db->query($sql) === TRUE) {
    //
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
	
	
	
	////
	
	
  //Creting table based on group name
	//Role : 1 for teacher, 2 for student
	$db ='CreateGroup';
	$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
                $sql = "CREATE TABLE  IF NOT EXISTS $groupname(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    Name VARCHAR(30) NOT NULL,
    Email VARCHAR(30) NOT NULL,
	Role BOOLEAN NOT NULL
    )";
                if ($db->query($sql) === TRUE) {
                                //  echo "Table created successfully";
                } else
                                echo "Error: " . $sql . "<br>" . $db->error;
/////
	

$db='CreateGroup';
$db=new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
$sql = "INSERT INTO $groupname  (Name, Email, Role)
VALUES ('$YName', '$Email', '0')";
//echo $sql;
if ($db->query($sql) === TRUE) {
    //
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
	$db->close();	
    }
	else
		echo "Group Creation failed . Please try agaian";
}
	
 else {
    echo "Email is either not verified or you'vent created account yet. To crete your account go here";
	 echo '<a href="http://localhost/pro/Sproject/verify.php"> Click here to verify your account</a>';
}






/////






//echo 'Hello';

}
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Create Your Group</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="font-awesome.css">
	<link rel="stylesheet" href="css/creategroup.css">
	
	<link href="https://fonts.googleapis.com/css?family=Rajdhani:400,700" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Gruppo|Orbitron:400,700" rel="stylesheet">  
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-12">
					<div><h1>DIGITIZED INFO WALL</h1></div>
					<img src="unnamed.png" class="user">

					<div class="loginBox">
						<img src="imgs/cd.jpg" class="user">
						<h2> Create Your Group</h2>
						
						<form action="" method="post">
							<label for="groupname">Group Name</label>
							<input id="groupname" type="text" name="GName" placeholder="Enter Group Name">
							<label for="departmentname">Department Name</label>
							<input id="departmentname" type="text" name="DName" placeholder="Enter Department Name">
							<label for="username">Your Name</label>
							<input id="username" type="text" name="YName" placeholder="Full Name">
							<label for="email">Email</label>
							<input id="email" type="email" name="Email" required placeholder="Your Email address">
							<label for="number">Batch: </label>
							<input id="number" name="Batch" min="2012" type="number">
							<label for="number" min="1" max="4">Year </label>
							<input id="number" name="Year" min="1" type="number" value="1">
							<label for="number">Semester: </label>
							<input id="number" name="Semester" min="1" max="2" type="number" value="1">
							<hr>
							<div><label>I agree to the terms and conditions: <input id="check" type="checkbox" name="chck" value="Yes"></label></div>

							<input type="submit" name="submit" value="Sign In">

						</form>
								
					</div>
				</div>
			</div>
		</div>
		
	</body>
</html>
