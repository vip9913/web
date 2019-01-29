<?php
	$dsn="mysql:host=127.0.0.1; dbname=MYBASE; charset=UTF8";	
	$pdo=new PDO($dsn, "root", "7f651m");
	if (isset($_POST["submit"])) 
		$pdo->exec("UPDATE webtable SET counter=counter+1");
	$res=$pdo->query("SELECT counter FROM webtable");
	$counter=$res->fetch()[0];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Counter</title>		
	<link rel="stylesheet" type="text/css" href="style.css" />			
	</head>
	<body>
		<h1>Counter</h1>	
		<form method="post">
			<input class="number" type="text" value="<?=$counter ?>" />
			<input name="submit" class="button" type="submit" />		
		</form>
	</body>
</html>