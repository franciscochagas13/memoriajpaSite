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

		if($_GET["c"] == "patrimonio"){

			$cat = "Patrimônio";
			$catForQuery = "PATRIMONIO";

			$subcatsCHAVES = ["PATRIMONIO"];
			$subcatsNOMES = ["PATRIMONIO"];

		}else if($_GET["c"] == "monumento"){

			$cat = "Monumento";
			$catForQuery = "MONUMENTO";

			$subcatsCHAVES = ["MONUMENTO"];
			$subcatsNOMES = ["MONUMENTO"];


		}	
		else if($_GET["c"] == "tombamento"){

			$cat = "Tombamento";
			$catForQuery = "TOMBAMENTO";

			$subcatsCHAVES = ["TOMBAMENTO"];
			$subcatsNOMES = ["TOMBAMENTO"];

			
		}	else if($_GET["c"] == "centro"){

			$cat = "Centro Histórico";
			$catForQuery = "CENTRO";

			$subcatsCHAVES = ["CENTRO"];
			$subcatsNOMES = ["CENTRO"];

		}else if($_GET["c"] == "historia"){

			$cat = "História";
			$catForQuery = "HISTORIA";

			$subcatsCHAVES = ["HISTORIA"];
			$subcatsNOMES = ["HISTORIA"];

		}else if($_GET["c"] == "memoria"){

			$cat = "Memória";
			$catForQuery = "MEMÓRIA";

			$subcatsCHAVES = ["MEMORIA"];
			$subcatsNOMES = ["MEMORIA"];

		}else if($_GET["c"] == "identidade"){

			$cat = "Identidade";
			$catForQuery = "IDENTIDADE";

			$subcatsCHAVES = ["IDENTIDADE"];
			$subcatsNOMES = ["IDENTIDADE"];

		}else if($_GET["c"] == "cultura"){

			$cat = "Cultura";
			$catForQuery = "CULTURA";

			$subcatsCHAVES = ["CULTURA"];
			$subcatsNOMES = ["CULTURA"];

		}else if($_GET["c"] == "conservacao"){

			$cat = "Conservação";
			$catForQuery = "CONSERVAÇÃO";

			$subcatsCHAVES = ["CONSERVACAO"];
			$subcatsNOMES = ["CONSERVACAO"];

		}


		?>
		<div class="centerCT">
		        <h1> Definições - <?php echo $cat; ?></h1>
		        <!-- Begin Page -->
		          <table width="90%" height="199"  align="center" border="0" cellpadding="0" cellspacing="0">
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

		        		



		       				 $sql = "SELECT id,categoria,subcategoria,conteudo,img FROM definicoes WHERE categoria = '$catForQuery' and subcategoria = '$subcatsCHAVES[$count]' ";
		       				 
		       				        $q = $pdo->prepare($sql);
                                    $q->execute(['%id']);
                                    $q->execute(['%categoria']);
                                    $q->execute(['%conteudo']);
                                    $q->execute(['%img']);
                                    $q->execute(['%legenda']);
                                    $q->setFetchMode(PDO::FETCH_ASSOC);


                                    while ($r = $q->fetch()) {

                                        echo '
                                        <table border="0" width="100%">
                            
                                        <tr>
                                        
                                         
                                         <td valign="top"p align="justify" width="1350px" ><font size="4">'.$r["conteudo"].'</p></font></td>
                            
                                        <td><img style="float:left; margin-left:20px;" src = "img/definicoes/'.$r["img"].'" /></td>
                                      </tr>  
                                        ';
                                    }
                            


		        	echo '</td>
	        </tr>
	        </table><br/><br/>	';
		        	$count++;
		        }



		                            

		        		
		        ?>

<button onclick="window.location.href='/memoriaj/definicoes.php'">Voltar</button> 

		       	<?php
		include("footer.php");
			      		

		        


