<!DOCTYPE html>


						<html>
						<head>
						<meta charset="utf-8">
						<title> svendas </title>
						<link rel="stylesheet" type="text/css" href="layout.css">
                       <script src="jquery-3.5.1.min.js"></script>
                       <script src="scripts.js"></script>
						<body>
							<div class="topo"> 
					         <div class="logo">         	
                                 <img src="logo.png" width="230" height="230">
                                 
					         </div>      
					         <div class="menu">
                             <ul>

<li><a href="index.php?p=vc">Cadastrar equipamento</a></li>
							 
<li><a href="index.php?p=cc">Cadastrar cliente</a></li>

<li><a href="index.php?p=cf">Consultar estoque</a></li>

<li><a href="index.php?p=rv">Realizar venda</a></li>

<li><a href="index.php?p=home"></a></li>

</ul>

 </div>
					         
</div>
<div class="fundo"> 
	                         <div class="imgfundo">            
                                 <img src="RET.png" width="80" height="80">                      
                            </div>                        
	                         <div class="imgfundo1">
                                 <img src="RET.png" width="80" height="80" >                                                           
                         </div>							
                                         
<div id="conteudo" class="conteudo">
<?php

if(isset($_GET['p'])){

    $pagina = $_GET['p'];

}else{

    $pagina = 'home';

}

if($pagina == 'cc'){

    include "cliente_form.html";

}elseif($pagina == 'vc'){

    include "equipamento_form.html";

}elseif($pagina == 'cf'){

    include "estoque_ver.php";

}elseif($pagina == 'rv'){

    include "venda_form.html";

}



?>				

						</div> 
						</body>
						</head>
                        </html>
                      