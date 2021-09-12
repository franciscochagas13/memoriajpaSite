<?php
include("header.php");

?>


<meta property="og:image" content="http://www.memoriajoaopessoa.com.br/img/facebook.png"/>
<meta property="og:title" content="Publicações - Memória João Pessoa"/>
<meta property="og:url" content="http://www.memoriajoaopessoa.com.br/formacao-e-evolucao.jsf"/>
<meta property="og:site_name" content="Memória João Pessoa"/>
<meta property="og:type" content="website"/>
<title>Publicações - Memória João Pessoa</title>

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
	<h1>Publicações	</h1>
	<p align="justify"> Deseja conhecer um pouco mais sobre este projeto de extensão, suas atividades e produção? Aqui disponibilizamos diversos artigos científicos que tratam sobre o mesmo: pesquise. </p>
      
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Ano</th>
      <th scope="col">Publicação</th>
      <th scope="col">Download</th>
    </tr>
  </thead>
  <tbody>
  <?php
          

            require_once '../../../galaxy/c.php';
  

           $sql = "SELECT id,ano,conteudo,download FROM publicacoes";
           
        $q = $pdo->prepare($sql);
        $q->execute(['%id']);
         $q->execute(['%ano']);
         $q->execute(['%conteudo']);
         $q->execute(['%download']) ;
        $q->setFetchMode(PDO::FETCH_ASSOC);


               /* fetch values */
               while ($r = $q->fetch()) {

                   echo '
                   <tr>
	<td>'.$r["ano"].'</td>
	<td><p align="justify">'.$r["conteudo"].'</p></td>
	
	<td><a href="publicacoes/'.$r["download"].'"data-lity><img src="img/download.png" width="30%" weight="30%"/> </a></td>
	
      
    </tr>  

                   ';
               }






           ?>
    
  </tbody>

</table>

			

		</ul>
		
	</div>        	
	
	
	<!-- End of Page -->
	
</div>






<?php
include("footer.php");

?>