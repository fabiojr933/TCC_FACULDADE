<div class="col-9 home">
				   <div class="caixa">
					
					<div class="conteudo pt-3">
						<div class="titulo">
							<h1 class="h4 mb-0"><i class="fas fa-home"></i> Seja bem vindo</h1>
						</div>
						<div class="rows mt-3">
							<div class="col-12 mb-3">								
								<div class="caixa-home">
									<span class="d-block text-uppercase mb-3 h5">Ultimos Pedidos</span>
									<div class="tabela-responsiva">								
										<table width="100%" cellpadding="0" cellspacing="0" class="tabela">			
											
											<thead>
											<tr>
                                                 <th align="left"  width="50">pedido:</th>
												<th align="center"  width="270">Cliente:</th>
												<th align="center" width="50">Data:</th>
												<th align="center" width="50">Total:</th>
												<th align="center" width="30">Açao</th>
											</tr>
											</thead>
											<tbody>		
                                            <?php foreach($listaTop as $top) { ?>														
												<tr>
                                                    <td ><?php echo $top->id_pedido ?></td>
													<td align="left"><?php echo $top->nome_cliente ?></td>
													<td align="left"><?php echo databr($top->data_pedido) ?></td>
													<td align="left"><?php echo $top->total_pedido ?></td>
													<td align="center"><a href="<?php echo URL_BASE."OrdemServico/novo/".$top->id_pedido ?>" class="btn btn-outline-roxo">Ver mais</a></td>
												 </tr>	
                                            <?php } ?>
											</tbody>											
										</table>
									</div>                                    
								</div>                                
                                <div class="col-lg-4">                          
                                    <div class="card-body">  <h5 style="text-align:center">Legenda</h5>                                      
                                        <div class="progress-box progress-1">
                                            <h6 class="por-title">Disponivel</h6>                                           
                                            <div class="progress mb-2" style="height: 8px;">
                                                <div class="card bg-success"  style="width: 100%;"></div>
                                            </div>
                                        </div>
                                        <div class="progress-box progress-2">
                                            <h6 class="por-title">Ocupado</h6>                                           
                                            <div class="card bg-danger" style="height: 8px;">
                                                <div class="progress-bar bg-flat-color-2" style="width: 100%;" ></div>
                                            </div>
                                        </div>                                                                               
                                    </div> <!-- /.card-body -->
                                </div>
							</div>
                           

							<!-- PRISMA 01 -->
                            <?php foreach($listaOs as $os) { ?>
							<div class="col-xxl-3 col-lg-2">
                               
                                <?php 
                                $color = "warning";
                                $acao = "";
                                $nome = "";
                               
                                 if($os->status == 1){                                
                                    $color = "success";
                                    $acao = "abertura/".$os->id_prisma;   
                                    $nome = "Abrir uma ordem de serviço";                                
                                }
                                if($os->status == 2){                                
                                    $color = "danger";
                                    $acao = "novo/".$os->id_pedido;   
                                    $nome = "Visualizar ordem de serviço";                               
                                }
                                if($os->status == 3){                                
                                    $color = "primary";
                                }
                                
                                ?>
                                <div class="card bg-<?php echo $color ?> text-white mb-4">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="mr-2">   
                                            <div class="text-white-78 small">Prisma: <?php echo isset($os->id_prisma) ? $os->id_prisma : null?></div>                                         
                                                <div class="text-white-75 small"><?php echo isset($os->nome_cliente) ? $os->nome_cliente : "Nome cliente"?></div>
                                                <div class="text-lg font-weight-bold"><?php echo isset($os->total_pedido) ? "R$: ". $os->total_pedido : "Valor: R$: 00,00"?></div>
                                            </div>
                                            <i class="feather-xl text-white-50" data-feather="check-square"></i>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                           <a class= "small text-white stretched-link" id="mostrar"  href="<?php echo URL_BASE."OrdemServico/".$acao?>"><?php echo $nome ?></a>                           
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
							

							</div>
						</div>
					</div>
				  </div>
				</div>

    