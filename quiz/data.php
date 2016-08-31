<!DOCTYPE html>
<html>
<title>Parikalan Quiz</title> 
<form method="POST" name="data.php" id="result1" name="result1">
Type Roll No for Result :<input type="text" name="result">
<input type="submit" name="submit">
</form>

<?php

 

$servername = "localhost";
$username = "";
$password = "";
$dbname = "quiz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['submit'])) {
$rollno='';
$rollno=$_POST['rollno'];
$sql = "select rollno,ans1,ans2,ans3,ans4,ans5,ans6,ans7,ans8,ans9,ans10 FROM result where roll=$rollno";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
		 $rollno=$row["rollno"];
		 $ans1=$row["ans1"];
		 $ans2=$row["ans2"];
		 $ans3=$row["ans3"];
		 $ans4=$row["ans4"];
		 $ans5=$row["ans5"];
		 $ans6=$row["ans6"];
		 $ans7=$row["ans7"];
		 $ans8=$row["ans8"];
		 $ans9=$row["ans9"];
		 $ans10=$row["ans10"];
		  
		  
		  
	 
		  
		  
        echo  ' <input type="hidden" name="id" value="' . $rollno . '"/>
 <input type=submit  value= "'. $ans1.'
 
 Selling Price: '.$ans2.''" 
 Style=" BORDER-RIGHT:#FA5858 3px solid #FA5858;
 BORDER-TOP:#FA5858    3px solid #FA5858;
 BORDER-left:#FA5858    3px solid #FA5858;
 BORDER-bottom:#FA5858  3px solid #FA5858;   
 FONT-SIZE: 12pt;
position: absolute;
background-color:#81F7F3;
left:620px;
height:300px;
width:400px;"><br><br><br><br><br></a> ';


		 
		 echo  '  <input type="hidden" name="id" value="' . $pid . '"/>
 <input type=submit  value= "Post Description: '. $pdesc.' "   
 Style=" BORDER-RIGHT:#FA5858 3px solid #FA5858;
 BORDER-TOP:#FA5858    3px solid #FA5858;
 BORDER-left:#FA5858    3px solid #FA5858;
 BORDER-bottom:#FA5858  3px solid #FA5858;   
 FONT-SIZE: 12pt;
position: absolute;
background-color:#81F7F3;
left:250px;
top:410px;
height:150px;
width:770px;"><br><br><br><br><br></a> ';


echo  '  <input type="hidden" name="id" value=" ' . $pid . '"/>
 <input type=submit  value= "Seller Information "   
 Style=" BORDER-RIGHT:#FA5858 3px solid #FA5858;
 BORDER-TOP:#FA5858    3px solid #FA5858;
 BORDER-left:#FA5858    3px solid #FA5858;
 BORDER-bottom:#FA5858  3px solid #FA5858;   
 FONT-SIZE: 20pt;
position: absolute;
background-color:#FFFF00;
left:250px;
top:570px;
height:50px;
width:770px;"><br><br><br><br><br></a> ';

echo  '  <input type="hidden" name="id" value=" ' . $pid . '"/>
 <input type=submit  value= "Saller Name: '. $sname.'
 
 Seller Email id: '.$semail.'
 
 Seller Mobile No. : '.$smobile.'
 
 Seller Address:  '.$saddr.' "   
 Style=" BORDER-RIGHT:#FA5858 3px solid #FA5858;
 BORDER-TOP:#FA5858    3px solid #FA5858;
 BORDER-left:#FA5858    3px solid #FA5858;
 BORDER-bottom:#FA5858  3px solid #FA5858;   
 FONT-SIZE: 12pt;
position: absolute;
background-color:#81F7F3;
left:250px;
top:630px;
height:200px;
width:770px;"><br><br><br><br><br></a> ';

		 
     }
	 
	 
} else {
     echo "<br><b>No Book Ad Post<b><br>";
}

$conn->close();
}
?>  

 <?php
require 'include1.php';
require 'background.js';
?>
</BODY>
</html>