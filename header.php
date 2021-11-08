<html>

<head>





	<script src="js/comments.js"></script>

	<link rel="shortcut icon" href="memoria.ico" type="image/x-icon" />

	

	<script type="text/javascript">



  var _gaq = _gaq || [];

  _gaq.push(['_setAccount', 'UA-28227725-1']);

  _gaq.push(['_trackPageview']);



  (function() {

    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

  })();



</script>





	<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300' rel='stylesheet' type='text/css'/>



<!-- Optional theme -->

<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css" />

<link rel="stylesheet" href="js/introjs.css" />



<!-- Latest compiled and minified JavaScript -->

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>



	<link rel="stylesheet" href="orbit/orbit-1.2.3.css" />



	<!-- Attach necessary JS -->

	<script type="text/javascript" src="orbit/jquery-1.5.1.min.js"></script>

	<script type="text/javascript" src="orbit/jquery.orbit-1.2.3.min.js"></script>

	<script src="js/intro.js"></script>

	

	<script src="js/opentip-jquery-excanvas.js"></script><!-- Change to the adapter you actually use -->

	<link href="styles/opentip.css" rel="stylesheet" type="text/css" />	





	<!--[if IE]>

			     <style type="text/css">

			         .timer { display: none !important; }

			         div.caption { background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);zoom: 1; }

			    </style>

			<![endif]-->





	<!-- Run the plugin -->

	<script type="text/javascript">

			$(window).load(function() {

				$('#featured').orbit();

			});

			

			$(window).scroll(function(e) {

			    var s = $(window).scrollTop(),

			        opacityVal = (s / 200.0);



			    $('.header-blur').css('opacity', opacityVal);

			    //$('.frontao').css('left', -(opacityVal * 30) + "px");

			    //$('.frontao').css('opacity', 2-opacityVal);

			    $('.social').css('opacity', 7-opacityVal);

			    //$('.logo').css('opacity', 3-opacityVal);

			    //$('.logo').css('padding-top', ((20 + (25*opacityVal))) + "px");

			    //$('.logo').css('width', (388 - (opacityVal * 50)) + "px");

			});

			

			Opentip.styles.tipStyle = {

					  // Make it look like the alert style. If you omit this, it will default to "standard"

					  // Tells the tooltip to be fixed and be attached to the trigger, which is the default target

					  target: true,

					  extends: "alert",

					  background: "#000000",

					  borderColor: "#000000",

					  borderColor: "#000000",

					  tipJoint: "top",

					  stem: true

					  



					};

			

			Opentip.defaultStyle = "tipStyle";



			

	</script>

	<style type="text/css">

@font-face {

	font-family: 'ecoicon';

	src:url('http://tympanus.net/Development/IconHoverEffects/fonts/ecoicons/ecoicon.eot');

	src:url('http://tympanus.net/Development/IconHoverEffects/fonts/ecoicons/ecoicon.eot?#iefix') format('embedded-opentype'),

		url('http://tympanus.net/Development/IconHoverEffects/fonts/ecoicons/ecoicon.woff') format('woff'),

		url('http://tympanus.net/Development/IconHoverEffects/fonts/ecoicons/ecoicon.ttf') format('truetype'),

		url('http://tympanus.net/Development/IconHoverEffects/fonts/ecoicons/ecoicon.svg#ecoicon') format('svg');

	font-weight: normal;

	font-style: normal;

}



body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}



.ui-widget-content {

	border: 0px solid #a8a8a8;

}



.social > li> a > img {

width: 28px;

height: 29px;

display: block;

}



#nav {

	margin: 0;

	padding: 0;

	list-style: none;

	display: block;

	height: 65px;

}



/* make the LI display inline */

/* it's position relative so that position absolute */

/* can be used in submenu */

#nav li {

	float: left;

	display: block;

	width: auto;

	position: relative;

	z-index: 500;

	margin: 0 8px;

}



/* this is the parent menu */

#nav li a {

	/*display: block;

	padding: 3px 7px 0 7px;

	height: 23px;

	width: auto;

	text-decoration: none;

	color: #fff;

	font-size: 15px;

	padding-bottom: 28px;

	font-weight: 700;

	font-family: 'Open Sans Condensed', sans-serif;

	text-align: center;*/

}



