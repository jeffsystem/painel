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
				<form class="formulario" enctype="multipart/form-data" name="formulario" id="formulario" >
					<div class="box box-primary box-config">
						<div class="box-header with-border">
							<h3 class="box-title">Cadastrar informações</h3>
						</div>
						<div class="box-body no-padding">

						<div class="col-md-6">
							<div class="form-group">
								<label for="cnpj">CNPJ</label>
								<input type="text" class="form-control cnpj" value="06.887.075/0001-12" id="cnpj" disabled placeholder="00.000.000/0001-00">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="nm_empresa">Nome da empresa</label>
								<input type="text" class="form-control nm_empresa" id="nm_empresa" placeholder="Nome fantasia" required>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="email">E-mail</label>
								<input type="email" class="form-control email" id="email" placeholder="seuemail@seusite.com" required>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="telefone">Telefone:</label>
								<input type="tel" class="form-control telefone" id="telefone" placeholder="Telefone" required>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
								<label for="cep">CEP</label>
								<input type="tel" class="form-control cep" id="cep" placeholder="Cep" required>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="logradouro">Rua</label>
								<input type="text" class="form-control logradouro" id="logradouro" placeholder="Rua" required>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="numero">Número</label>
								<input type="tel" class="form-control numero" maxlength="6" id="numero" placeholder="Endereço" required>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="bairro">Bairro</label>
								<input type="text" class="form-control bairro" maxlength="100" id="bairro" placeholder="Bairro" required>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
								<label for="cidade">Cidade</label>
								<input type="text" class="form-control cidade" id="cidade" placeholder="Cidade" required>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="estado">Estado</label>
								<input type="tel" class="form-control estado"maxlength="2" id="estado" placeholder="Estado" required>
							</div>
						</div>
						
						<div class="col-md-3">
							<div class="form-group">
								<label for="horario_abrir">Horário de abertura</label>
								<input type="tel" class="form-control horario_abrir" id="horario_abrir" placeholder="08:00" required>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label for="iniciar_almoco">Horário de almoço (início)</label>
								<input type="tel" class="form-control iniciar_almoco" id="iniciar_almoco" placeholder="12:00" required>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label for="voltar_almoco">Horário de almoço (fim)</label>
								<input type="text" class="form-control voltar_almoco" id="voltar_almoco" placeholder="13:00" required>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label for="horario_fechar">Horario de saída</label>
								<input type="text" class="form-control horario_fechar" id="horario_fechar" placeholder="18:00" required>
							</div>
						</div>

						<div class="col-md-6">
						<label for="atividade">Atividade</label>
						<select class="form-control form-control-sm atividade" id="atividade" required>
							<option value="0">Selecione</option>
							<option value="1">Salão de beleza</option>
							<option value="2">Barbearia</option>
							<option value="3">Lava Jato</option>
							<option value="4">Dentista</option>
						</select>
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
								<label for="logo">Sua Logo</label>
								<input type="file" class="form-control logo" id="logo">
							</div>
						</div>

					<div class="box-footer">
						<button type="submit" class="btn btn-success pull-right">Atualizar</button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</section>
</div>

<?php
	require_once (localView().'footer.php'); 
?>

<script src="https://app.clubeagn.com.br/bower_components/jquery-loading-overlay-master/dist/loadingoverlay.min.js"></script>
<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script src="<?php url(); ?>components-extras/jQuery-Mask-Plugin-master/dist/jquery.mask.js"></script>
<script src="../dist/js/config.js"></script>

<div id="modal_generico" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body body_erro">
      </div>
    </div>
  </div>
</div>