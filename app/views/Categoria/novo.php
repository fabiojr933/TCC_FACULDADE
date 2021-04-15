				
				<div class="col-9 home">
				<div class="caixa">					
					<div class="conteudo pt-3">
						<div class="titulo mb-2"><i class="fas fa fa-plus-circle" aria-hidden="true"></i> Cadastro de categoria</span></div>
						<div class="base-caixa formulario">							
							<form action="" method="">
							<?php  
								$this->verMSG();
								$this->verERRO();
							?>
	
								<div class="rows">
									<div class="col-4 img-up">
										<div class="campo-upload">
											<label for="arquivo">
												<img src="<?php echo URL_BASE ?>assets/img/img-semproduto.png" id="imgUp" class="img-fluido">
												<span>Inserir categoria</span>
											</label>
											<input type="file" name="arquivo" id="arquivo" onchange="pegaArquivo(this.files)"> 
										</div>
										<div id="uploadStatus"></div>
									</div>
									<div class="col-8"> 
										<div class="rows">
											<div class="col-12">
												<span class="text-label">Nome da categoria</span>
												<input type="text" placeholder="Digite seu nome" class="form-campo">
											</div>									
													
											<div class="col-12 mt-4 pb-4">
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