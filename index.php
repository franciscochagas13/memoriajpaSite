<?php

include("header.php");

?>

<title>Home - Memória João Pessoa</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />

<!-- Optional theme -->
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css" />

<!-- Latest compiled and minified JavaScript -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


<style>
	.hm-presentation
	{
		text-align: center;
	}
	.hm-item
	{
		margin: 40px 3%;
		max-width: 167px !important;
		width: 22%;
	}
	.hm-presentation img
	{
		max-width: 100%;
	}

	.hm-presentation img
	{
		max-width: 100%;
	}

	@media only screen and (min-width:1290px) and (max-width: 1420px)
	{
		.caixaFoto
		{
			margin-left: 3% !important;
		}
	}
	@media only screen and (min-width:0px) and (max-width: 1140px)
	{
		.caixaFoto
		{
			width: 80px !important;
			height: 80px !important;
			margin-left: 10px !important;
		}
	}
	@media only screen and (min-width:1141px) and (max-width: 1280px)
	{
		.caixaFoto
		{
			width: 100px !important;
			height: 100px !important;
			margin-left: 20px !important;
		}
	}

	img.btnLogo {
		margin-top: 10px;
		float: left;
	}

	.caixaFoto
	{
		width: 120px;
		height: 120px;
		border-radius: 100px;
		overflow: hidden;
		float: left;
		margin-left: 5%
	}

	.img-rounded
	{
		max-width: 152px !important;
		margin-left: -32px;
		
	}

	.linha
	{
		width: 100%;

		height: 150px;

		line-height:120px;
		display: block;
		overflow: hidden;
		padding: 19px 0px;
		border-bottom: 2px solid rgb(229, 229, 229);
	}
</style>



<div class="centerCT">
	<div id="conteudoIndex" style="width: 100%;" data-step="9" data-intro="Aqui você pode conhecer mais sobre o nosso projeto."> 
		<div class="homeBlock">
		<!-- O portal Memória João Pessoa --> 
			<h1>Conheça o <b>Memória João Pessoa</b></h1>        
			<p align="justify">O <b>portal Memória João Pessoa</b> é resultado de um Projeto de Extensão vinculado ao Departamento de Arquitetura e Urbanismo da Universidade Federal da Paraíba. Tem por objetivo transmitir, de forma atrativa, informações sobre o <b>patrimônio</b> e a <b>história</b> da cidade, conscientizando sobre a necessária manutenção da sua <b>memória</b> e <b>identidade</b> e sobre a <b>preservação</b> deste legado cultural que é de todos nós.</p>
			<p align="justify">Através de um passeio por esta página, você poderá conhecer sobre a formação, história e tradições de João Pessoa, ver registros de outras épocas, vivenciar espaços da cidade, além de ter acesso a informações sobre as edificações mais significativas eos sítios urbanos que dão identidade à mesma.</p>

		</div>
	</div>
</div>

<!-- <div class="homeFace" data-step="10" data-intro="Curta a nossa fanpage para ficar por dentro de todo o conteúdo sobre a história de João Pessoa!">
	<div class="centerCT">
		<h1>Curta nossa Fanpage no Facebook</h1>      
		<div class="guidee">
			<img src="img/fblogo.png" style="float: left; margin-top: -13px;" />
			<p align="justify" style="max-width: 580px; float: left; margin-left: 20px;">O projeto Memória João Pessoa está também no Facebook! Em nossa página, você poderá encontrar notícias, curiosidades, vídeos/fotos antigas, eventos e muito mais!</p>
			<div class="button"><a href="https://www.instagram.com/memoriajp/" target="_blank" class="butaus butaus-1 butaus-1e">CURTIR</a></div>
		</div>
	</div>
</div>
 -->
 <div class="homeFace" data-step="10" data-intro="Curta a nossa fanpage para ficar por dentro de todo o conteúdo sobre a história de João Pessoa!">
	<div class="centerCT">
		<h1>Curta nosso Instagram</h1>      
		<div class="guidee">
			<p align="justify" style="max-width: 580px; float: left; margin-left: 20px;">O projeto Memória João Pessoa está também no Instagram! Em nossa página, você poderá encontrar notícias, curiosidades, vídeos/fotos antigas, eventos e muito mais!</p>
			<div class="button"><a href="https://www.instagram.com/memoriajp/" target="_blank" class="butaus butaus-1 butaus-1e">CURTIR</a></div>
		</div>
	</div>
</div>

<div class="centerCT" data-step="11" data-intro="Conheça alguns dos nossos trabalhos..."> 
         

<div class="linha">
	<div><img style="float: left;" src="img/testes/pesquisa.jpg"/><font face="Arial Black" size="4"style="float:left; margin-left:5px;"> <p align = center style="float:left">PESQUISA</p></font></div>

	<div class="caixaFoto post"data-ot="Definições"><a href="definicoes.php"><img src="img/testes/1.png"/></a></div>
	<div class="caixaFoto post"data-ot="Centro Histórico" ><a href="centro-historico.php"><img src="img/testes/2a.jpg"/></a></div>
	<div class="caixaFoto post"data-ot="Formação e Evolução"><a href="formacao-e-evolucao.php"><img src="img/testes/3a.jpg"/></a></div>
	<div class="caixaFoto post"data-ot="Acervo Patrimonial"><a href="jogos.php"><img src="img/testes/4.png"/></a></div>

</div>
<div class="linha">

	<div><img style="float: left;" src="img/testes/lazer.jpg"/> <font face="Arial Black" size="4"style="float:left; margin-left:45px;"> <p align = center style="float:left">LAZER</p></font></div>
	<div class="caixaFoto post"data-ot="Memória Social"><a href="memoria-social.php"><img src="img/testes/5.jpg"/></a></div>
	<div class="caixaFoto post"data-ot="Vivências" ><a href="vivencias.php"><img src="img/testes/6.jpg" /></a></div>
	<div class="caixaFoto post"data-ot="Postais"><a href="postais.php"><img src="img/testes/7.jpg"/></a></div>
	<div class="caixaFoto post"data-ot="Galeria"><a href="galeria.php"><img src="img/testes/8.jpg"/></a></div>

</div>
<div class="linha">

	<div><img style="float: left;" src="img/testes/jogos.jpg"/> <font face="Arial Black" size="4"style="float:left; margin-left:45px;" > <p align = center style="float:left">JOGOS</p></font></div>
	<div class="caixaFoto post"data-ot="Memória"><a href="jogos.php"><img src="img/testes/9.png"/></a></div>
	<div class="caixaFoto post"data-ot="Sete Erros" ><a href="jogos.php"><img src="img/testes/10.png"/></a></div>
	<div class="caixaFoto post"data-ot="PaperToy"><a href="jogos.php"><img src="img/testes/11.png"/></a></div>
	<div class="caixaFoto post"data-ot="Para Colorir"><a href="jogos.php"><img src="img/testes/12.png"/></a></div>

</div>

</div>      



<?php

include("footer.php");

?>


