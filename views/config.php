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
						<div class="box-body">

						<div class="form-group">
							<label for="exampleInputEmail1">CNPJ</label>
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
						</div>

						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						</div>

						<div class="form-group">
							<label for="exampleInputFile">Logo</label>
							<input type="file" id="exampleInputFile">
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