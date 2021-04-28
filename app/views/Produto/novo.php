<script src="<?php echo URL_BASE."assets/js/produto.js" ?>"></script>				
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
												<input type="text" name="descricao" value="<?php echo isset($lista->descricao) ? $lista->descricao : null ?>" placeholder="Digite seu nome" class="form-campo">
											</div>										
											<div class="col-4">
												<span class="text-label">Referencia</span>
												<input type="text" name="referencia" value="<?php echo isset($lista->referencia) ? $lista->referencia : null ?>" placeholder="Digite a Referencia" class="form-campo">
											</div>											
											<div class="col-4">
												<span class="text-label">Categoria</span>												
												<select class="form-campo" name="categoria">
												<?php foreach($listaCategoria as $categoria) {  ?>
													<option value="<?php echo isset($categoria->id) ? $categoria->id : null ?>" <?php echo $lista->idcategoria == $categoria->id ? "selected" : "" ?>><?php echo isset($categoria->descricao) ? $categoria->descricao : null ?></option>
													<?php } ?>
												</select>
											</div>												
											<div class="col-4">
												<span class="text-label">Data Vencimento</span>
												<input type="date" name="data_vencimento" value="<?php echo isset($lista->data_vencimento) ? $lista->data_vencimento : null ?>" placeholder="Digite a data do vencimento" class="form-campo">
											</div>									
											<div class="col-4">
												<span class="text-label">Preço Custo</span>
												<input type="text" name="preco_custo" id="preco_custo" value="<?php echo moedaBr(isset($lista->preco_custo) ? $lista->preco_venda : null )?>" placeholder="Digite seu endereço" class="form-campo">
											</div>
											<div class="col-4">
												<span class="text-label">Lucro (%)</span>
												<input type="text" name="lucro" id="lucro" value="<?php echo moedaBr(isset($lista->lucro) ? $lista->lucro : null )?>" placeholder="Digite seu Preço Custo" class="form-campo">
											</div>
											<div class="col-4">
												<span class="text-label">Preço Venda</span>
												<input type="text" name="preco_venda" id="preco_venda" value="<?php echo moedaBr(isset($lista->preco_venda) ? $lista->preco_venda : null )?>" placeholder="Digite Preço Venda" class="form-campo">
											</div>
											<div class="col-8">
												<span class="text-label">Observação</span>
												<input type="text" name="observacao" value="<?php echo isset($lista->observacao) ? $lista->observacao : null ?>" placeholder="Digite sua Obervação" class="form-campo">
											</div>

											<div class="col-4">
												<span class="text-label">Ativo</span>												
												<select class="form-campo" name="status">												
													<option value="1" <?php echo $lista->status == "1" ? "selected" : "" ?>  >Ativo</option>	
													<option value="2"  <?php echo $lista->status == '2' ? "selected" : "" ?>>Desativado</option>												
												</select>
											</div>	

																				
											<div class="col-12 mt-4 pb-4">
												<input type="hidden" name="id" value="<?php echo isset($lista->id) ? $lista->id : null ?>"/>
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
			