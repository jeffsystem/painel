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
			<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Adicionar Serviços</h3>
						</div>
						<div class="box-body">

						<div class="form-group">
							<label for="exampleInputName">Nome do serviço</label>
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="serviço">
						</div>

						<div class="form-group">
							<label for="exampleInputName">Valor</label>
							<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Preço">
						</div>

					<div class="box-footer">
						<button type="submit" class="btn btn-success pull-right">Cadastrar</button>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php
require_once (localView().'footer.php'); 

?>