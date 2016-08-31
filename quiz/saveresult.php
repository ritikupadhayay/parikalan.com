<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	  
	<title>Parikalan Quiz</title>   
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
 
<body>

	<div id="page-wrap">

		<h1>Xenium The DEPARTMENT OF COMPUTER SCIENCE PRESNTS  QUIZ  </h1>       
		<?php
		if(isset($_POST['submit'])) 
{
	
// define variables and set to empty values
$answer1=$answer2=$answer3=$answer4=$answer5=$answer6=$answer7=$answer8=$answer9=$answer10='';

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
			$answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];
            $answer9 = $_POST['question-9-answers'];
            $answer10 =$_POST['question-10-answers'];
			
			session_start(); 
			
			 
            $rollno1= $_SESSION["rollno"];
			$class=$_SESSION["class"];
			$mobile=$_SESSION["mobile"];
			$email=$_SESSION["email"];
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

 $sql= "INSERT INTO result1(rollno,ans1,ans2,ans3,ans4,ans5,ans6,ans7,ans8,ans9,ans10,correct)VALUES('$rollno1','$answer1','$answer2','$answer3','$answer4','$answer5','$answer6','$answer7','$answer8','$answer9','$answer10',0)";


if ($conn->query($sql) === TRUE){
	
     
	echo "<b>Thanks You.You quiz is successfully Submitted </b>";
		 
} else {
    echo "<b>Sorry You are already submitted this quiz. Please Try Next week </b>";
}

$conn->close();


}   ?>
			 

	
		</div>		  
	
			  


</body>
</html>