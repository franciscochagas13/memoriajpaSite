		<style>
	.titulo{
		color: white;
		padding: 6px;	
		font-family: 'Open Sans Condensed', sans-serif;
		font-weight: bold;
		border-radius: 8px;
		background-color: #ba0303;
	}
	.item
	{
		float:left;
		width: 210px;
		margin-right:30px;
		overflow: hidden;
		display: block;
	}
	</style>

		<?php
		include("header.php");

		if($_GET["c"] == "tipologia"){

			$cat = "Tipologia";
			$catForQuery = "TIPOLOGIA";

			$subcatsCHAVES = ["ARQ_CIVIL_FUNCAO_PUBLICA", "ARQ_CIVIL_FUNCAO_PRIVADA", "ARQ_RELIGIOSA", "ESPACO_URBANO_EDIFICADO"];
			$subcatsNOMES = ["Arq Cívil Função Pública", "Arq Cívil Função Privada", "Arq Religiosa", "Espaço Urbano e Edificado"];

		}else{

			$cat = "Nível de Proteção";
			$catForQuery = "NIVELDEPROTECAO";

			$subcatsCHAVES = ["IPHAN", "IPHAEP", "OUTROS_BENS_DE_INTERESSE"];
			$subcatsNOMES = ["IPHAN", "IPHAEP", "Outros Bens de Interesse"];


		}	

		?>
		<div class="centerCT">
		        <h1>Acervo Patrimonial - <?php echo $cat; ?></h1>
		        <!-- Begin Page -->
		          <table width="97%" height="199" align="center" border="0" cellpadding="0" cellspacing="0">
		      <tr>
		      <td height="56" align="left"><p> </p></td></tr>
		      <tr>
		        <td height="69">
		        
		        <!-- Begin Page -->
		               
		        <?php
                 require_once '../../../galaxy/c.php';

		        $count = 0;

		        		foreach ($subcatsNOMES as $key) {
		        			# code...

		        			echo ' <table width="1000px" border="0">
		        <tr>
		        <td background="img/bg-titulo-formacaoevolucao.fw.png" class="titulo">'.$key.'</td>
		        			 </tr>
		        			<tr>
		       				 <td align="center">';


		       				 $sql = "SELECT id,categoria,subcategoria,miniatura,pdf,legenda FROM arcevopatrimonial WHERE categoria = '$catForQuery' and subcategoria = '$subcatsCHAVES[$count]' ";
		       				 
		       				        $q = $pdo->prepare($sql);
                                    $q->execute(['%id']);
                                    $q->execute(['%categoria']);
                                    $q->execute(['%miniatura']);
                                    $q->execute(['%pdf']);
                                    $q->execute(['%legenda']);
                                    $q->setFetchMode(PDO::FETCH_ASSOC);


		                                while ($r = $q->fetch()) {

		                                    echo ' <div class="item"><br/><a href="acervopatrimonial/'.$r["pdf"].'" target="_blank"><img src="acervopatrimonial/'.$r["miniatura"].'"/></a>
	        <br/>
	        '.$r["legenda"].' <br/> 
	         </div> ';


		        		}


		        	echo '</td>
	        </tr>
	        </table><br/><br/>	';
		        	$count++;
		        }



		                            

		        		
		        ?>

		         

		       	<?php
		include("footer.php");
			      		

		        


