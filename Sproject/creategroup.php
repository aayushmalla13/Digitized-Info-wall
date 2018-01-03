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
						
						<form action="signin.php" method="post">
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

							<input type="submit" name="" value="Sign In">

						</form>
								
					</div>
				</div>
			</div>
		</div>
		
	</body>
</html>
