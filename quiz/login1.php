
<!DOCTYPE HTML> 
<html>
<head>
</head>
<body> 

<h2 ID="2" STYLE="background-color:#81F7F3;width:300px;HEIGHT:50PX;BORDER:2PX SOLID BLACK;PADDING:30PX;">Enter Roll No and Password For QUIZ.</h2>
<form method="post" style="background-color:#81F7F3;width:300px;HEIGHT:100PX;BORDER:2PX SOLID BLACK;PADDING:30PX;"> 
   
   Roll No: <input type="text" name="rollno">
   <br><br>
   Password: <input type="password" name="lpass">
   <br><br>
   
   <input type="submit" name="loginn" value="Login">
</form>



<?php

if(isset($_POST['loginn'])) 
{
	
// define variables and set to empty values
$rollno = $name=$lpass =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $rollno =  ($_POST["rollno"]);
   $lpass =  ($_POST["lpass"]);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

$servername = "mysql.1freehosting.com";
$username = "";//change during to security reason 
$password = "";
$dbname = "u563143194_quiz";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "select rollno, name, class,email, mobile FROM singup1 where rollno='$rollno' and pass='$lpass'";
$result = $conn->query($sql);




if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
		 
        $name=$row["name"];
		$class=$row["class"];
		$email=$row["email"];
		$mobile=$row["mobile"];
		
		 echo "<br>You are log-in... ";
		 echo '<a href="index1.php"><input type="button" value="Fill QUIZ"></a>';
		
		 session_start();
		 $_SESSION["rollno"] = "$rollno";
		 $_SESSION["name1"]= "$name";
		 $_SESSION["class"]= "$class";
		 $_SESSION["email"]= "$email";
		 $_SESSION["mobile"]= "$mobile";
		 
     }
	  
	  $s="update singup set chk=1 where rollno='$rollno'";
         $result = $conn->query($s);
	

 
// Set session variables



// to change a session variable, just overwrite it 
$_SESSION["chk"] = 1;

	 
	 
} else {
     echo ("<br><b><font color=\"red\"><div id='1'>Roll No or password does not exit.... Please login again....</font>");
	echo  "Enter a Valid Roll No and Password";
}

$conn->close();

}
?>

<script>

window.onunload = function(){
	
  window.opener.location.reload(true);
};
  
    
</script>


</body>
</html>




