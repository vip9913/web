<?php
	$dsn="mysql:host=127.0.0.1; dbname=MYBASE; charset=UTF8";	
	$pdo=new PDO($dsn, "root", "7f651m");	
	if (isset($_POST["submit"])) 
		$pdo->exec("UPDATE webtable SET counter=counter+1");
	$res=$pdo->query("SELECT counter FROM webtable");
	$counter=$res->fetch()[0];
?>
<script> 
	parent.document.getElementById('id_number').value = '<?=$counter ?>'
</script>