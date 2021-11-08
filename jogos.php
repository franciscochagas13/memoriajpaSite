<?php
include("header.php");

?>

<meta property="og:image" content="http://www.memoriajoaopessoa.com.br/img/facebook.png"/>
<meta property="og:title" content="Jogos - Memória João Pessoa"/>
<meta property="og:url" content="http://www.memoriajoaopessoa.com.br/jogos.jsf"/>
<meta property="og:site_name" content="Memória João Pessoa"/>
<meta property="og:type" content="website"/>

<link href="lity/dist/lity.css" rel="stylesheet">
<script src="lity/vendor/jquery.js"></script>
<script src="lity/dist/lity.js"></script>


<style>
.nomepostal{
	color:white;
}

.item
{
float:left;
margin-right: 20px;
margin-bottom: 20px
}

.item > div > a > img {
margin: 0px 0px -4px -50px;
transition: all 1s ease 0s;
}

.item > div > a:hover > img {
margin: 0px 0px -4px -50px;
transform: scale(1.3);
-webkit-transform: scale(1.3);
-moz-transform: scale(1.3);
-ms-transform: scale(1.3);
-ms-filter: "alpha(opacity=100)";
filter: alpha(opacity=100);
-moz-opacity: 1;
-khtml-opacity: 1;
}

a, a:hover{
text-decoration: none !important;
}

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
    width: 218px;
    z-index: 999;
	position: relative;
}


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
		max-width: 200%;
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
	.titulo {
		color: white;
	}
</style>

<title>Jogos - Memória João Pessoa</title>

<div class="centerCT">
       	<!-- Begin Page -->
	<h1>Jogos</h1>
       		<p align="justify">Através dos jogos aqui disponíveis, lhes convidamos a brincar com nosso patrimônio, de forma lúdica e interativa, colocando em prática e testando conhecimentos que podem adquirir em outros links do nosso site. Esses jogos foram criados tendo por referência os tradicionais jogos da memória, dos sete erros e os brinquedos de cortar, montar, colorir. Esperamos que se divirtam!</p>
			<br/><br/>  

			<table width="1000px" border="0" >

<tr>

	<td>
		<div style="float:left; margin-left:20px;"><a href="jogo-memoria.php"><img src="img/jogos/jogo-memoria.png"/></a></div>
		<div style="float:left; margin-left:20px;"> <a href="jogo-sete-erros.php"><img src="img/jogos/jogo-sete-erros.png" /></a></div>
		<div style="float:left; margin-top:20px;margin-left:20px;"> <a href="jogos-colorir.php"><img src="img/jogos/colorir.png" /></a>  </div>
		<div style="float:left; margin-top:20px; margin-left:20px;"> <a href="jogos-papertoys.php"><img src="img/jogos/papertoy.png" /></a>  </div>
	</td>

</tr>

</table>



</div>
<?php

include("footer.php");



?>