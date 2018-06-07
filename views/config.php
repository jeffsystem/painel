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
							<h3 class="box-title">Cadastrar informações</h3>
						</div>
						<div class="box-body no-padding">

						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputName">CNPJ</label>
								<input type="text" class="form-control" id="exampleInputEmail1" placeholder="00.000.000/0001-00">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputName">Nome da empresa</label>
								<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nome fantasia">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputName">E-mail</label>
								<input type="email" class="form-control" id="exampleInputPassword1" placeholder="seuemail@seusite.com">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputName">Telefone:</label>
								<input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Telefone">
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputName">CEP</label>
								<input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Cep">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputName">Rua</label>
								<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Rua">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputName">Número</label>
								<input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Endereço">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputName">Bairro</label>
								<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Bairro">
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputName">Cidade</label>
								<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Cidade">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputName">Estado</label>
								<input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Estado">
							</div>
						</div>
						
						<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputName">Horário de abertura</label>
								<input type="tel" class="form-control" id="exampleInputPassword1" placeholder="08:00">
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputName">Horário de almoço (início)</label>
								<input type="tel" class="form-control" id="exampleInputPassword1" placeholder="12:00">
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputName">Horário de almoço (fim)</label>
								<input type="text" class="form-control" id="exampleInputPassword1" placeholder="13:00">
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputName">Horario de saída</label>
								<input type="text" class="form-control" id="exampleInputPassword1" placeholder="18:00">
							</div>
						</div>

						<div class="col-md-6">
						<label for="exampleInputName">Atividade</label>
						<select class="form-control form-control-sm">
							<option value="0">Selecione</option>
							<option value="1">Salão de beleza</option>
							<option value="2">Barbearia</option>
							<option value="3">Lava Jato</option>
							<option value="4">Dentista</option>
						</select>
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputFile">Sua Logo</label>
								<input type="file" class="form-control" id="exampleInputFile">
							</div>
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