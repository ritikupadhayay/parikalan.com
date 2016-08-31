<!DOCTYPE HTML> 
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 


<form method="POST" >
<h2>SING-UP Form</h2>
<p><span class="error">* required field.</span></p>
   Name: <input type="text" name="mname" value="<?php  ?>">
   <br><br>
   Roll No: <input type="text" name="rollno" value="<?php  ?>">
   <br><br>
 
   E-mail: <input type="email" name="email" value="<?php  ?>">
   <br><br>
   Password: <input type="password" name="mpass" value="<?php  ?>">
   <br><br>
   Re-Password: <input type="password" name="mre_pass" value="<?php  ?>">
   <br><br>
   Mobile: <input type="text" name="mmobile" value="<?php  ?>">
   <br><br>
   
   <input type="submit" name="submit" value="Submit"  > 
</form>
 



<?php


if(isset($_POST['submit'])) 
{ 
 
	
	// define variables and set to empty values
$mnameErr = $emailErr = $mpassErr =$mre_passErr = $rollnoErr=$mmobileErr = "";
$mid = $mname = $email = $mpass = $mre_pass =$rollno= $mmobile = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  
	
   if (empty($_POST["mname"])) {
     $mnameErr = "Name is required";
   } 
   else {
     $mname = $_POST["mname"];
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$mname)) {
       $mnameErr = "Only letters and white space allowed"; 
     }
   }
   if (empty($_POST["rollno"])) {
     $rollnoErr = "Roll No is required";
   } 
   else
   {
	   $rollno=$_POST["rollno"];
   }
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email =  $_POST["email"];
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }
     
   if (empty($_POST["mpass"])) {
     $mpass = "";
   } else {
     $mpass =  $_POST["mpass"];
     
     }
   
   
   if (empty($_POST["mre_pass"])) {
     $mpass = "";
   } else {
     $mre_pass =  $_POST["mre_pass"];
     }
   

   if (empty($_POST["mmobile"])) {
     $mmobile = "";
   } else {
     $mmobile =  $_POST["mmobile"];
     }
   
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}



if($mpass==$mre_pass)
{
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}


$sql = "select mid FROM singup where email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
 {
    echo "Already exist this Email id <br>"; 
	echo "Please Login OR Use a new Email id<br>"; 
	 
 }
else
{


$sql = "INSERT INTO singup (mname, rollno,email, mpass, mmobile) VALUES('$mname','$rollno', '$email','$mpass', $mmobile)";

if ($conn->query($sql) === TRUE){
	
    echo "<br><br>$mname Your Account created successfully";
	echo "<br>Please Login<br>";
		 echo  "<br /><a href=login.php><input type=button value=Login></a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
}
}
else
{
	
	echo ("<br><font color=\"red\">Password Error Please Re-Enter Password</font>");
}

}


?>


</body>
</html>