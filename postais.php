<?php
include("header.php");

?>

<meta property="og:image" content="http://www.memoriajoaopessoa.com.br/img/facebook.png"/>
<meta property="og:title" content="Postais - Memória João Pessoa"/>
<meta property="og:url" content="http://www.memoriajoaopessoa.com.br/memoria-social.jsf"/>
<meta property="og:site_name" content="Memória João Pessoa"/>
<meta property="og:type" content="website"/>
<title>Postais - Memória João Pessoa</title>

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
    width: 270px;
    height:200;
    margin-right: 20px;
    display: block;
    overflow: hidden;
    margin-bottom: 20px
}


.item > div > a > img {
    margin: 0px 0px 0px -50px;
    transition: all 1s ease 0s;
}

.item > div > a:hover > img {
    margin: 0px 0px 0px -50px;
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
    text-align: center;
    max-width: 200px;
    z-index: 999;
    position: relative;
}
</style>

<div class="centerCT">
    <!-- Begin Page -->
    <h1>Postais</h1>
    <p align="justify"> Enviar postais era uma prática recorrente em um passado ainda próximo. Faça o mesmo: envie um dos postais aqui disponíveis para um amigo, compartilhando imagens de cenários marcantes e de importância histórica para a cidade de João Pessoa. </p>
    <table width="97%" height="199" align="center" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="69">


            <table width="1000px" border="0">
                <tr>
                    <td>


                        <?php

                        require_once '../../../galaxy/c.php';

                        $sql = "SELECT id,miniatura,nome,postal FROM postais";
                        
                        
                            $q = $pdo->prepare($sql);
                             $q->execute(['%id']);
                             $q->execute(['%miniatura']);
                            $q->setFetchMode(PDO::FETCH_ASSOC);

                    
                            while ($r = $q->fetch()) {

                                echo '

                                <div class="item">


                                <a href="ver-postal.php?i='.$r["id"].'" data-lity><img src="postais/'.$r["miniatura"].'"  /></a>



                                </div>



                                ';
                            }

                        ?>




                    </td>
                </tr>
            </table> 

        </td>
    </tr>
</table>
</div>


<?php
include("footer.php");

?>