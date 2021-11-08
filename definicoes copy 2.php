<?php
include("header.php");

?>


<meta property="og:image" content="http://www.memoriajoaopessoa.com.br/img/facebook.png"/>
<meta property="og:title" content="Definições - Memória João Pessoa"/>
<meta property="og:url" content="http://www.memoriajoaopessoa.com.br/formacao-e-evolucao.jsf"/>
<meta property="og:site_name" content="Memória João Pessoa"/>
<meta property="og:type" content="website"/>
<title>Definições - Memória João Pessoa</title>

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
	
	.descricao {
		position: absolute;
		top: 25px;
		margin-left: -10px;
		font-family: 'Open Sans Condensed', sans-serif;
		font-size: 22px;
	}
	
	p { text-align: justify;}
	
</style>



<div class="centerCT">
	<h1>Definições</h1>

    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">O que é?</th>
      <th scope="col"></th>
	  <th scope="col"></th>
	  <th scope="col"></th>
	  <th scope="col"></th>
    </tr>
  </thead>
  <tr>
      <th scope="row"></th>
      <td>Patrimônio</td>
      <td>Monumento</td>
      <td>Tombamento</td>
	  <td>Centro Histórico</td>
    </tr>
  <tbody>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Precisamos Conservar</th>
 
    </tr>
  </thead>
  <tr>
      <th scope="row"></th>
	  <td><p align="justify"><b>Conservação</b></br></br></br>
O termo <b>conservação</b> se refere ao conjunto de ações possíveis para assegurar a manutenção do nosso patrimônio. De acordo com as circunstâncias, para se conservar é necessário fazer uma  restauração, o que requer um trabalho técnico mais especializado e caro. Mas a simples manutenção cotidiana pode garantir de forma eficaz a conservação, não permitindo que um edifício fique danificado. Dar um uso adequado, que respeite a integridade e significação cultural dos edifícios de valor patrimonial é mais um caminho para a boa conservação. <br><br>
Medidas legais como o tombamento também são parte desse conjunto de ações, mas não necessariamente garante a conservação do patrimônio tombado, uma vez que tal legado precisa ser cuidado por seu(s) proprietário(s) a fim de manter sua integridade.  Nesse sentido, para diminuir essa lacuna entre tombar e conservar, os documentos patrimoniais obtidos a partir de fóruns pertinentes, foram indicando outros meios que estimulem a conservação, quais sejam incentivos fiscais, isenções de impostos, etc.<br><br>
 Portanto, conservar é cuidar, tratar com respeito os bens de valor patrimonial, para que estes permaneçam como registros da história e memória de uma cidade.
 <th scope="col"></th>
	  </td>
	  <td>teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste  teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste  teste teste teste teste teste teste teste teste teste teste teste </td>
	
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Para que?</th>
      <th scope="col"></th>
	  <th scope="col"></th>
	  <th scope="col"></th>
	  <th scope="col"></th>
    </tr>
  </thead>
  <tr>
      <th scope="row"></th>
	  <td>História</td>
      <td>Memória</td>
      <td>Identidade</td>
      <td>Cultura</td>
	
    </tr>
  <!-- <tbody>
  <?php
          

            require_once '../../../galaxy/c.php';
  

           $sql = "SELECT id,descricao,conteudo,img FROM definicoes";
           
        $q = $pdo->prepare($sql);
		$q->execute(['%id']);
		 $q->execute(['%pergunta1']);
		 $q->execute(['%descricao1']);
		 $q->execute(['%pergunta2']);
		 $q->execute(['%descricao2']);
		 $q->execute(['%pergunta3']);
		 $q->execute(['%descricao3']);
		 

         $q->execute(['%img']);
        $q->setFetchMode(PDO::FETCH_ASSOC);


         /* fetch values */
		 while ($r = $q->fetch()) {

			echo '
			<table border="0" width="100%">

			<tr>
			
			 <td valign=top width="150px">'.$r["descricao"].'</td>
			 
			 <td p align="justify" width="1750px">'.$r["conteudo"].'</p></td>

			<td><img style = width:350px;height:400px src = "img/definicoes/'.$r["img"].'" /></td>
		  </tr>  
			';
		}






           ?>
    
  </tbody> -->

</table>

			

		</ul>
		
	</div>        	
	
	
	<!-- End of Page -->
	
</div>






<?php
include("footer.php");

?>