.video-container {

    position: relative;

    padding-bottom: 56.25%;

    padding-top: 30px; height: 0; overflow: hidden;

}

 

.video-container iframe,

.video-container object,

.video-container embed {

    position: absolute;

    top: 0;

    left: 0;

    width: 100%;

    height: 100%;

}



#nav li a {

position: relative;

display: inline-block;

margin: 2px 0px;

outline: none;

color: #c78e61;

text-decoration: none;

text-transform: uppercase;

letter-spacing: 1px;

font-weight: 400;

text-shadow: 0 0 1px rgba(255,255,255,0.3);

font-size: 12px;

font-family: 'Open Sans Condensed', sans-serif;

text-align: center;

padding: 1px;

font-weight: 600;

text-shadow: none;

-webkit-transition: color 0.3s;

-moz-transition: color 0.3s;

transition: color 0.3s;

}



#nav li a::before,

#nav li a::after {

	position: absolute;

	left: 0;

	width: 100%;

	height: 2px;

	background: #fff;

	content: '';

	opacity: 0;

	-webkit-transition: opacity 0.3s, -webkit-transform 0.3s;

	-moz-transition: opacity 0.3s, -moz-transform 0.3s;

	transition: opacity 0.3s, transform 0.3s;

	-webkit-transform: translateY(-10px);

	-moz-transform: translateY(-10px);

	transform: translateY(-10px);

}



#nav li a::before {

	top: 0;

	-webkit-transform: translateY(-10px);

	-moz-transform: translateY(-10px);

	transform: translateY(-10px);

}



#nav li a::after {

	bottom: 0;

	-webkit-transform: translateY(10px);

	-moz-transform: translateY(10px);

	transform: translateY(10px);

}



#nav li a:hover,

#nav li a:focus {

	color: #fff;

}



#nav li a:hover::before,

#nav li a:focus::before,

#nav li a:hover::after,

#nav li a:focus::after {

	opacity: 1;

	-webkit-transform: translateY(0px);

	-moz-transform: translateY(0px);

	transform: translateY(0px);

}



/* submenu, it's hidden by default */

#nav ul {

	position: absolute;

	left: 0;

	display: none;

	margin: 0 0 0 -1px;

	padding: 0;

	list-style: none;

}



#nav ul li {

	width: 150px;

	float: left;

}



/* config do submenu down */

#nav ul a {

	

}



#nav ul a:hover {

	

}



/* fix ie6 small issue */

/* we should always avoid using hack like this */

/* should put it into separate file : ) */

* html #nav ul {

	margin: 0 0 0 -2px;

}



#header

{



width: 100%;

height: 580px;

position: relative;

margin-bottom: 20px;

}

.header-img

{

background: url('img/bg_home.jpg');

position: absolute;

top: 0;

bottom: 0;

left: 0;

right: 0;

background-position: center;

-webkit-background-size: cover;

}

.header-blur

{

background: url('img/bg_blur.jpg');

position: absolute;

top: 0;

bottom: 0;

left: 0;

right: 0;

background-position: center;

-webkit-background-size: cover;

opacity: 0;

}

.logo

{

margin: auto;

padding-top: 20px;

display: block;

position: relative;

z-index: 999;

}

.menubar

{

width: 1020px;

overflow: hidden;

display: block;

margin-left: auto;

margin-right: auto;

left: 0;

right: 0;

position: absolute;

bottom: 0;

}

.frontao

{

position: absolute;

left: 0;

bottom: 0;

}

.social

{

position: fixed;

right: 35px;

top: 0px;

list-style: none;

}



.social > li {

float: left;

margin-left: 8px;

}



.centerCT

{

max-width: 70%;

width: 1000px;

margin: auto;

}



.homeBlock

{

	font-family: Tahoma;

	font-size: 16px;

	margin: 20px 0px;

}

.homeBlock > h1 {

	font-size: 42px;

	padding: 7px;

	text-transform: uppercase;

	color: #797979;

	font-family: 'Open Sans Condensed', sans-serif;

	width: 100%;

	border-bottom: 2px solid #ccc;

	border-top: 2px solid #ccc;

	display: inline-block;

	text-align: center;

	margin-bottom: 25px;

}



