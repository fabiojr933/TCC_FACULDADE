
				<div class="col-9 home">
				<div class="caixa">										
					<div class="conteudo pt-3">
						<div class="titulo mb-3"><i class="far fa-list-alt"></i> Gerar relatório</span></div>
						<div class="base-caixa formulario mb-4">							
							<form action="<?php echo URL_BASE."Relatorio/gerarRelatorio" ?>" method="GET">
								<div class="rows pb-3 pt-4">
									<div class="col-6  mb-3">
										<span class="text-label">Por data01</span>
										<input type="date" name="data1" class="form-campo">
									</div>
									<div class="col-6  mb-3">
										<span class="text-label">Por data02</span>
										<input type="date" name="data2" class="form-campo">
									</div>
									<div class="col-8 mb-3">
										<span class="text-label">Por cliente</span>
										<select class="form-campo">
                                        <?php foreach($Rel_cliente as $cli){  ?>
											<option value="<?php echo $cli->id ?>"><?php echo isset($cli->nome) ? $cli->nome : "" ?></option>	
                                            <?php } ?>										
										</select>
									</div>                                  
									
									<div class="col-12 pt-1 pb-5">
										<input type="submit" value="Gerar relatório" class="btn d-table m-auto">
									</div>
								</div>
							</form>
						</div>
					
					</div>
				</div>
			</div>	

           