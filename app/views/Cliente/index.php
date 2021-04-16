<div class="col-9 home">
				  <div class="caixa">										
					<div class="conteudo pt-3">

					<?php 
$this->verMSG();
$this->verERRO();
?>

						<div class="titulo mb-0"><i class="far fa-list-alt"></i> Lista de clientes</span></div>
						<div class="p-3 text-right pb-0">
							<a href="<?php echo URL_BASE."Cliente/novo" ?>" class="btn d-inline-block mb-2"><i class="fas fa fa-plus-circle" aria-hidden="true"></i> Cadastrar cliente</a>
							<a href="" class="btn btn-roxo d-inline-block filtro"><i class="fas fa-filter"></i> Filtrar</a>
						</div>
						<div class="base-caixa formulario mb-4 mostraFiltro">							
							<form action="<?php echo URL_BASE."Cliente/pesquisar" ?>" method="GET">
								<div class="rows">
									<div class="col-10">
										<span class="text-label">Pesquisar por cliente</span>
										<input type="text" name="pesquisa"  placeholder="Digite seu nome" class="form-campo">
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
									<th width="10%" align="left">Id:</th>
									<th width="60%" align="left">Nome:</th>
									<th width="30%" align="left">Endereço:</th>
									<th align="center">Editar</th>
									<th align="center">Excluir</th>
								</tr>
								</thead>
								<tbody>
									<?php foreach($listaCliente as $cliente) {  ?>							
									<tr>
										<td ><?php echo $cliente->id ?></td>
										<td ><?php echo $cliente->nome ?></td>
										<td ><?php echo $cliente->endereco ?></td>										
										<td align="center"><a href="<?php echo URL_BASE."Cliente/editar/".$cliente->id ?>" class="btn btn-outline-verde">Editar</a></td>
										<td align="center"><a href="<?php echo URL_BASE."Cliente/excluir/".$cliente->id ?>" class="btn btn-outline-vermelho">Excluir</a></td>
																			
									 </tr>	
									 <?php } ?>
								  
								</tbody>
								 <tfoot>
									<tr>
										<th align="left">Id:</th>
										<th align="left">Nome:</th>
										<th align="left">Endereço:</th>
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