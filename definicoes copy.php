<?php
include("header.php");

?>
<meta property="og:image" content="http://www.memoriajoaopessoa.com.br/img/facebook.png"/>
<meta property="og:title" content="Definições - Memória João Pessoa"/>
<meta property="og:url" content="http://www.memoriajoaopessoa.com.br/definicoes.jsf"/>
<meta property="og:site_name" content="Memória João Pessoa"/>
<meta property="og:type" content="website"/>
<title>Definições - Memória João Pessoa</title>

<style>
.titulo{
	
	color:white;


</style>


<!-- Latest compiled and minified JavaScript -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.js"></script>
	<script>
		$(document).ready(function() {
		  $('btn-danger').click(function(){
			//get collapse content selector
			var collapse_content_selector = $(this).attr('href');					
 
			//make the collapse content to be shown or hide
			var toggle_switch = $(this);
			$(collapse_content_selector).toggle(function(){
			  if($(this).css('display')=='none'){
                                //change the button label to be 'Show'
				toggle_switch.html('Mais +');
			  }else{
                                //change the button label to be 'Hide'
				toggle_switch.html('- Menos');
			  }
			});
		  });
 
		});	
		</script>
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
		td
		{
		padding-right: 25px !important;
		}
		</style>





<div class="centerCT">
        <!-- Begin Page -->
        <h1>Definições</h1>
        <p align="justify"> </p>
        <table width="97%" height="199" align="center" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="69"><br/><br/>


        <?php

	      		  require_once '../../../galaxy/c.php';
   

			$sql = "SELECT id,conteudo,imagem FROM definicoes";
			
		 $q = $pdo->prepare($sql);
         $q->execute(['%conteudo']);
          $q->execute(['%imagem']);
         $q->setFetchMode(PDO::FETCH_ASSOC);


                                while ($r = $q->fetch()) {

                                    echo '
 <table border="0" width="100%">
 
         <tr>
         
         <!-- Coluna Texto -->
         <td valign="top" width="60%">
         
		 <span style="text-align: justify; display:block;">'.$r["conteudo"].' </span>
         
         </td>

          <!-- Coluna Imagens -->
         <td valign="top" width="40%" align="center"> 
         
         <img src="img/definicoes/'.$r["imagem"].'" />
         
         </td>
         
         </tr>
         
        
         </table><br/><br/><br/><br/>



                                    ';



                                }





                            ?>








<?php
include("footer.php");

?>