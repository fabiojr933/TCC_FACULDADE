				<div class="col-9 home">
					<div class="caixa">
						<div class="conteudo pt-3">
							<div class="titulo mb-3"><i class="far fa-list-alt"></i> Gerar gráfico</span></div>
							<div class="base-caixa formulario mb-4">
								<form action="<?php echo URL_BASE . "grafico/gerarGrafico" ?>" method="GET">
									<div class="rows pb-3 pt-4">
										<div class="col-6  mb-3">
											<span class="text-label">Por data01</span>
											<input type="date" name="data01" class="form-campo">
										</div>
										<div class="col-6  mb-3">
											<span class="text-label">Por data02</span>
											<input type="date" name="data02" class="form-campo">
										</div>
										<div class="col-12 mb-3">
											<span class="text-label">Disposição</span>
											<select class="form-campo" name="tipo">
												<option value='bar'>Barra</option>
												<option value='line'>Linha</option>
												<option value='horizontalBar'>Barra horizontal</option>
											</select>
										</div>
										<div class="col-12 pt-1 pb-5">
											<input type="submit" value="Gerar gráfico" class="btn d-table m-auto">
										</div>
									</div>
								</form>
							</div>

						</div>
					</div>
				</div>
		