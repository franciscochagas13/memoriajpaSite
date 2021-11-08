<?php
include("header.php");

?>


<meta property="og:image" content="http://www.memoriajoaopessoa.com.br/img/facebook.png"/>
<meta property="og:title" content="Formação e Evolução - Memória João Pessoa"/>
<meta property="og:url" content="http://www.memoriajoaopessoa.com.br/formacao-e-evolucao.jsf"/>
<meta property="og:site_name" content="Memória João Pessoa"/>
<meta property="og:type" content="website"/>
<title>Formação e Evolução - Memória João Pessoa</title>

<style>
	.titulo{
		
		color:white;

	}

</style>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
</script>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.js"></script>
<style>	
	.round-border {
		border: 1px solid #eee;
		border: 1px solid rgba(0, 0, 0, 0.05);
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		border-radius: 4px;
		padding: 10px;
		margin-bottom: 5px;
	}
	
	#timeline
	{
		width: 100%;
		background: #e61500;
		height: 8px;
		display: block;
		margin: 50px 0;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;
	}
	.linha
	{
		list-style: none;
		position: relative;
		margin-top: -5px;
	}
	.linha > li
	{
		width: 20px;
		background: #e61500;
		height: 20px;
		-webkit-border-radius: 200px;
		-moz-border-radius: 200px;
		border-radius: 200px;
		float: left;
		margin: -5px 7%;
		cursor: pointer;
		
		-webkit-transition: all 0.5s ease;
		-moz-transition: all 0.5s ease;
		-o-transition: all 0.5s ease;
		transition: all 0.5s ease;
	}
	
	@media only screen and (min-width:686px) and (max-width: 1155px)
	{
		.linha > li
		{
			margin: -5px 6%;
		}
	}
	
	@media only screen and (min-width:1px) and (max-width: 686px)
	{
		.linha > li
		{
			margin: -5px 5%;
		}
	}

	
	.selected
	{
		border: 4px solid #e61500;
		background-color: white !important;
	}
	
	.ano {
		position: absolute;
		top: 25px;
		margin-left: -10px;
		font-family: 'Open Sans Condensed', sans-serif;
		font-size: 22px;
	}
	
	p { text-align: justify;}
	
</style>



<div class="centerCT">
	<h1>Formação e Evolução</h1>
	<p align="justify">Comece sua visita ao site acessando o link Formação e evolução. Nele você pode conhecer, em breves linhas, a história da cidade de João Pessoa desde a sua fundação até o século XX. </p>
	<div class="alerta" style="width:540px;"><b>Atenção:</b> Para ver o conteúdo, clique nos marcadores na linha do tempo.</div>
	<div id="timeline">
		<ul class="linha">


			<?php

             require_once '../../../galaxy/c.php';
   

			$sql = "SELECT id,titulo,conteudo,imagens,linha,ano FROM formacaoevolucao";
			
		 $q = $pdo->prepare($sql);
         $q->execute(['%id']);
          $q->execute(['%ano']);
         $q->setFetchMode(PDO::FETCH_ASSOC);


				/* fetch values */
				while ($r = $q->fetch()) {

					echo '
					<li id="linha'.$r["id"].'"><span class="ano">
						'.$r["ano"].'
					</span></li>




					';



				}






			?>

		</ul>
		
	</div>        	
	<table width="97%" height="199" align="center" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td height="69">
				<br/>



				<?php
				
				require_once '../../../galaxy/c.php';
   

			   $sql = "SELECT id,titulo,conteudo,imagens,linha,ano FROM formacaoevolucao";
			   
			   $pdo->prepare($sql);
         $q->execute(['%id']);
          $q->execute(['%ano']);
         $q->setFetchMode(PDO::FETCH_ASSOC);

				
					while ($r = $q->fetch()) {

						echo '
						<script>
							$(document).ready(function(){
								$("#linha'.$r["id"].'").click(function(){
									var $this = $("#conteudo'.$r["id"].'");
									$(".conteudo").not($this).hide();
									$("#conteudo'.$r["id"].'").toggle(600);
									$("#timeline > .linha > li").not(this).removeClass("selected");
									$("#linha'.$r["id"].'").toggleClass("selected");
								});
							});
						</script>
						<div id="conteudo'.$r["id"].'" class="conteudo" style="display:none;"> 
							<table border="0" width="100%">
								<tr>       
									<!-- Coluna Texto -->
									<td valign="top" width="50%">
										'.$r["conteudo"].' 
									</td>
									<!-- Coluna Imagens -->
									<td valign="top" width="50%" align="center"> 
										<img src="img/linhas-do-tempo/imgs-conteudo/'.$r["imagens"].'" />
									</td>
								</tr>
							</table>
						</div>




						';



					}


				?>








				
			</td>
		</tr>
	</table>
	
	<!-- End of Page -->
	
</div>






<?php
include("footer.php");

?>