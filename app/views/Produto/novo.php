				
				<div class="col-9 home">
				<div class="caixa">					
					<div class="conteudo pt-3">
						<div class="titulo mb-2"><i class="fas fa fa-plus-circle" aria-hidden="true"></i> Cadastro de produto</span></div>
						<div class="base-caixa formulario">							
							<form action="<?php echo URL_BASE."produto/salvar" ?>" method="POST" enctype="multipart/form-data">
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
												<input type="text" name="descricao" placeholder="Digite seu nome" class="form-campo">
											</div>										
											<div class="col-4">
												<span class="text-label">Referencia</span>
												<input type="text" name="referencia" placeholder="Digite a Referencia" class="form-campo">
											</div>											
											<div class="col-4">
												<span class="text-label">Categoria</span>
												<select class="form-campo" name="categoria">
												<?php foreach($listaCategoria as $key => $categoria) {  ?>
													<option value="<?php echo $categoria->id ?>"><?php echo $categoria->descricao ?></option>
													<?php } ?>
												</select>
											</div>												
											<div class="col-4">
												<span class="text-label">Data Cadastro</span>
												<input type="date" name="data_vencimento" placeholder="Digite a data do vencimento" class="form-campo">
											</div>									
											<div class="col-4">
												<span class="text-label">Preço Custo</span>
												<input type="text" name="preco_custo" placeholder="Digite seu endereço" class="form-campo">
											</div>
											<div class="col-4">
												<span class="text-label">Lucro (%)</span>
												<input type="text" name="lucro" placeholder="Digite seu Preço Custo" class="form-campo">
											</div>
											<div class="col-4">
												<span class="text-label">Preço Venda</span>
												<input type="text" name="preco_venda" placeholder="Digite Preço Venda" class="form-campo">
											</div>
											<div class="col-10">
												<span class="text-label">Observação</span>
												<input type="text" name="observacao" placeholder="Digite Preço Venda" class="form-campo">
											</div>

											<div class="col-4">
												<span class="text-label">Ativo</span>												
												<select class="form-campo" name="status">												
													<option value="1">Ativo</option>	
													<option value="2">Desativado</option>												
												</select>
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