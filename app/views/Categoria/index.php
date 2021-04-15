<div class="col-9 home">
				<div class="caixa">					
					<div class="conteudo pt-3">
						<div class="titulo mb-0"><i class="far fa-list-alt"></i> Lista de produto</span></div>
						<div class="p-3 text-right pb-0">
							<a href="<?php echo URL_BASE."Categoria/novo" ?>" class="btn d-inline-block mb-2"><i class="fas fa fa-plus-circle" aria-hidden="true"></i>Cadastrar categoria</a>
							<a href="" class="btn btn-roxo d-inline-block filtro"><i class="fas fa-filter"></i> Filtrar</a>
						</div>
						<div class="base-caixa formulario mb-4 mostraFiltro">							
							<form action="" method="">
								<div class="rows">
									<div class="col-10">
										<span class="text-label">Pesquisar por categoria</span>
										<input type="text" placeholder="Digite seu nome" class="form-campo">
									</div>
									<div class="col-2 mt-4 pt-1">
										<input type="submit" value="Pesquisar" class="btn d-table m-auto">
									</div>
								</div>
							</form>
						</div>
						
						<div class="base-caixa">	
							<span class="msg sucesso"><i class="fas fa-check"></i> Mensagem de sucesso <a href="" class="fas fa-times float-right"></a></span>

							<span class="msg erro"><i class="fas fa-exclamation-triangle"></i> Mensagem de erro <a href="" class="fas fa-times float-right"></a></span>
	
							<div class="tabela-responsiva">								
							<table width="100%" cellpadding="0" cellspacing="0" class="tabela" id="dataTable">
								<thead>
								<tr>
									<th width="10%" align="left">Id:</th>
									<th width="70%" align="left">Produto:</th>
									<th align="center">Editar</th>
									<th align="center">Excluir</th>
								</tr>
								</thead>
								<tbody>
																
									<tr>
										<td>1</td>
										<td>Nome da categoria</td>										
										<td align="center"><a href="frm-produto.html" class="btn btn-outline-verde">Editar</a></td>
										<td align="center"><a href="frm-produto.html" class="btn btn-outline-vermelho">Excluir</a></td>
									 </tr>						
									<tr>
										<td>2</td>
										<td>Nome da categoria</td>										
										<td align="center"><a href="frm-produto.html" class="btn btn-outline-verde">Editar</a></td>
										<td align="center"><a href="frm-produto.html" class="btn btn-outline-vermelho">Excluir</a></td>
									 </tr>						
									<tr>
										<td>3</td>
										<td>Nome da categoria</td>									
										<td align="center"><a href="frm-produto.html" class="btn btn-outline-verde">Editar</a></td>
										<td align="center"><a href="frm-produto.html" class="btn btn-outline-vermelho">Excluir</a></td>
									 </tr>						
									<tr>
										<td>4</td>
										<td>Nome do categoria</td>										
										<td align="center"><a href="frm-produto.html" class="btn btn-outline-verde">Editar</a></td>
										<td align="center"><a href="frm-produto.html" class="btn btn-outline-vermelho">Excluir</a></td>
									 </tr>						
									<tr>
										<td>5</td>
										<td>Nome do categoria</td>										
										<td align="center"><a href="frm-produto.html" class="btn btn-outline-verde">Editar</a></td>
										<td align="center"><a href="frm-produto.html" class="btn btn-outline-vermelho">Excluir</a></td>
									 </tr>
								
								  
								</tbody>
								 <tfoot>
									<tr>
										<th align="left">Id:</th>
										<th align="left">categoria:</th>
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