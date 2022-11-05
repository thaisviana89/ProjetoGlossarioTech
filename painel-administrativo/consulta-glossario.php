<?php

	$letrarecebida = $_GET ["letra"];
	echo $letrarecebida;


?>

<?php include('painel-administrativo/rodape.php'); ?>

<?php 
	include("conexao.php");

	$stmt = $pdo->prepare("select * from tbPalavra where palavra like '$letter%'");	
	$stmt ->execute();
	
	while($row = $stmt ->fetch(PDO::FETCH_BOTH)){	

		echo "<p> $row[idPalavra] $row[1] $row[2] $row[3] $row[4] </p>" ;												
	}
?>
	
	<?php include('painel-administrativo/rodape.php'); ?>