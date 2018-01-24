
    <html>
    <body>
        <?php
//echo 
$user = "root";
$pass = '';
$conn = mysqli_connect('localhost', $user, $pass);
$sql  = "CREATE DATABASE IF NOT EXISTS user_registration";
if (mysqli_query($conn, $sql)) {
                //  echo "Database created successfully";
                $db         = "user_registration";
                $regNo      = mysql_real_escape_string($_POST["regNo"]);
                $fullName   = mysql_real_escape_string($_POST["fullName"]);
                $email      = mysql_real_escape_string($_POST["email"]);
                $password   = mysql_real_escape_string($_POST["password"]);
                $repassword = mysql_real_escape_string($_POST["repassword"]);
                $submit     = $_POST["submit"];
                $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
	
                $sql = "CREATE TABLE  IF NOT EXISTS registration(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    regNo VARCHAR(30) NOT NULL,
    fullName VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(30) NOT NULL,
    verifycode VARCHAR(30) NOT NULL,
    verified BOOLEAN NOT NULL
    )";
                if ($db->query($sql) === TRUE) {
                                //  echo "Table created successfully";
                } else
                                echo "Error: " . $sql . "<br>" . $db->error;
                //mail from digitizedinfo
                ///****************************//        
                $code    = mt_rand(100000, 999999);
                $link    = "http://localhost/pro/Sproject/verify.php?email=" . $email . "&code=" . $code . "&submit=Verify";
                $message = 'Thanks for signing up with digitized info wall. Your verification code is :' . $code . "Click this link to verify" . $link;
                if (mail($_POST["email"], 'Registration Successful:', $message, 'From: digitizedinfowall@gmail.com')) { //If mail succesfuully sent
                                $sql = "INSERT INTO registration (regNo, fullName, email, password,verifycode , verified)
    VALUES ('$regNo', '$fullName', '$email', '$password', '$code', 'FALSE')";
                                if ($db->query($sql) === TRUE) {
                                                //<p>Group Was Created Succesfully</p>
                                } else {
                                                echo "Error: " . $sql . "<br>" . $db->error;
                                }
                                $db->close();
                                echo 'Your account has been created succesfully. A verification code has been sent to your email ' . $email . " . Please verify your account";
                                echo '<a href="http://localhost/pro/Sproject/verify.php"> Click here to verify your account</a>';
                } //*************************************************////
                else
                                echo "Mail not sent. Check if the internet connection";
} else
                echo "Failed to create database";
?>
       </body>
    </html>