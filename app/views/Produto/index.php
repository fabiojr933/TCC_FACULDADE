<div class="col-9 home">
				<div class="caixa">					
					<div class="conteudo pt-3">
						<div class="titulo mb-0"><i class="far fa-list-alt"></i> Lista de produto</span></div>
						<div class="p-3 text-right pb-0">
							<a href="<?php echo URL_BASE."Produto/novo" ?>" class="btn d-inline-block mb-2"><i class="fas fa fa-plus-circle" aria-hidden="true"></i> Cadastrar produto</a>
							<a href="" class="btn btn-roxo d-inline-block filtro"><i class="fas fa-filter"></i> Filtrar</a>
						</div>
						<div class="base-caixa formulario mb-4 mostraFiltro">							
							<form action="" method="">
								<div class="rows">
									<div class="col-10">
										<span class="text-label">Pesquisar por produto</span>
										<input type="text" placeholder="Digite seu nome" class="form-campo">
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
									<th width="60%" align="left">Produto:</th>
									<th width="30%" align="left">Preço:</th>
									<th align="center">Editar</th>
									<th align="center">Excluir</th>
								</tr>
								</thead>
								<tbody>
								<?php foreach($listaProduto as $produto) {  ?>								
									<tr>
										<td><?php echo $produto->id ?></td>
										<td><?php echo $produto->descricao ?></td>
										<td align="left"><?php echo $produto->preco_venda ?></td>
										<td align="center"><a href="<?php echo URL_BASE."Produto/editar/".$produto->id ?>" class="btn btn-outline-verde">Editar</a></td>
										<td align="center"><a href="<?php echo URL_BASE."Produto/excluir/".$produto->id ?>" class="btn btn-outline-vermelho">Excluir</a></td>
									 </tr>					
								<?php } ?>								
								  
								</tbody>
								 <tfoot>
									<tr>
										<th align="left">Id:</th>
										<th align="left">Produto:</th>
										<th align="left">Preço:</th>
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