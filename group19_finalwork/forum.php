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
	<h1><a href="index.php?id=0"><img src="images/Untitled-3.gif" alt="Taste Korea"></a></h1>
	</header>
	</div>
	<div id="nav">
		<?php
			echo file_get_contents('list.txt');
		 ?>

	</div>
	<?php
	require_once('config.php');

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect");
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB");
	$tbl_name="topic"; // Table name


	//$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
	//Question 1C
	$sql="SELECT * FROM $tbl_name, members where members.member_id = topic.member_id ORDER BY id DESC";
	// ORDER BY id DESC is order result by descending
	$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
?>
<br><br><br><br><br>
	<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>

<!--Question 3: -->
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
<td width="7%" align="center" bgcolor="#E6E6E6"><strong>Name</strong></td>
</tr>
<?php
while($rows=mysqli_fetch_array($result)){ // Start looping table row
?>

<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>

<!-- Question 3 -->
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['firstname']." ".$rows['lastname']; ?> </td>
</tr>

<?php
// Exit looping and close connection
}
((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
?>
<tr>
<td colspan="5" align="right" bgcolor="#E6E6E6"><a href="index.php?id=add_topic_form"><strong>Create New Topic</strong> </a></td>
</tr>
</table>
<br><br><br><br>
<div id= "footer">
<footer>
<p> Copyright &copy; 2017 </p>
</footer>
</div>
</div>

</body>
</html>
