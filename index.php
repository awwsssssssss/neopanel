<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NeoPanel - Console</title>
	<style>button{
		background: white;
		border: 2px solid green;
	}button:hover{
		background: green;
		border: 2px solid green;
		color: white;
	}
	</style>
</head>
<body>
	<div class="coainter" style="background: green;color: white;">
		
<center><h1>NeoPanel</h1></center>


	</div>
<?php
if ($_GET['pass']=="") {
	// code...
}else{
	?>

	<script>document.cookie = "sesionuiid=<?php echo $_GET['pass'];?>; expires=Thu, 18 Dec 9999 12:00:00 UTC; path=/";</script>
	<script>window.location.replace("/")</script>
	<?php
}
if ($_COOKIE['sesionuiid'] == "acu-west-ios") {
	?>
	<script>function dologout() {
		document.cookie = 'sesionuiid=; expires=Thu, 18 Dec 9999 12:00:00 UTC; path=/';
window.location.replace("/");
			}</script>
<h1>User Dashboard</h1>
<button onclick="dologout()">Logout</button><br>
<?php
echo shell_exec('echo %NUMBER_OF_PROCESSORS%')." cores";
?>

<iframe src="cons.php" height="299" width="100%" frameborder></iframe>






	<?php
}else{

	?>
<h1>WCerdicinal Login</h1>
<br>
<div style=" border: 3px solid black;height: 65px; width: 63px;"><img src="nn.png"></div>admin<br>
<form><input type="password" name="pass">

<button>Login</button>
</form>
	<?php
}


?>
</body>
</html>