<div class="col-9 home">
				<div class="caixa">			
					<div class="conteudo pt-3">
						<div class="titulo mb-0"><i class="far fa-list-alt"></i>Todos os pedidos</span></div>
						
						<div class="p-3 text-right">
							<a href="" class="btn btn-roxo d-inline-block filtro"><i class="fas fa-filter"></i> Filtrar</a>
						</div>
						<div class="base-caixa formulario mb-4 mostraFiltro">							
							<form action="<?php echo  URL_BASE."consulta/filtro"?>" method="GET">
								<div class="rows pb-3">
									<div class="col-3 mb-3">
										<span class="text-label">Por data01</span>
										<input type="date" name="data01" class="form-campo">
									</div>
									<div class="col-3 mb-3">
										<span class="text-label">Por data02</span>
										<input type="date" name="data02" class="form-campo">
									</div>
									<div class="col-4 mb-3">
										<span class="text-label">Por cliente</span>
										<input type="text" placeholder="Digite seu nome" class="form-campo">
									</div>
									<div class="col-2 mt-4 pt-1">
										<input type="submit" value="Pesquisar" class="btn d-table m-auto">
									</div>
								</div>
							</form>
						</div>
						<div class="base-caixa">						
	
							<div class="tabela-responsiva">								
							<table width="100%" cellpadding="0" cellspacing="0" class="tabela" id="dataTable">		
								
								<thead>
								<tr>
									<th width="4%" align="left">Id:</th>
									<th width="40%" align="left">Cliente:</th>
									<th width="40%" align="center">Data:</th>
									<th width="40%" align="center">Total:</th>
									<th width="40%" align="center">Baixados:</th>
								</tr>
								</thead>
								<tbody>		
                                <?php foreach($listaPedido as $ped) { 
                                   
                                    $txt_finalizado = "Não";
                                    $iconFinalizado = "fas fa-window-close text-vermelho";
                                   
                                    if($ped->finalizado == 'S'){
                                        $txt_finalizado = "Sim";
                                        $iconFinalizado = "fas fa-check text-verde";
                                    }
                                    ?>				
									<tr>
										<td><?php echo $ped->pedido ?></td>
										<td><?php echo $ped->cliente ?></td>
										<td align=""><?php echo databr($ped->data) ?></td>
										<td align=""><?php echo $ped->total_pedido ?></td>
										<td align="center"><i class="<?php echo $iconFinalizado ?>" aria-hidden="true"></i> <?php echo $txt_finalizado ?></td>
									 </tr>						
								<?php } ?>	
								</tbody>
								<tfoot>
									<tr>
										<th width="4%" align="left">Id:</th>
										<th width="40%" align="left">Cliente:</th>
										<th width="40%" align="center">Data:</th>
										<th width="40%" align="center">Total:</th>
										<th width="40%" align="center">Baixados:</th>
									</tr>
								</tfoot>
							</table>
														
						</div>
						</div>
					
					</div>
				</div>
			</div>	