
<!DOCTYPE HTML> 
<html>
<head>
</head>
<body> 

<h2>Please Log-in First for Post ads</h2>
<form method="post" > 
   
   E-mail: <input type="text" name="lemail">
   <br><br>
   Password: <input type="password" name="lpass">
   <br><br>
   
   <input type="submit" name="loginn" value="Login">
</form>



<?php

if(isset($_POST['loginn'])) 
{
	
// define variables and set to empty values
$lemail = $lpass =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $lemail =  ($_POST["lemail"]);
   $lpass =  ($_POST["lpass"]);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

$servername = "localhost";
$username = "";//change during to security reason 
$password = "";
$dbname = "quiz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "select mid, mname,rollno, email, mmobile FROM singup where email='$lemail' and mpass='$lpass'";
$result = $conn->query($sql);




if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
		 
        
		 echo "<br>You are log-in... ";
		 echo "<input type='button' value='HOME' href='http://localhost/quiz/index.php'>";
		
		 session_start();
		 $_SESSION["email"] = "$lemail";
		 
     }
	  
	  $s="update singup set chk=1 where email='$lemail'";
         $result = $conn->query($s);
	

 
// Set session variables



// to change a session variable, just overwrite it 
$_SESSION["chk"] = 1;

	 
	 
} else {
     echo ("<br><b><font color=\"red\">Email id or pass does not exit.... Please login again....</font>");
	echo  "Enter a Valid Email id and Password";
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




