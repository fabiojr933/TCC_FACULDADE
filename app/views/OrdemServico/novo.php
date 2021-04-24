<script src="<?php echo URL_BASE ?>assets/js/pedido.js"></script>
<script src="<?php echo URL_BASE ?>assets/js/produto.js"></script>


<div class="col-9 home">
	<div class="caixa">
		<div class="conteudo pt-3">

			<?php
			$this->verMSG();
			$this->verERRO();

			?>


			<section class="conteudo">
				<div class="">
					<div class="width-100 d-flex">
						<div class="divisor border-bottom">
							<span class="titulo px-0"><i class="fab fa-wpforms"></i> dados do pedido</span>
							<form>
								<div class="rows mt-3">
									<div class="col-4 d-flex">
										<div class="cx">
											<label class="text-label"><i class="fas fa-user"></i> Nome do cliente</label>
											<span class="h6 mb-0"><?php echo isset($pedido2->cliente) ? $pedido2->cliente : null ?></span>
										</div>
									</div>
									<div class="col d-flex">
										<div class="cx">
											<label class="text-label"><i class="far fa-clock"></i> Pedido</label>
											<span class="h6 mb-0"><?php echo isset($pedido2->pedido) ? $pedido2->pedido : null ?></span>
											<input type="hidden" name="id_pedido" />
										</div>
									</div>
									<div class="col d-flex">
										<div class="cx">
											<label class="text-label"><i class="fas fa-calendar"></i> Data</label>
											<span class="h6 mb-0"><?php echo databr(isset($pedido2->data_pedido) ?  $pedido2->data_pedido : null) ?></span>
										</div>
									</div>
									<div class="col d-flex">
										<div class="cx">
											<label class="text-label"><i class="fas fa-dollar-sign"></i> Valor</label>
											<span id="" class="h6 mb-0"><?php echo $pedido2->total_pedido ?></span>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="">
						<div class="">
							<div class="base-home pt-9">
								<span class="titulo pb-6 pt-6"><i class="far fa-list-alt"></i> Itens do pedido</span>
								<div class="formulario">
									<form action="" method="">
										<div class="rows p-3">
											<div class="col-6 position-relative">
												<div class="d-flex  text-justify-between items-center">
													<span class="text-label"> Produto (<a href="javascript:;" onclick="abrirModal('#janela')" class="text-roxo">Buscar</a>)</span>
												</div>

												<div>
													<input type="text" id="produto" data-type="localizar_produto" class="form-campo" />
												</div>


											</div>
											<div class="col-2">
												<span class="text-label">Quantidade</span>
												<input type="number" name="qtde" id="qtde" value="1" class="form-campo">
											</div>
											<div class="col-2">
												<span class="text-label">Valor</span>
												<input type="text" name="valor" id="valor" class="form-campo">
											</div>
											<div class="col-2 mt-3 pt-2">
												<input type="hidden" name="id_produto" id="id_produto" />
												<input type="button" id="btnInserir" value="Inserir" class="btn btn-azul width-100">
											</div>
										</div>
									</form>

								</div>
								<div class="tabela-responsiva">
									<div class="border-bottom-0">
										<table cellpadding="0" cellspacing="0" id="dataTable">
											<thead>
												<tr>
													<th width="2%" align="left">Item</th>
													<th width="2%" align="left">Id</th>
													<th width="48%" align="left">Produto</th>
													<th width="16%" align="center">Preço</th>
													<th width="8%" align="center">Quantidade</th>
													<th width="15%" align="center">Subtotal</th>
													<th width="15%" align="center">Excluir</th>
												</tr>
											</thead>
											<tbody id="lista_itens">
												<?php foreach ($lista as $item) {  ?>
													<tr class="ativo">
														<td id="r_pedido"><?php echo $item->id_item ?></td>
														<td><?php echo $item->id_produto ?></td>
														<td><?php echo $item->produto ?></td>
														<td align="center">R$ <?php echo $item->valor_item ?></td>
														<td align="center"><?php echo $item->qtde_item ?></td>
														<td align="center">R$ <?php echo $item->valor_item ?></td>
														<!--	<td align="center"><a href="javascript:;"  onclick="return excluir_item(this)" data-entidade="item" data-id="<//?php $item->id_item ?>" class="btn btn-outline-vermelho">Excluir</a></td>  -->
														<td align="center"><a href=" <?php echo URL_BASE . "item/excluir/$item->id_item" ?>" class="btn btn-outline-vermelho">Excluir</a></td>
													</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
								<div class="text-right pt-3 base-botoes">
									<a href="<?php echo URL_BASE ."item/cancelar/".$pedido2->pedido?>" class="btn btn-vermelho d-inline-block"><i class="fas fa-times"></i> Cancelar</a>
									<a href="" class="btn d-inline-block" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fas fa-check"></i> Finalizar</a>
									<!--	<a href="" class="btn d-inline-block"><i class="fas fa-check"></i> Finalizar</a>  -->
									<a href="<?php echo URL_BASE ."item/finalizado/".$pedido2->pedido?>" class="btn d-inline-block"><i class="fas fa-check"></i> Finalizar_certo</a> 
								</div>
							</div>
						</div>
					</div>
				</div>





				<!-- MODAL -->


			
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Faturamento</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form >
									<div class="col-12">
										<span class="text-label">Condição Pagamento</span>
										<select class="form-campo" name="pagamento">
										<?php foreach($pagamento as $pag)  { ?>
											<option value="<?php echo isset($pag->id) ? $pag->id : null ?>" <?php echo $pedido2->id_pagamento == $pag->id ? "selected" : "" ?>><?php echo isset($pag->descricao) ? $pag->descricao : null?></option>	
										<?php } ?>										
										</select>
									</div>
									<div class="col-12">
										<span class="text-label">Valor Bruto</span>
										<input type="text" name="valor_bruto" id="valor_bruto" value="<?php echo $pedido2->total_pedido ?>" placeholder="Valor Bruto" class="form-campo" readonly>
									</div>
									<div class="col-12">
										<span class="text-label">Valor Desconto</span>
										<input type="text" id="desconto" name="desconto" placeholder="Valor do Desconto" class="form-campo">
									</div>
									<div class="col-12">
										<span class="text-label">Valor Liquido</span>
										<input type="number" id="valor_liquido" name="valor_liquido" readonly name="descricao"  placeholder="Valor Liquido" class="form-campo">
									</div>
									<div class="col-12">
										<span class="text-label">Valor Informado </span>
										<input type="number" id="valor_informado" name="valor_informado"  placeholder="Valor Liquido" class="form-campo">
									</div>
									<div class="col-12">
										<span class="text-label">Troco</span>
										<input type="text" id="troco" name="troco" placeholder="Troco" class="form-campo" readonly>
									</div>
								</form>
							</div>
							<div class="modal-footer">				
								<input type="hidden" name="pedidoItem" value="<?php echo $pedido2->pedido ?>"/>
								<button type="submit" class="btn btn-secondary" data-dismiss="modal">Sair</button>
								<a href="<?php echo URL_BASE."item/finalizado/".$pedido2->pedido ?>" type="button" class="btn btn-primary">Finalizar</a>
							</div>
						</div>
					</div>

					<footer>
						<p>DESENVOLVIDO POR MJAILTON.COM.BR</p>
					</footer>
			</section>
		</div>
	</div>
</div>
</div>

<script>
	var id_pedido = <?php echo $pedido2->pedido ?>;      
</script>