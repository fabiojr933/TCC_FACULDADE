<div class="col-9 home">
				<div class="caixa">					
					<div class="conteudo pt-3">
						<div class="titulo mb-0"><i class="far fa-list-alt"></i> Lista de mecanicos cadastrados</span></div>
						<div class="p-3 text-right pb-0">
							<a href="<?php echo URL_BASE."Mecanico/novo" ?>" class="btn d-inline-block mb-2"><i class="fas fa fa-plus-circle" aria-hidden="true"></i>Cadastrar Mecanico</a>
							<a href="" class="btn btn-roxo d-inline-block filtro"><i class="fas fa-filter"></i> Filtrar</a>
						</div>
						<div class="base-caixa formulario mb-4 mostraFiltro">							
							<form action="<?php echo URL_BASE."Mecanico/pesquisar" ?>"  method="GET">
								<div class="rows">
									<div class="col-10">
										<span class="text-label">Pesquisar por Mecanico</span>
										<input type="text" name="pesquisa" placeholder="Digite seu nome" class="form-campo">
									</div>
									<div class="col-2 mt-4 pt-1">
										<input type="submit" value="Pesquisar" class="btn d-table m-auto">
									</div>
								</div>
							</form>
						</div>
						
						<div class="base-caixa">	
						<?php  
								$this->verMSG();
								$this->verERRO();
						?>
	
	
							<div class="tabela-responsiva">								
							<table width="100%" cellpadding="0" cellspacing="0" class="tabela" id="dataTable">
								<thead>
								<tr>
									<th width="10%" align="left">Id:</th>
									<th width="70%" align="left">Mecanico:</th>
									<th align="center">Editar</th>
									<th align="center">Excluir</th>
								</tr>
								</thead>
								<tbody>
									<?php foreach($listaMecanico as $mecanico) {  ?>							
									<tr>
										<td><?php echo $mecanico->id ?></td>
										<td><?php echo $mecanico->nome ?></td>										
										<td align="center"><a href="<?php echo URL_BASE."mecanico/editar/".$mecanico->id ?>" class="btn btn-outline-verde">Editar</a></td>
										<td align="center"><a href="<?php echo URL_BASE."mecanico/excluir/".$mecanico->id ?>" class="btn btn-outline-vermelho">Excluir</a></td>
									 </tr>						
									 <?php } ?>										
								  
								</tbody>
								 <tfoot>
									<tr>
										<th align="left">Id:</th>
										<th align="left">mecanico:</th>
										<th align="center">Editar</th>
										<th align="center">Excluir</th>
									</tr>
								</tfoot>
							</table>
														
						</div>
						</div>
					
					</div>
				</div>
			</div>	