<?php
//echo "clicked";
//Requires session to open join r create group
if(isset($_POST['submit']))
{
	$user="root";
$pass='';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$group_code = $_POST['group_code'];
	//$name = $_POST['']; //As student or teacher

	
	$db='user_registration';
$conn = mysqli_connect('localhost', $user, $pass, $db);
$sql = "SELECT GName, group_code FROM groups WHERE group_code = '$group_code' ";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
	
{
	
	   $row = $result->fetch_assoc() ;//As group_code is unique
        $group_insert =  $row['GName']; //Extract associated groupname
	
	
	
	
	
	///Check if email exists and is verified
	$db='user_registration';
$conn = mysqli_connect('localhost', $user, $pass, $db);
//$//db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
$sql = "SELECT Email, verified FROM registration WHERE Email = '$email' and verified = '1'";

$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) { //If email exists and is verified insert data into particular group
		
	//Inserting into particular group based on group code
$db='CreateGroup';
$db=new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
$sql = "INSERT INTO $group_insert  (Name, Email, Role)
VALUES ('$name', '$email', '0')";
//echo $sql;
if ($db->query($sql) === TRUE) {
    //
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
//////////		
		
		
		
		
	}
	
	else {
    echo "Email is either not verified or you'vent created account yet. To crete your account go here";
	 echo '<a href="http://localhost/pro/Sproject/verify.php"> Click here to verify your account</a>';
}
	
	
	
	
	
	
	////
	
	
	
	
	
	
}
	else
		echo "Group Code not valid. Please Contact your group Creator";
	
	
	
	

	//Groups vanney table bata groupcode linxu..ani tyo group code ko corresponding groupname wala table bata find the email .Then tyo email ko lagi registration bata password khojney
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

}

?>



<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Join Group</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/joingroup.css">
	
	<link href="https://fonts.googleapis.com/css?family=Rajdhani:400,700" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Gruppo|Orbitron:400,700" rel="stylesheet">  
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-12">
					<div><h1>DIGITIZED INFO WALL</h1></div>
				
					<div class="loginBox">
						<img src="imgs/joing.jpeg" class="user">
						<h2> Join Your Group</h2>
						<form method="post" action="">
							<label for="username">Your Name</label>
							<input id="username" type="text" name="name" required="" placeholder="Full Name">
							
							<label for="email">Email</label>
							<input id="email" type="email" name="email" required placeholder="Your Email address">
							<label for="groupcode">Group Code</label>
							<input id="groupcode" type="text" name="group_code" required placeholder="Enter Group"> 
							
							<p>Joining The Group as:</p>
							<label id="te" for="Teacher">Teacher:</label>
							<input id="Teacher"type="radio" name="stchoice">
							<label id="st" for="Student">Student:</label>
							<input id="Student"type="radio" name="stchoice" >
							<hr>
							<div><label>I agree to the terms and conditions: <input id="check" type="checkbox" name="agree"></label></div>

							<input type="submit" name="submit" value="Sign In">

						</form>
					</div>
				</div>
			</div>
		</div>
		
	</body>
</html>
