<?php
include("header.php");

?>
<meta property="og:image" content="http://www.memoriajoaopessoa.com.br/img/facebook.png"/>
<meta property="og:title" content="Quem Somos - Memória João Pessoa"/>
<meta property="og:url" content="http://www.memoriajoaopessoa.com.br/quem-somos.jsf"/>
<meta property="og:site_name" content="Memória João Pessoa"/>
<meta property="og:type" content="website"/>
<title>Quem Somos - Memória João Pessoa</title>

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
			position: absolute;
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
			margin-right: 160px;
			cursor: pointer;
			
		    -webkit-transition: all 0.5s ease;
		    -moz-transition: all 0.5s ease;
		    -o-transition: all 0.5s ease;
		    transition: all 0.5s ease;
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
		font-family: 'One Sans Condensed', sans-serif;
		font-size: 16px;
		}
		
		.membro {
		width: 100%;
		display: block;
		margin: 10px 0;
		min-height: 60px;
		padding: 15px;
		background-color: white;
		border-radius: 5px;
		overflow: hidden;
		font-family: 'Open Sans Condensed', sans-serif;
		font-size: 18px;
		cursor: pointer;
		}
		
		.membro-img
		{
    		height: 45px;
		}
		.imgdiv
		{
		
			border-radius: 111px;
    		width: 45px;
    		height: 45px;
			margin-right: 10px;
			overflow:hidden;
			float: left;
		}
		
		.membro-nome
		{
			color: #e61500;
			font-family: 'Open Sans Condensed', sans-serif;
			font-size: 22px;
		}
		
		.membro-left
		{
		width: 500px;
		float: left;
		text-align: justify;
		display: block;
		overflow: hidden;
		position: relative;
top: 50%;

		}
		
		.ui-widget-content, body
		{
		background: #f5f5f5 !important;
		}
		
		.div
		{
		float: right; width: 440px;
		}
	
		</style>

        <div class="centerCT">
        	<h1>Quem Somos</h1>
        	<div style="width: 100%; height: 33px;display: block;">
        	<img style="float: right;" src="img/timetop.png" alt="" />
        	</div>

                     <?php

                        require_once '../../../galaxy/saturno.php';

                        $query = "SELECT id,nome,texto,img,funcao,entrou,saiu FROM equipe";

                        if ($stmt = $mysqli->prepare($query)) {

                            /* execute statement */
                            $stmt->execute();

                            /* bind result variables */
                            $stmt->bind_result($id,$nome,$texto,$img,$funcao,$entrou,$saiu);

                            /* fetch values */
                            while ($stmt->fetch()) {

                                echo '


                                     	         	<script>
					$(document).ready(function(){
					  $("#membro'.$id.'").click(function(){
						$("#texto'.$id.'").toggle(400);
						var toggleSize = $("#foto'.$id.'").width() == 120 ? "45px" : "120px";
						var toggleDiv = $("#foto'.$id.'").width() == 120 ? "440px" : "360px";
						$("#div'.$id.'").animate({ "width" : toggleDiv});
						$("#foto'.$id.'").animate({ "width" : toggleSize, "height" : toggleSize });
						$("#imgdiv'.$id.'").animate({ "width" : toggleSize, "height" : toggleSize });
						
					  });
					});
					</script>
					
					
	        		<div class="membro" id="membro'.$id.'"><div class="membro-left"><div class="imgdiv" id="imgdiv'.$id.'"><img id="foto'.$id.'" class="membro-img" src="img/membros/'.$img.'.jpg" alt="membro'.$nome.'"/></div>
	        		<div id="div'.$id.'" class="div"><span class="membro-nome"><h:outputText value="'.$nome.'" escape="false" /></span>
	        		<div id="texto'.$id.'" style="display:none;"><h:outputText value="'.$texto.'" escape="false" /></div>
	        		</div>
	        		</div>
	        		<div style="float: right; width: 380px; display: block; height: 40px;background: url(\'img/timeline.jpg\');">
					  <div data-ot="'.$entrou.' até '.$saiu.'" data-ot-delay="1" style="float: left; margin-left: 0px; width: 380px; background-color: #009CFF; height: 10px;margin-top: 15px; border-radius: 15px;"></div>
					</div>
	        		</div>


                                ';
                            }
                        }

                        ?>



	        	
    	
        <table width="97%" height="199" align="center" border="0" cellpadding="0" cellspacing="0">
     <tr>
        <td height="69">
        <br/>
        
        </td>
        </tr>
        </table>
        
        <!-- End of Page -->
        
        </div>














<?php
include("footer.php");

?>