<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <?php session_start();  
 
 ?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Parikalan Quiz </title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<div id="FIRST" Style="BORDER:3px solid #FA5858;
position: absolute;
background-color:#FFFF00;
left:250px;
top:30px;
height:1350px;
width:770px;">  
	<div id="page-wrap">
 
		<DIV ID="HEADER" STYLE="TOP:5PX;POSITION:ABSOLUTE;BACKGROUND-COLOR:WHITE;LEFT:70PX;
		 WIDTH:635PX;HEIGHT:50PX;
		"><h1>&nbsp <B>XENIUM THE COMPUTER SCIENCE SOCIETY PRESNTS QUIZ 1</B></h1></DIV>
		
		
		 <BR />  
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <b>Please Fill All Given Entry:</b>
		<BR /> <BR /> 	<hr />
		<form action="saveresult.php" method="post" id="quiz"> <div id="1" style="background-color:#E6F0F0;width:590px;height:200px;border:2px solid #F5A9F2;top:10px; position:absolute;TOP:80PX;LEFT:75PX;PADDING:20PX;">
		<!--<BR /><BR /> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <LI> <B>Name </B>   / &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   </LI> &nbsp &nbsp &nbsp --->
       &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <LI> <B> College Roll No. <?php

		 $rollno1= $_SESSION["rollno"];
		 echo "$rollno1";
		 ?>
 &nbsp </B> <br><br> <LI> <B>Class : <?php  $class=$_SESSION["class"]; echo "$class"; ?> &nbsp &nbsp &nbsp &nbsp &nbsp <B> </li>
 &nbsp </B>  <LI> <B> Mobile: <?php   $mobile=$_SESSION["mobile"]; echo "$mobile"; ?> &nbsp &nbsp &nbsp &nbsp &nbsp <B> </li>
 &nbsp </B>  <LI> <B> Email : <?php   $email=$_SESSION["email"]; echo "$email"; ?> &nbsp &nbsp &nbsp &nbsp &nbsp <B> </li><BR /><BR />
		 <BR /> 
          		</div> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> 
		 <DIV id="a" style="background-color:#FAFAFA;width:400px;height:10px;padding:10px;BORDER:2px solid #CEF6F5;" ><P>Fill answers in given box. :</P></DIV>
            
			<ol>
            <BR/><BR/><br> 
                <li>
                
                    <h3>CSS Stands for...</h3>
                    
                    <div >
                        <input type="TEXT" name="question-1-answers" id="question-1-answers-A" STYLE="WIDTH:500PX; HEIGHT:30PX;" />
                        
                    </div>
                    
                     
                </li>
                
                <li>
                
                    <h3>Internet Explorer 6 was released in...</h3>
                    
                    <div>
                        <input type="TEXT" name="question-2-answers" id="question-2-answers-A" STYLE="WIDTH:500PX; HEIGHT:30PX;" />
 
                    </div>
                    
                    
                
                </li>
                
                <li>
                
                    <h3>SEO Stand for...</h3>
                    
                    <div>
                         <input type="TEXT" name="question-3-answers" id="question-3-answers-A" STYLE="WIDTH:500PX; HEIGHT:30PX;" />
                         
                    </div>
                
                </li>
                
                <li>
                
                    <h3>A 404 Error...</h3>
                    
                    <div>
                         <input type="TEXT" name="question-4-answers" id="question-4-answers-A" STYLE="WIDTH:500PX; HEIGHT:30PX;" />
                         
                    </div>
                    
                     
                
                </li>
                
                <li>
                
                    <h3>PARIKALAN official website is</h3>
                    
                    <div>
                        <input type="TEXT" name="question-5-answers" id="question-5-answers-A" STYLE="WIDTH:500PX; HEIGHT:30PX;" />
                     
                    </div>
                    
                     
                </li>
				<LI>
				<h3>CSS Stands for...</h3>
                    
                    <div>
                        <input type="TEXT" name="question-6-answers" id="question-6-answers-A"  STYLE="WIDTH:500PX; HEIGHT:30PX;"/>
                        
                    </div>
                    
                     
                </li>
                
                <li>
                
                    <h3>Internet Explorer 6 was released in...</h3>
                    
                    <div>
                        <input type="TEXT" name="question-7-answers" id="question-7-answers-A" STYLE="WIDTH:500PX; HEIGHT:30PX;" />
 
                    </div>
                    
                    
                
                </li>
                
                <li>
                
                    <h3>SEO Stand for...</h3>
                    
                    <div>
                         <input type="TEXT" name="question-8-answers" id="question-8-answers-A" STYLE="WIDTH:500PX; HEIGHT:30PX;" />
                         
                    </div>
                
                </li>
                
                <li>
                
                    <h3>A 404 Error...</h3>
                    
                    <div>
					
                         <input type="TEXT" name="question-9-answers" id="question-9-answers-A" STYLE="WIDTH:500PX; HEIGHT:30PX;"  />
                         
                    </div>
                    
                     
                
                </li>
                
                <li>
                
                    <h3>PARIKALAN official website is</h3>
                    
                    <div>
                        <input type="TEXT" name="question-10-answers" id="question-10-answers-A"  STYLE="WIDTH:500PX; HEIGHT:30PX;" />
                     
                    </div>
                    
                     
                </li>
            
            </ol>
            
           <input type="submit" value="Submit Quiz" name="submit" STYLE="WIDTH:300PX; HEIGHT:30PX;background-color:RED; POSITION:ABSOLUTE;TOP:1300PX;LEFT:250PX;"  /></DIV> <br/><br/><br/><br/>
		
		</form>
	 
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	
<?php require 'background.js';  ?>
</body>
 
 </div>
</html>