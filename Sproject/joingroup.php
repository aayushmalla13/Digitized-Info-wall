<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Create Your Group</title>
		
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
							<input id="username" type="text" name="" required="" placeholder="Full Name">
							
							<label for="email">Email</label>
							<input id="email" type="email" name="email" required placeholder="Your Email address">
							<label for="groupcode">Group Code</label>
							<input id="groupcode" type="text" name="" required placeholder="Enter Group"> 
							<label for="date">Date OF Birth:</label>
								<select name=month>
									<option>january</option>
									<option>February</option>
									<option>March</option>
									<option>April</option>
									<option>May</option>
									<option>June</option>
									<option>July</option>
									<option>August</option>
									<option>September</option>
									<option>October</option>
									<option>November</option>
									<option>December</option>
								</select>
								<select name="day">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
									<option>11</option>
									<option>12</option>
									<option>13</option>
									<option>14</option>
									<option>15</option>
									<option>16</option>
									<option>17</option>
									<option>18</option>
									<option>19</option>
									<option>20</option>
									<option>21</option>
									<option>22</option>
									<option>23</option>
									<option>24</option>
									<option>25</option>
									<option>26</option>
									<option>27</option>
									<option>28</option>
									<option>29</option>
									<option>30</option>
									<option>31</option>


								</select>
								<select name="year">
									<option>1980</option>
									<option>1981</option>
									<option>1982</option>
									<option>1983</option>
									<option>1984</option>
									<option>1985</option>
									<option>1986</option>
									<option>1987</option>
									<option>1988</option>
									<option>1989</option>
									<option>1990</option>
									<option>1991</option>
									<option>1992</option>
									<option>1993</option>
									<option>1994</option>
									<option>1995</option>
									<option>1996</option>
									<option>1997</option>
									<option>1998</option>
									<option>1999</option>
									<option>2000</option>
								</select>
							<hr>
							<p>Joining The Group as:</p>
							<label id="te" for="Teacher">Teacher:</label>
							<input id="Teacher"type="radio" name="stchoice" required value="T">
							<label id="st" for="Student">Student:</label>
							<input id="Student"type="radio" name="stchoice" required value="S">
							<hr>
							<div><label>I agree to the terms and conditions: <input id="check" type="checkbox" name="agree" required value="Yes"></label></div>

							<input type="submit" name="" value="Sign In">

						</form>
					</div>
				</div>
			</div>
		</div>
		
	</body>
</html>
