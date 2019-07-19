<?php
	include 'functions.php';
	require_once('config.php');
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
	<link href="style.css" rel="stylesheet">
	<script src="http://maps.google.com/maps/api/js?sensor=false"
          type="text/javascript"></script>
	<!--<script scr="form.js" type="text/javascript">

	</script>-->
</head>
<body>
    <div id="wrapper">
    <div id="signin">
	<?php
			if (isLoggedIn()){
				//Question: 1 echo "Welcome: ".$_SESSION['SESS_FIRST_NAME'];
				//echo "Welcom: ".$_SESSION['SESS_LAST_NAME']."&nbsp&nbsp&nbsp";
				echo '<a href="forum.php">Go to forum</a>';
				echo '&nbsp';
				echo '<a href="index.php?id=add_topic_form">Create new topic</a>';
				echo '&nbsp';
				echo '<a href="logout.php">Logout</a>';

			} else {
				echo '<a href="index.php?id=form">Login / </a>';
				echo '<a href="index.php?id=form">Sign in</a>';
			}
		?>
	</div>
	<div id="header">
	<header>
	<h1><a href="index.php?id=home"><img src="images/Untitled-3.gif" alt="Taste Korea"></a></h1>
	</header>
	</div>
	<div id="nav">
		<?php
			echo file_get_contents('list.txt');
		 ?>

	</div>

	<?php
		if(empty($_GET['id'])){
			echo file_get_contents('home.txt');
		} else {
			echo file_get_contents($_GET['id'].'.txt');
		}

	 ?>



</body>
</html>