.homeFace

{

	font-family: Tahoma;

	font-size: 16px;

	margin: 20px 0px;

	background: #013881;

	width: 100%;

	color: white;

	padding: 15px 0px;

	background: url('img/bginsta.jpg');

}

.homeFace h1 {

	font-size: 42px;

	padding: 7px;

	text-transform: uppercase;

	color: #fff;

	font-family: 'Open Sans Condensed', sans-serif;

	width: 100%;

	border-bottom: 2px solid #fff;

	border-top: 2px solid #fff;

	display: inline-block;

	text-align: center;

	margin-bottom: 25px;

}







h2 {

	font-size: 24px;

	text-transform: uppercase;

	font-weight: bold;

	color: #b22626;

	font-family: 'Open Sans Condensed', sans-serif;

	border-bottom: 3px solid #ccc;

	display: inline-block;

}



.alerta {

	background: #2c2c2c;

	color: white;

	padding: 4px 15px;

	border-radius: 5px;

}



#footer

{

	width: 100%;

	background: #f0f0f0;

	height: 65px;

	display: block;

	text-align: center;

	overflow: hidden;

	margin-top: 25px

}



#footer > .centerCT > span

{

padding-top: 15px;

display: block;

}



img.butausLogo {

margin-top: 10px;

float: left;

}



.botao

{

background: #CF0E00;

border: none;

padding: 4px 14px 6px 14px;

font-family: 'Open Sans Condensed', sans-serif;

text-transform: uppercase;

font-weight: bold;

color: white;

}



.botao:hover

{

background: #BA0D01;

}



.botao a, .botao i

{

color: white;

text-decoration: none;

}



.guide

{

	z-index: 999;

	position: relative;

	top: 210px;

	width: 1000px;

	margin: auto;

	font-family: 'Open Sans Condensed', sans-serif;

	text-transform: uppercase;

	border-top: 2px solid #ffffff;

	border-bottom: 2px solid #ffffff;

	height: 100px;

	padding: 15px 0px;

}

.guide .text

{

	color: white;

	font-size: 20px;

	width: 740px;

	float: left;

}

.button

{

width: 250px;

float: right;

}



/* Icon Styles */



@font-face {

	font-family: 'ecoicon';

	src:url('http://tympanus.net/Development/IconHoverEffects/fonts/ecoicons/ecoicon.eot');

	src:url('http://tympanus.net/Development/IconHoverEffects/fonts/ecoicons/ecoicon.eot?#iefix') format('embedded-opentype'),

		url('http://tympanus.net/Development/IconHoverEffects/fonts/ecoicons/ecoicon.woff') format('woff'),

		url('http://tympanus.net/Development/IconHoverEffects/fonts/ecoicons/ecoicon.ttf') format('truetype'),

		url('http://tympanus.net/Development/IconHoverEffects/fonts/ecoicons/ecoicon.svg#ecoicon') format('svg');

	font-weight: normal;

	font-style: normal;

}



.hi-icon-wrap {

	text-align: center;

	margin: 0 auto;

	padding: 0 0 3em;

}



.hi-icon {

	display: inline-block;

	font-size: 0px;

	cursor: pointer;

	margin: 0px 2px;

	width: 40px;

	height: 40px;

	border-radius: 50%;

	text-align: center;

	position: relative;

	z-index: 1;

	color: #fff;

}



a:hover {

text-decoration: none;

}

.hi-icon:after {

	pointer-events: none;

	position: absolute;

	width: 100%;

	height: 100%;

	border-radius: 50%;

	content: '';

	-webkit-box-sizing: content-box; 

	-moz-box-sizing: content-box; 

	box-sizing: content-box;

}



.hi-icon:before {

	font-family: 'ecoicon';

	speak: none;

	font-size: 24px;

	line-height: 40px;

	font-style: normal;

	font-weight: normal;

	font-variant: normal;

	text-transform: none;

	display: block;

	-webkit-font-smoothing: antialiased;

}



.hi-icon-earth {

	background-image: url('img/earth_n.png');

}

.hi-icon-earth:hover {

	background-image: url('img/earth_h.png');

}

