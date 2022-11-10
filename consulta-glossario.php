<?php include('cabecalho.php')?>


<?php

	include('painel-administrativo/conexao.php');

	$letrarecebida = $_GET ["letra"];
	
	$stmt = $pdo -> prepare("select * from tbPalavra 
	where palavra like '$letrarecebida%'");
	$stmt -> execute();

	while($row = $stmt ->fetch(PDO::FETCH_BOTH)){	
		echo "$row[0] ";
		echo "$row[1] ";
		echo "$row[2] ";
		echo "<img src=$row[3] />";
		echo "<a href='$row[4]'> Clique aqui para mais informações</a>";
	}

?>
<?php include('rodape.php'); ?>