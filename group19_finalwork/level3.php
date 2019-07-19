<?php
	include '../functions.php';
	require_once('../config.php');
	session_start();

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	$tbl_name="topic"; // Table name
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>TASTE KOREA</title>
	<link href="../style.css" rel="stylesheet">
	



</head>
<body>
	<div id="wrapper">
    <div id="signin">
	<?php
			if (isLoggedIn()){
				//Question: 1 echo "Welcome: ".$_SESSION['SESS_FIRST_NAME'];
				echo "Welcom: ".$_SESSION['SESS_FIRST_NAME']."<br/>";
				echo '<a href="logout.php">Logout</a><br/>';
				echo '<a href="forum.php">Go to forum</a><br/>';
				echo '>><a href="add_topic_form.php">Create new topic</a>';
			} else {
				echo '<a href="register_form.php">Login</a><br/>';
				echo '<a href="register_form.php">New user?</a>';
			}
		?>
	</div>
	<div id="header">
	<header>
	<h1><a href="../index.php"><img src="../images/Untitled-3.gif" alt="Taste Korea"></a></h1>
	</header>
	</div>
	<div id="nav">
		<ul	>
			<li><a href="../index.php">HOME</a></li>
			<li><a href="../level2/seoul.php">SEOUL</a>
			
			<li><a href="../level2/busan.php">BUSAN</a></li>
			<li><a href="../level2/jeju.php">JEJU</a></li>
		</ul>
	</div>
	
	<div id="maincontent">
	<div id = "leftcol">
	<img src="bibimbab.jpg" alt="Bibimbop">
		   
        <p>Jae: Wow actually I've been there and this place is great!<br>
		Sam: For sure? You are a  liar<br>
		Jae: Wow actually I've been there and this place is great!<br>
		Sam: For sure? You are a  liar<br>
		Sam: For sure? You are a  liar<br>
		Jae: Wow actually I've been there and this place is great!<br>
		Sam: For sure? You are a  liar</p>
		
		
    <img src="jokbal.jpg" alt="Jokbal">
    
        <p>Jae: Wow actually I've been there and this place is great!<br>
		Sam: For sure? You are a  liar<br>
		Jae: Wow actually I've been there and this place is great!<br>
		Sam: For sure? You are a  liar<br>
		Sam: For sure? You are a  liar<br>
		Jae: Wow actually I've been there and this place is great!<br>
		Sam: For sure? You are a  liar</p>
		
        <img src="koreanbbq.jpg" alt="KoreaBBQ">
         <p>Jae: Wow actually I've been there and this place is great!<br>
		Sam: For sure? You are a  liar<br>
		Jae: Wow actually I've been there and this place is great!<br>
		Sam: For sure? You are a  liar<br>
		Sam: For sure? You are a  liar<br>
		Jae: Wow actually I've been there and this place is great!<br>
		Sam: For sure? You are a  liar</p>
        
	</div>
	<div id="rightcolP">
		<h2> Sub-Heading </h2>
		<p>	Carriage quitting securing be appetite it declared. High eyes kept so busy feel call in. Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment. Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted. 

Uneasy barton seeing remark happen his has. Am possible offering at contempt mr distance stronger an. Attachment excellence announcing or reasonable am on if indulgence. Exeter talked in agreed spirit no he unable do. Betrayed shutters in vicinity it unpacked in. In so impossible appearance considered mr. Mrs him left find are good. 

Had repulsive dashwoods suspicion sincerity but advantage now him. Remark easily garret nor nay. Civil those mrs enjoy shy fat merry. You greatest jointure saw horrible. He private he on be imagine suppose. Fertile beloved evident through no service elderly is. Blind there if every no so at. Own neglected you preferred way sincerity delivered his attempted. To of message cottage windows do besides against uncivil. 
t</p>
<!--<div id="map1">
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:300px;width:300px;'><div id='gmap_canvas' style='height:300px;width:300px;'></div><div><small><a href="http://embedgooglemaps.com">embed google maps</a></small></div><div><small><a href="https://Enablecookies.info/">Enablecookies.info</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(36.3286059,127.4235751),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(36.3286059,127.4235751)});infowindow = new google.maps.InfoWindow({content:'<strong>aa</strong><br>대전광역시 중구 선화동 대종로 505번길 29<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
	
</div>-->	
	</div>
	
	<div id="rightcolC">
		Comments<textarea name="comments1" id="comments1" rows="4"
		cols="50"></textarea>
		<input type="submit" value="submit">
	</div>
	
	<div id="rightcolP2">
		<h2> Sub-Heading </h2>
		<p>Carriage quitting securing be appetite it declared. High eyes kept so busy feel call in. Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment. Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted. 

Uneasy barton seeing remark happen his has. Am possible offering at contempt mr distance stronger an. Attachment excellence announcing or reasonable am on if indulgence. Exeter talked in agreed spirit no he unable do. Betrayed shutters in vicinity it unpacked in. In so impossible appearance considered mr. Mrs him left find are good. 

Had repulsive dashwoods suspicion sincerity but advantage now him. Remark easily garret nor nay. Civil those mrs enjoy shy fat merry. You greatest jointure saw horrible. He private he on be imagine suppose. Fertile beloved evident through no service elderly is. Blind there if every no so at. Own neglected you preferred way sincerity delivered his attempted. To of message cottage windows do besides against uncivil. 
</p>
	</div>
	<div id="rightcolC2">
		Comments<textarea name="comments2" id="comments2" rows="4"
		cols="50"></textarea>
		<input type="submit" value="submit">
	</div>
	
	<div id="rightcolP3">
		<h2> Sub-Heading </h2>
		<p>Carriage quitting securing be appetite it declared. High eyes kept so busy feel call in. Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment. Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted. 

Uneasy barton seeing remark happen his has. Am possible offering at contempt mr distance stronger an. Attachment excellence announcing or reasonable am on if indulgence. Exeter talked in agreed spirit no he unable do. Betrayed shutters in vicinity it unpacked in. In so impossible appearance considered mr. Mrs him left find are good. 

Had repulsive dashwoods suspicion sincerity but advantage now him. Remark easily garret nor nay. Civil those mrs enjoy shy fat merry. You greatest jointure saw horrible. He private he on be imagine suppose. Fertile beloved evident through no service elderly is. Blind there if every no so at. Own neglected you preferred way sincerity delivered his attempted. To of message cottage windows do besides against uncivil. 
</p>
	</div>
	<div id="rightcolC3">
		Comments<textarea name="comments3" id="comments3" rows="4"
		cols="50"></textarea>
		<input type="submit" value="submit">
	</div>
	



<div id= "footer2">

<p> Copyright &copy; 2017 </p>

</div>
	
</div>
</body>
</html>	