.hi-icon-face {

	background-image: url('img/face_n.png');

}



.hi-icon-face:hover {

	background-image: url('img/face_h.png');

}

.hi-icon-artigo {

	background-image: url('img/artigo_n.png');

}

.hi-icon-insta {

	background-image: url('img/1.png');

}

.hi-icon-insta:hover {
	
	background-image: url('img/2.png');

}

.hi-icon-artigo:hover {

	background-image: url('img/artigo_h.png');

}

.hi-icon-link {

	background-image: url('img/link_n.png');

}

.hi-icon-link:hover {

	background-image: url('img/link_h.png');

}



/* Effect 1 */

.hi-icon-effect-1 .hi-icon {

	background-color: rgba(255,255,255,0.3);

	-webkit-transition: background 0.2s, color 0.2s;

	-moz-transition: background 0.2s, color 0.2s;

	transition: background 0.2s, color 0.2s;

}



.hi-icon-effect-1 .hi-icon:after {

	top: -4px;

	left: -4px;

	padding: 4px;

	box-shadow: 0 0 0 3px #fff;

	-webkit-transition: -webkit-transform 0.4s, opacity 0.4s;

	-webkit-transform: scale(.8);

	-moz-transition: -moz-transform 0.4s, opacity 0.4s;

	-moz-transform: scale(.8);

	-ms-transform: scale(.8);

	transition: transform 0.4s, opacity 0.4s;

	transform: scale(.8);

	opacity: 0;

}



/* Effect 1a */

.hi-icon-effect-1a .hi-icon:hover {

	background-color: rgba(255,255,255,1);

	color: #41ab6b;

}



.hi-icon-effect-1a .hi-icon:hover:after {

	-webkit-transform: scale(1);

	-moz-transform: scale(1);

	-ms-transform: scale(1);

	transform: scale(1);

	opacity: 1;

}

/* Icon Styles */



/* Button Styles */

.butaus:visited

{

color: #FFF;

}

.butaus {

	border: none;

	font-family: inherit;

	font-size: 18px;

	color: inherit;

	background: none;

	cursor: pointer;

	padding: 15px 60px;

	display: inline-block;

	margin: 5px 30px;

	text-transform: uppercase;

	letter-spacing: 1px;

	font-weight: 700;

	outline: none;

	position: relative;

	-webkit-transition: all 0.3s;

	-moz-transition: all 0.3s;

	transition: all 0.3s;

}



.butaus:after {

	content: '';

	position: absolute;

	z-index: -1;

	-webkit-transition: all 0.3s;

	-moz-transition: all 0.3s;

	transition: all 0.3s;

}



.butaus-1e {

	overflow: hidden;

}



.butaus-1e:after {

	width: 100%;

	height: 0;

	top: 50%;

	left: 50%;

	background: #fff;

	opacity: 0;

	-webkit-transform: translateX(-50%) translateY(-50%) rotate(45deg);

	-moz-transform: translateX(-50%) translateY(-50%) rotate(45deg);

	-ms-transform: translateX(-50%) translateY(-50%) rotate(45deg);

	transform: translateX(-50%) translateY(-50%) rotate(45deg);

}



.butaus-1e:hover,

.butaus-1e:active {

	color: #000;

	text-decoration: none;

}



.butaus-1e:hover:after {

	height: 260%;

	opacity: 1;



}



.butaus-1e:active:after {

	height: 400%;

	opacity: 1;

}



.butaus-1 {

border: 3px solid #fff;

color: #fff;

}



.guidee

{

	z-index: 999;

	position: relative;

	width: 1000px;

	margin: auto;

	font-family: 'Open Sans Condensed', sans-serif;

	text-transform: uppercase;

	height: 100px;

	padding: 15px 0px;

	font-size: 18px;

}

.guidee a{

color: white;

}

img.btnLogo {

margin-top: 10px;

float: left;

}



/* End of Button Styles */







</style>









<link rel="stylesheet" href="estilo.css" />



</head>



<body>



