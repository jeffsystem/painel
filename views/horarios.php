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
			<div class="col-md-12 col-sm-6 col-xs-12">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Horários</h3>
						</div>
						<div class="box-body">

						<div class="col-md-4">
							<div class="form-group">
								<label for="horario">Horário do profissional</label>
								<input type="text" class="form-control add_hora" id="horario" placeholder="12:30">
							</div>
						</div>

						<div class="col-md-4">
							<label for="">Serviço desejado</label>
							<select id="options_servicos" class="form-control form-control-sm">
								<option value="0">Selecione</option>
							</select>
						</div>
						
						<div class="col-md-4">
							<label for="">Nome do profissional</label>
							<select id="options_funcionarios" class="form-control form-control-sm">
								<option value="0">Selecione</option>
							</select>
						</div>
					</div>
					<div class="box-footer">
						<button type="button" class="btn btn-success pull-right btn_add_horario">Cadastrar</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Horários e profissionais</h3>
				</div>
				
				<div class="box-body">
				<table id="tabela_lista_horarios" class="table table-striped" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Horário</th>
								<th>Nome</th>
								<th>Status</th>
							</tr>
						</thead>
					</table>	
				</div>
			</div>
</div>

<?php

	require_once ('../footer.php'); 

?>

<script src="https://app.clubeagn.com.br/bower_components/jquery-loading-overlay-master/dist/loadingoverlay.min.js"></script>
<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>

<script src="<?php url(); ?>components-extras/jQuery-Mask-Plugin-master/dist/jquery.mask.js"></script>

<script src="../dist/js/horarios.js"></script>
<script src="../dist/js/add_horarios.js"></script>
<script src="../dist/js/lista_horarios.js"></script>

<div id="modal_generico" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body body_erro">
      </div>
    </div>
  </div>
</div>