				
				<div class="col-9 home">
				<div class="caixa">					
					<div class="conteudo pt-3">
						<div class="titulo mb-2"><i class="fas fa fa-plus-circle" aria-hidden="true"></i> Cadastro de produto</span></div>
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
												<span>Inserir produto</span>
											</label>
											<input type="file" name="arquivo" id="arquivo" onchange="pegaArquivo(this.files)"> 
										</div>
										<div id="uploadStatus"></div>
									</div>
									<div class="col-8"> 
										<div class="rows">
											<div class="col-12">
												<span class="text-label">Nome do produto</span>
												<input type="text" placeholder="Digite seu nome" class="form-campo">
											</div>										
											<div class="col-4">
												<span class="text-label">Referencia</span>
												<input type="text" placeholder="Digite a Referencia" class="form-campo">
											</div>											
											<div class="col-4">
												<span class="text-label">Categoria</span>
												<select class="form-campo">
													<option>Categoria</option>
													<option>Categoria</option>
													<option>Categoria</option>
												</select>
											</div>												
											<div class="col-4">
												<span class="text-label">Data Cadastro</span>
												<input type="date" placeholder="Digite a data Cadastro" class="form-campo">
											</div>									
											<div class="col-4">
												<span class="text-label">Preço Custo</span>
												<input type="text" placeholder="Digite seu endereço" class="form-campo">
											</div>
											<div class="col-4">
												<span class="text-label">Lucro (%)</span>
												<input type="text" placeholder="Digite seu Preço Custo" class="form-campo">
											</div>
											<div class="col-4">
												<span class="text-label">Preço Venda</span>
												<input type="text" placeholder="Digite Preço Venda" class="form-campo">
											</div>
											<div class="col-10">
												<span class="text-label">Observação</span>
												<input type="text" placeholder="Digite Preço Venda" class="form-campo">
											</div>											
											<div class="col-1"><br><br>
												<span class="text-checkbox">Ativo</span>
												<input type="checkbox" checked="checked" placeholder="Digite sua Observação" class="form-campo">
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