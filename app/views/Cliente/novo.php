<div class="col-9 home">
	<div class="caixa">
		<div class="topo">
			<a href="" class="mobmenu"><i class="fas fa-bars"></i></a>
			<a href="index.html" class="logo"><img src="" class="float-left mr-2">
				<p class="d-inline-block">Sistema de Ordem de Serviço</p>
			</a>

		</div>
<?php
		$this->verMSG();
		$this->verERRO();
?>

		<div class="conteudo pt-5 mt-3">
			<div class="titulo mb-2"><i class="fas fa fa-plus-circle" aria-hidden="true"></i> Cadastro de clientes</span></div>
			<div class="base-caixa formulario">
				<form action="<?php echo URL_BASE . "Cliente/salvar" ?>" method="POST">
					<div class="rows">
						<div class="col-12">
							<h4 class="text-uppercase pt-2">Dados pessoais</h4>
						</div>
						<div class="col-12">
							<span class="text-label">Cliente</span>
							<input type="text" name="nome" value="<?php echo isset($lista) ? $lista->nome : null ?>" placeholder="Digite seu nome" class="form-campo">
						</div>
						<div class="col-4">
							<span class="text-label">Endereço</span>
							<input type="text" name="endereco" value="<?php echo isset($lista) ? $lista->endereco : null ?>" placeholder="Digite seu endereço" class="form-campo">
						</div>
						<div class="col-4">
							<span class="text-label">Bairro</span>
							<input type="text" name="bairro" value="<?php echo isset($lista) ? $lista->bairro : null ?>" placeholder="Digite seu bairro" class="form-campo">
						</div>
						<div class="col-4">
							<span class="text-label">Cidade</span>
							<input type="text" name="cidade" value="<?php echo isset($lista) ? $lista->cidade : null ?>" placeholder="Digite seu cidade" class="form-campo">
						</div>
						<div class="col-3">
							<span class="text-label">Telefone</span>
							<input type="text" name="telefone" value="<?php echo isset($lista) ? $lista->telefone : null ?>" placeholder="Digite seu telefone" class="form-campo">
						</div>
						<div class="col-3">
							<span class="text-label">Cep</span>
							<input type="text" name="cep" value="<?php echo isset($lista) ? $lista->cep : null ?>" placeholder="Digite seu cep" class="form-campo">
						</div>
						<div class="col-6">
							<span class="text-label">Logradouro</span>
							<input type="text" name="logradouro" value="<?php echo isset($lista) ? $lista->logradouro : null ?>" placeholder="Digite seu logradouro" class="form-campo">
						</div>

						<div class="col-12 mt-4 pb-4">
							<input type="hidden" name="id" value="<?php echo isset($lista) ? $lista->id : null ?>"/>
							<input type="submit" value="Cadastrar" class="btn d-table m-auto">
						</div>
					</div>
				</form>
			</div>

		</div>
	</div>