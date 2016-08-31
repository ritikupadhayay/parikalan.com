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
		
		$class=$mid=$pass=$rollno="";
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
 



		     $mid=$_POST['mid'];
			 $rollno=$_POST['rollno'];
			 $pass=$_POST['mpass'];
			 if($mid==='')
			 {
				 echo 'Please Enter the Student ID';
			 }
			 elseif($pass==='')
			 {
				 echo 'Please Enter the Password ';
			 }
			 else
			 {
		       $sql = "select mpass FROM singup where mid='$mid'";
			   $result =$conn->query($sql);
			   
                ($conn->query($sql) === TRUE)
			  {   
		          
				  if($result===$pass)
				{
					echo "Password is incorrect";
		    
			 }
			  else
			      {
					  $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5 == "A") { $totalCorrect++; }
			
			echo  "<br/> <br/><br/><br/><br/><h2> Result: $totalCorrect / 5 correct</h2>"; 
			$sql="insert INTO result (id,rollno,marks) values($mid,'$rollno','$totalCorrect')";
			 
             if ($conn->query($sql) === TRUE)
				 {		 
				  echo 'Thanks You';
			      }
			  else
			  {
				  echo 'Error';
			  }
					   
				  }
	         
			  }
             else
             {
               echo "  MID is not Correct ";

                 
			  }
			 }
			 $conn->close();
        ?>
			 

	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
		</div>		  
	
			  
	 

</body>
</html>