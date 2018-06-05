<?php
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//    CMSLite Versão 1.1                    //
//    Developer: Agencia 3WEB               //
//    Site: agencia3web.com                 //
//    GitHub: github.com/jhowbhz/CMSLite    //
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

require_once('../top.php'); 
require_once('../header.php'); 
require_once('../sidebar.php');

?>

<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12 col-sm-6 col-xs-12">
				Cadastrar dados da empresa <br />(CNPJ, ATIVIDADE, E-MAIL,NOME DA EMPRESA, HORARIO FUNCIONAMENTO)
			</div>
		</div>
	</section>
</div>

<?php

	require_once (localView().'footer.php'); 

?>