<div id="header">

	<div class="header-img"></div>

	<div class="header-blur"></div>

	<!-- <img src="img/igreja-pequena.png" class="frontao"/>  -->

	<ul class="social hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a">

	<li><a href="quemsomos.php"  data-ot="Quem Somos" data-ot-delay="1" class="hi-icon hi-icon-earth">Quem Somos</a></li>

	

	<li><a href="publicacoes.php"  data-ot="Publicações" data-ot-delay="1" class="hi-icon hi-icon-artigo">Publicações</a></li>

	<li><a href="http://facebook.com/memoriajp" data-ot="Facebook" data-ot-delay="1"  target="_blank" class="hi-icon hi-icon-face">Facebook</a></li>
	<li><a href="https://www.instagram.com/memoriajp" data-ot="Instagram" data-ot-delay="1"  target="_blank" class="hi-icon hi-icon-insta">Instagram</a></li>
	<li><a href="https://www.instagram.com/memoriajp" data-ot="Instagram" data-ot-delay="1"  target="_blank" class="hi-icon hi-icon-insta">Instagram</a></li>

	</ul>

	<a href="/"><img class="logo" src="img/logo_home.png"/></a>

	<!-- <div class="guide">

		<div class="text">Inicie sua visita ao site acessando o link Formação e Evolução. Nele você pode conhecer, em breves linhas, a história da cidade de João Pessoa desde a sua fundação até o século XX.</div>

		<div class="button"><a href="javascript:void(0);" onclick="javascript:introJs().start();" class="butaus butaus-1 butaus-1e">CONHECER</a></div>

	</div> -->

	<div class="menubar">

	<ul id="nav" data-intro="Este é o menu principal do nosso site. A partir daqui, você poderá acessar os diversos trabalhos que produzimos sobre a história da nossa cidade.">

					<li><a href="index.php">HOME</a>

						<div class="clear"></div></li>
					
					<!-- <li><a href="#"  title="EM MANUTENÇÃO">Definições</a>

						<div class="clear"></div></li> -->
					<li><a href="definicoes.php" data-step="" data-intro="a colocar.">DEFINIÇÕES</a>

						<div class="clear"></div></li>
					<li><a href="centro-historico.php" data-step="2" data-intro="Aqui você pode obter mais informações sobre o nosso Centro Histórico, quais orgãos são responsáveis por sua gestão e conceitos básicos sobre patrimônio e tombamento.">CENTRO HISTÓRICO</a>

						<div class="clear"></div></li>

					<li><a href="formacao-e-evolucao.php" data-step="3" data-intro="Sugerimos que comece pelo link de Formação e Evolução, que conta a história da cidade através de uma linha do tempo.">FORMAÇÃO E EVOLUÇÃO</a>

						<div class="clear"></div></li>

					<li><a href="acervo-patrimonial.php" data-step="4" data-intro="Conheça a história das edificações e dos espaços públicos tombados pelo IPHAN e IPHAEP.">ACERVO PATRIMONIAL</a>

						<div class="clear"></div></li>

					<li><a href="vivencias.php" data-step="5" data-intro="Aqui convidamos nossos visitantes a conhecer a história de diferentes bens de interesse patrimonial da cidade por meio de vídeos curtas-metragens.">VIVÊNCIAS</a>

						<div class="clear"></div></li>
					
					<li><a href="memoria-social.php" data-step="6" data-intro="Nesta página registramos, através de depoimentos, as memórias, hábitos e costumes de gerações passadas.">MEMÓRIA SOCIAL</a>

						<div class="clear"></div></li>


					<li><a href="postais.php" data-step="7" data-intro="Envie postais com imagens marcantes da nossa cidade para os seus amigos.">POSTAIS</a>

						<div class="clear"></div></li>

					<li><a href="galeria.php" data-step="" data-intro="a colocar.">GALERIA</a>

						<div class="clear"></div></li>


					<!-- <li><a href="#" title="EM MANUTENÇÃO">GALERIA</a>

						<div class="clear"></div></li> -->

					<li><a href="jogos.php" data-step="8" data-intro="Divirta-se e teste seus conhecimentos adquiridos em outros links do site com os jogos que preparamos.">JOGOS</a>

						<div class="clear"></div></li>

					<li><a href="concurso.php" data-step="9" >CONCURSOS</a>

						<div class="clear"></div></li>
				

				</ul>

	</div>

</div>



