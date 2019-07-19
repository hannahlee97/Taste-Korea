<?php
	session_start();
?>
<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>TASTE KOREA</title>
	<link href="style.css" rel="stylesheet">
	<script  type="text/javascript" lang="javascript">
	
	function $(id){var element = document.getElementById(id);if( element == null ) alert( 'Programmer error: ' + id + ' does not exist.' );return element;}

	
	 function validate2(){
	 
	         var name = document.getElementById('myName').value;
        var nameRegex = /^[a-zA-Z]+$/;		 
	    
		 if (!nameRegex.test(name))
		   {if(name=="")
				{return $('error1').innerHTML="";} 
		   else {$('error1').innerHTML="Please only enter alphabetic characters"; }}
		   else {return $('error1').innerHTML="" }}
		   
	  
     function validate(){
		   
		var email = document.getElementById('myEmail').value;
        var emailRegex =/^[a-z0-9._-]+@[a-z0-9.]+\.[a-z]{2,}$/i; //starts with letter a-z or 0-9 & allows '.', '_', and '-'; must have @; domain has letters a-z or 0-9; TLD has . and any a-z, at least 2 chars; case insensitive.  
        if (!emailRegex.test(email))
		{if (email== ""){
		return $('error3').innerHTML=""; }
		else{
		return $('error3').innerHTML="Enter proper email"; }}
		   else {return $('error3').innerHTML=""; }} 
		
	function validate1(){	
	
        var pass = document.getElementById('myPword2').value;
  
		var passwordRegex = /^[a-zA-Z0-9]{6,}/;
				
		 if (!passwordRegex.test(pass))
		  { if (pass == "") {
		  return $('error2').innerHTML="" ;}
		  else {
		   return $('error2').innerHTML="Password has to be at least 6 characters"; }}
		   else {return $('error2').innerHTML="" ;}}
	
                                                                                                                   	
	
	function check(){
	
		var name = document.getElementById('myName').value;
		
		 var nameRegex = /^[a-zA-Z]+$/;
	     if (!nameRegex.test(name)){
		 $('error4').innerHTML="Please fill out the form properly"; 
		 return false;}
	
	   
		var email = document.getElementById('myEmail').value;
        var emailRegex =/^[a-z0-9._-]+@[a-z0-9.]+\.[a-z]{2,}$/i; //starts with letter a-z or 0-9 & allows '.', '_', and '-'; must have @; domain has letters a-z or 0-9; TLD has . and any a-z, at least 2 chars; case insensitive.  
        if (!emailRegex.test(email)){
		$('error4').innerHTML="Please fill out the form properly"; 
		return false;}}
		
	function check0() {
		
		 var tame = document.getElementById('userName').value;
		
		if (tame == ""){
			$('error5').innerHTML="Username and password has to be entered"; 
			return false; } 	   
			
		var pame = document.getElementById('myPword').value;	
		
		if (pame == ""){
			$('error5').innerHTML="Username and password has to be entered"; 
			return false; }}   
			
	</script>
</head>
<body> 
    <div id="signin">	
	<a href="register_form.php">Logout</a>
	</div>
	<div id="header">
	<header>
	<h1><a href="index.php"><img src="images/Untitled-3.gif" alt="Taste Korea"></a></h1>
	</header>
	</div>
	<div id="nav">
		<ul	>
			<li><a href="index.html">HOME</a></li>
			<li><a href="level2/seoul.php">SEOUL</a>
			
			<li><a href="level2/busan.php">BUSAN</a></li>
			<li><a href="level2/jeju.php">JEJU</a></li>
		</ul>
	</div>
	
	<div id="signform">
	<form method="post" action="login.php" onSubmit="return check0()">
	<fieldset>
		<legend>SIGN IN</legend>
		<label id="labeL" for="userName">*User Name: </label>
			<input type="text" name="userName" id="userName"><br><br>
		<label id="labeL2" for="myPword">*Password: </label>
			<input type="password" name="myPword" id="myPword" required="required">
			<br><br>
			<div id="error5"></div>
		<input type="submit" value="Sign in">
		
	</fieldset>
	</form>
	<form method="post" action="register.php" onSubmit="return check()" name="loginform">
	<fieldset>
		<legend>SIGN UP</legend>
		<label id="labeL3" for="myName">*User Name</label>
			<input type="text" name="myName" id="myName"  onchange="return validate2()" required="required" ><div id="error1"></div><br>
		<label id="labeL4" for="myPword2">*Password<br>(minimum character - 6)</label>
			<input type="password" name="myPword2" id="myPword2"  minlength="6" onchange="return validate1()" required="required"><div id="error2"></div><br><br>
		
			
		<label id="labeL5" for="myEmail">*Email</label>
			<input type="text" name="myEmail" id="myEmail" placeholder="you@domain.com" onchange="return validate()" required="required" ><div id="error3"></div>
			<br><br>
			<p>* Required fields<br>
			<div id= "error4"></div>
		<input type="submit" value="Join">
		<input type="reset" value="Reset">	
	
	</fieldset>		
	</form>	
	</div>
	
<div id= "footer2">
<footer>
<p> Copyright &copy; 2017 </p>
</footer>
</div>
	

</body>
</html>	
