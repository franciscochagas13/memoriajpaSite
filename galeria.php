<?php
include("header.php");
?>

<style>
.titulo{
	
	color:white;

}

</style>

<div class="centerCT">
       	<!-- Begin Page -->
        		<h1>Galeria</h1>
		          <p align="justify"> Acesse nossa galeria de fotografias antigas da cidade e conheça como foram no passado os bairros do Centro, Varadouro, Trincheiras, Jaguaribe e Tambiá. </p>
        <span class="filtrar"><div class="alerta" style="width:400px;"><b>Atenção:</b> Clique em uma região marcada do mapa: </div></span>
         <table width="1000px" border="0" align="center">
        <tr>
        <td>
        <img src="img/galleria/mapa.jpg" border="0" usemap="#Map" />
<map name="Map" id="Map">
<area shape="circle" coords="218,104,23" href="galeria-categorias.jsf?regiao=varadouro" />
<area shape="circle"  coords="370,89,18" href="#" />
<area shape="circle" coords="763,262,18" href="#" />
<area shape="circle" coords="368,301,19" href="galeria-categorias.jsf?regiao=centro" />
<area shape="circle" coords="427,676,18" href="#" />
<area shape="circle" coords="464,731,18" href="#" />
</map>
        </td>
        </tr>
        </table> 

        </div>
        


<?php
include("footer.php");
?>