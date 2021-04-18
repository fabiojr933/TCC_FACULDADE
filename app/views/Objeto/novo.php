				
				<div class="col-9 home">
				<div class="caixa">					
					<div class="conteudo pt-3">
						<div class="titulo mb-2"><i class="fas fa fa-plus-circle" aria-hidden="true"></i> Cadastro de objeto</span></div>
						<div class="base-caixa formulario">							
							<form action="<?php echo URL_BASE."objeto/salvar" ?>" method="POST">
							<?php  
								$this->verMSG();
								$this->verERRO();
							?>
	
																
									<div class="col-12"> 
										<div class="rows">
											<div class="col-12">
												<span class="text-label">Nome do objeto</span>
												<input type="text" name="descricao" value="<?php echo isset($lista) ? $lista->descricao : null ?>" placeholder="Digite a descrição" class="form-campo">
											</div>		
											<div class="col-4">
												<span class="text-label">Nome da placa</span>
												<input type="text" name="placa" value="<?php echo isset($lista) ? $lista->placa : null ?>" placeholder="Digite da placa" class="form-campo">
											</div>	
											<div class="col-4">
												<span class="text-label">Ano do veiculo</span>
												<input type="text" name="ano" value="<?php echo isset($lista) ? $lista->ano : null ?>" placeholder="Digite o ano" class="form-campo">
											</div>	
											<div class="col-4">
												<span class="text-label">Modelo do veiculo</span>
												<input type="text" name="modelo" value="<?php echo isset($lista) ? $lista->modelo : null ?>" placeholder="Digite o modelo" class="form-campo">
											</div>
											<div class="col-12">
												<span class="text-label">Observação</span>
												<input type="text" name="observacao" value="<?php echo isset($lista) ? $lista->observacao : null ?>" placeholder="Digite a observacao" class="form-campo">
											</div>				
													
											<div class="col-12 mt-4 pb-4">
												<input type="hidden" name="id" value="<?php echo isset($lista) ? $lista->id : null ?>"/>
												<input type="submit" value="Cadastrar" class="btn d-table m-auto">
											</div>
										</div>
									</div>
									
								
							</form>
						</div>
					
					</div>
				</div>
			</div>	