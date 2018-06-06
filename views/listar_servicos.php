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
			<table class="table">
			<thead>
			<h4>Serviços Cadastrados</h4>
				<tr>
				<th scope="col">Serviço</th>
				<th scope="col">Preço</th>
				<th scope="col">Ação</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<td>Corte simples de cabelo de mulher</td>
				<td>R$ 25,00</td>
				<td><button type="button" class="btn btn-danger">Excluir</button>
				<button type="button" class="btn btn-warning">Editar</button></td>
				</tr>
			</tbody>
		</table>
			</div>
		</div>
	</section>
</div>

<?php
require_once (localView().'footer.php'); 

?>