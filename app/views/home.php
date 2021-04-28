<div class="col-9 home">
	<div class="caixa">

		<div class="conteudo pt-3">
			<div class="titulo">
				<h1 class="h4 mb-0"><i class="fas fa-home"></i> Seja bem vindo</h1>
			</div>
			<div class="rows mt-3">
				<div class="col-12 mb-3">
					<div class="caixa-home">                                                        
						<span class="d-block text-uppercase mb-3 h5">Pedidos pendêntes</span>
						<div class="tabela-responsiva">
							<table width="100%" cellpadding="0" cellspacing="0" class="tabela">

								<thead>
									<tr>
										<th align="left" width="320">Cliente:</th>
										<th align="" width="50">Data:</th>
										<th align="" width="50">Total:</th>
										<th align="" width="30">Açao</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach($PedidoPendentes as $pedido) {  ?>
									<tr>
										<td><?php echo $pedido->nome_cliente ?>	</td>
										<td align=""><?php echo $pedido->data_pedido ?></td>
										<td align=""><?php echo $pedido->total_pedido ?></td>
										<td align=""><a href="<?php echo URL_BASE."OrdemServico/novo/".$pedido->id_pedido?>" class="btn btn-outline-roxo">Ver mais</a></td>
									</tr>
								<?php } ?>	
								</tbody>

							</table>

						</div>
					</div>
				</div>

				<div class="col-12 mb-3 d-flex">
					<div class="caixa-home">
						<span class="d-block text-uppercase mb-3 h5">Todos os Pedidos</span>
						<div class="rolagem-tabela">
							<div class="tabela-responsiva">
								<table width="100%" cellpadding="0" cellspacing="0" class="tabela" >

									<thead>
										<tr>
											<th align="left">Cliente:</th>
											<th align="center">Data:</th>
											<th align="center">Total:</th>
											<th align="center">Açao</th>
										</tr>
									</thead>
									<tbody>
									<?php foreach($todosPedidos as $ped) { ?>
										<tr>
											<td><?php echo $ped->nome_cliente ?></td>
											<td align="center"><?php echo $ped->data_pedido ?></td>
											<td align="center">R$ <?php echo $ped->total_pedido ?></td>
											<td align="center"><a href="<?php echo URL_BASE."OrdemServico/novo/".$pedido->id_pedido?>" class="btn btn-outline-roxo">Ver mais</a></td>
										</tr>
									<?php } ?>	
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
