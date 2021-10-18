<?php
include("header.php");

?>

<meta property="og:image" content="http://www.memoriajoaopessoa.com.br/img/facebook.png"/>
<meta property="og:title" content="Memoria Social - Memória João Pessoa"/>
<meta property="og:url" content="http://www.memoriajoaopessoa.com.br/concurso.jsf"/>
<meta property="og:site_name" content="Memória João Pessoa"/>
<meta property="og:type" content="website"/>
<title>Concurso - Memória João Pessoa</title>


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
.filtrar {

color: #FF0000;

font-size: 26px;

font-weight: bold;

margin-left: 40px;

font-family: 'Open Sans Condensed', sans-serif;

text-transform: uppercase;

}

</style>

<div class="centerCT">
       	<!-- Begin Page -->
        <h1>Concursos</h1>
        <p align="justify">Momentos especiais são guardados e rememorados através de fotografias. Com este objetivo, promovemos em datas marcantes, como o aniversário de João Pessoa, concursos fotográficos visando incentivar a população a registrar a cidade, sob o “olhar” de cada um. Estes diversos olhares fazem a memória do lugar mais viva e, assim, mais preservada. Neste link, guardamos as memórias dos diversos concursos anuais realizados, para que todos possam conhecer o “olhar” de todos.</p>
		<br/><br/> 
        <table width="97%" height="199" align="center" border="0" cellpadding="0" cellspacing="0"></table>
        <tr>
        <tr>
            <td>
                <div style="float:left; margin-left:20px;" data-ot="João Pessoa em estado de exceção: um olhar da minha janela"><a href="https://issuu.com/memoriajpa/docs/_lbum_de_fotos_do_concurso_2021_11_"><img src="img\concurso\capas\2021.jpg"/></a></div>
                <div style="float:left; margin-left:20px;" data-ot="Memória: dentro e fora"><a href="https://issuu.com/memoriajpa/docs/_lbum_de_fotos_do_concurso_2019_1_"><img src="img\concurso\capas\2019.jpg"/></a></div>
                <div style="float:left; margin-top:20px;margin-left:20px;" data-ot="Recantos da minha cidade"><a href="https://issuu.com/memoriajpa/docs/album_concurso_-_2018"><img src="img\concurso\capas\2018.jpg"/></a></div>
                <div style="float:left; margin-top:20px;margin-left:20px;" data-ot="Minha Memória João Pessoa"><a href="https://issuu.com/memoriajpa/docs/concurso_2017"><img src="img\concurso\capas\2017.jpg"/></a></div>
                <div style="float:left; margin-top:20px;margin-left:20px;" data-ot="Minha Memória João Pessoa"><a href="https://issuu.com/memoriajpa/docs/concurso_2016"><img src="img\concurso\capas\2016.jpg"/></a></div>            </td>
        </tr>
    </tr>
</div>

<?php
    include("footer.php");
?>