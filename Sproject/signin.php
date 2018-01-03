
<html>
<body>
	<?php
$user="root";
$pass='';
$db='CreateGroup';
$GName = $_POST["GName"];
$DName = $_POST["DName"];
$YName = $_POST["YName"];
$Email = $_POST["Email"];
$Year = $_POST["Year"];
$Semester = $_POST["Semester"];
$chck = $_POST["chck"];	
$Batch = $_POST["Batch"];
			
	
	
$db=new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
$sql = "INSERT INTO Cgroup (GName, DName, YName, Email, Batch, Year, Semester, chck)
VALUES ('$GName', '$DName', '$YName', '$Email', '$Batch', '$Year','$Semester', '$chck')";
//echo $sql;
if ($db->query($sql) === TRUE) {
    <p>Group Was Created Succesfully</p>
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();
//echo 'Hello';
?>
	</body>
</html>