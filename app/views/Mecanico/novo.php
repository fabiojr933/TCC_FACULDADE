				
				<div class="col-9 home">
				<div class="caixa">					
					<div class="conteudo pt-3">
						<div class="titulo mb-2"><i class="fas fa fa-plus-circle" aria-hidden="true"></i> Cadastro de mecanico</span></div>
						<div class="base-caixa formulario">							
							<form action="<?php echo URL_BASE."mecanico/salvar" ?>" method="POST">
							<?php  
								$this->verMSG();
								$this->verERRO();
							?>
	
								<div class="rows">									
									<div class="col-8"> 
										<div class="rows">
											<div class="col-12">
												<span class="text-label">Nome da mecanico</span>
												<input type="text" name="nome" value="<?php echo isset($lista) ? $lista->nome : null ?>" placeholder="Digite a descrição" class="form-campo">
											</div>									
													
											<div class="col-12 mt-4 pb-4">
												<input type="hidden" name="id" value="<?php echo isset($lista) ? $lista->id : null ?>"/>
												<input type="submit" value="Cadastrar" class="btn d-table m-auto">
											</div>
										</div>
									</div>
									
								</div>
							</form>
						</div>
					
					</div>
				</div>
			</div>	