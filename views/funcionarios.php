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
<link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" type="text/css">

<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Cadastrar funcionários</h3>
						</div>
						<div class="box-body">

						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputName">Nome do Funcionário</label>
								<input type="text" class="form-control" id="exampleInputText" placeholder="Nome">
							</div>
						</div>

                        <div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputFile">Foto do Funcionário</label>
								<input type="file" class="form-control" id="exampleInputFile">
							</div>
						</div>

					</div>
					<div class="box-footer">
						<button type="submit" class="btn btn-success pull-right">Cadastrar</button>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section class="content">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Lista de funcionários</h3>
						</div>
						<div class="box-body">
                        <table id="tabela_lista_funcionarios" class="table table-striped" cellspacing="0" width="100%">
						    <thead>
							    <tr>
                                    <th>Nome</th>
                                    <th>Status</th>
                                    <th>Ação</th>
							    </tr>
						    </thead>
					    </table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>


<?php
require_once ('../footer.php'); 

?>

<script src="https://app.clubeagn.com.br/bower_components/jquery-loading-overlay-master/dist/loadingoverlay.min.js"></script>
<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script src="../dist/js/listar_funcionarios.js"></script>