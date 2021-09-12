<?php
include("header.php");

?>

<title>Vivências - Memória João Pessoa</title>
<meta property="og:image" content="http://www.memoriajoaopessoa.com.br/img/facebook.png"/>
<meta property="og:title" content="Vivências - Memória João Pessoa"/>
<meta property="og:url" content="http://www.memoriajoaopessoa.com.br/vivencias.jsf"/>
<meta property="og:site_name" content="Memória João Pessoa"/>
<meta property="og:type" content="website"/>

<link href="lity/dist/lity.css" rel="stylesheet">
<script src="lity/vendor/jquery.js"></script>
<script src="lity/dist/lity.js"></script>



<style>
	.titulo{
		color:white;
	}
	.vivencia
	{
		float: left;
		margin: 0px 0px 20px 14px !important;
		width: 228px;
		display: block;
		overflow: hidden;
	}

	.vivencia > div > a > img {
		margin: 0px 0px -4px -54px;
		transition: all 1.5s ease 0s;
	}

	.vivencia > div > a:hover > img {
		margin: 0px 0px -4px -54px;
		transform: scale(1.2);
		-webkit-transform: scale(1.2);
		-moz-transform: scale(1.2);
		-ms-transform: scale(1.2);
		-ms-filter: "alpha(opacity=100)";
		filter: alpha(opacity=100);
		-moz-opacity: 1;
		-khtml-opacity: 1;
	}

	a, a:hover { text-decoration: none !important; }

	.img-nome
	{
		background-color: #1b1b1b;
		color: white;
		display: block;
		font-family: 'Open Sans Condensed',sans-serif;
		font-size: 18px;
		height: 55px;
		line-height: 50px;
		text-align: center;
		width: 228px;
		z-index: 999;
		position: relative;
	}


</style>

<div class="centerCT">
	<!-- Begin Page -->
	<h1>Vivências</h1>
	<p align="justify"> Aqui convidamos você a conhecer alguns lugares de importância histórica na nossa cidade por meio de curtas-metragens que permitem "vivenciar" suas transformações até os dias atuais, proporcionando uma verdadeira viagem no tempo.   </p>
	<table width="101%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td height="45" align="center"><table width="97%" height="199" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td height="69">
						<br/>

						<?php

						require_once '../../../galaxy/c.php';

						$sql = "SELECT id,miniatura,video,titulo FROM vivencias";
						
						
						  $q = $pdo->prepare($sql);
                             $q->execute(['%miniatura']);
                             $q->execute(['%video']);
                            $q->setFetchMode(PDO::FETCH_ASSOC);

							while ($r = $q->fetch()) {

								echo '

								<div class="vivencia">


								<a href="'.$r["video"].'" data-lity><img src="img/vvs/'.$r["miniatura"].'"</a>



								</div>



								';
							}

						?>

					</td>
				</tr>
			</table></td>
		</tr>
	</table>
</div>



<?php
include("footer.php");

?>