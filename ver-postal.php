<style>

	body{
		margin-bottom: 0px;
		margin-left: 0px;
		margin-right: 0px;
		margin-top: 0px;
		font-family: Arial;
		background:white;

	}

	.alerta {
		background: #2c2c2c;
		color: white;
		padding: 4px 15px;
		border-radius: 5px;
		margin: 6px auto;
	}

</style>

<div>
	<div class="alerta" style="width:660px;"><b>Atenção:</b> Clique no postal para ver a imagem em tamanho completo. <br/>Em seguida, você poderá salvar a imagem e compartilhar por e-mail ou nas redes sociais.</div>
	<?php
	$id = (int) $_GET["i"];

	require_once '../../../galaxy/c.php';

	$sql = "SELECT id,miniatura,nome,postal FROM postais WHERE id=$id";
	
	 $q = $pdo->prepare($sql);
                             $q->execute(['%postal']);
                            $q->setFetchMode(PDO::FETCH_ASSOC);

		while ($r = $q->fetch()) {

			echo '<a href="postais/'.$r["postal"].'" title="Clique para ver a imagem completa" target="_blank"><img src="postais/'.$r["postal"].'" style="max-width: 800px; max-height: 600px; margin: auto; display: block;" alt=""/></a>
		</div>';

	}
?>

