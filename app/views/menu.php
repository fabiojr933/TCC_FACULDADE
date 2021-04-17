<div class="col-3 menu-lateral">
					<div class="cx text-center text-uppercase mb-5">
						<h1 class="h5 mb-0">Área administrativa</h1>
					</div>
					<div class="itens-menu">
						<ul>
							<li><a href="<?php echo URL_BASE."home" ?>"><i class="fas fa-home"></i> Home</a></li>
						</ul>
						<div id="accordion">
							<span><a href=""><i class="fas fa-user"></i> Cliente</a></span>
							<ul>	
								<li><a href="<?php echo URL_BASE."Cliente/index" ?>"><i class="far fa-list-alt"></i> Lista de cliente</a></li>	
								<li><a href="<?php echo URL_BASE."Cliente/novo" ?>"><i class="far fa-list-alt"></i> Cadastro de cliente</a></li>	
							</ul>
							
							<span><a href=""><i class="fas fa-boxes"></i> Produto</a></span>
							<ul>									
								<li><a href="<?php echo URL_BASE."Produto/novo" ?>"><i class="far fa-list-alt"></i>Cadastro de produto</a></li>
								<li><a href="<?php echo URL_BASE."Categoria/novo" ?>"><i class="far fa-list-alt"></i>Cadastro de categoria</a></li>
								<li><a href="<?php echo URL_BASE."Produto/index" ?>"><i class="far fa-list-alt"></i>Lista de produto</a></li>
								<li><a href="<?php echo URL_BASE."Categoria/index" ?>"><i class="far fa-list-alt"></i>Lista de Categoria</a></li>
							</ul>
							<span><a href=""><i class="fas fa-boxes"></i> OS</a></span>
							<ul>
							<li><a href="<?php echo URL_BASE."OrdemServico/index" ?>"><i class="far fa-list-alt"></i> Primas</a></li>									
								<li><a href="lst-produto.html"><i class="far fa-list-alt"></i> Abertura</a></li>
								<li><a href="frm-produto.html"><i class="far fa-list-alt"></i> Fechamento</a></li>
							</ul>
							<span><a href=""><i class="fas fa-search"></i> Consulta</a></span>
							<ul>
								<li><a href="pedidos-pendentes.html"><i class="far fa-list-alt"></i> OS pendentes</a></li>
								<li><a href="todos-pedidos.html"><i class="far fa-list-alt"></i> Todos os pendentes</a></li>
							</ul>
							<span><a href=""><i class="far fa-file-alt"></i> Relátorios</a></span>	
							<ul>					 
								<li><a href="relatorio-pedido.html"><i class="far fa-list-alt"></i> Relatórios de pedidos</a></li>
							</ul>
							<span><a href=""><i class="fas fa-chart-line"></i> Gráfico</a></span>	
							<ul>		
								<li><a href="grafico-diario.html"><i class="far fa-list-alt"></i> Gráfico diário</a></li>
							</ul>
						</div>
						<ul>
							<li><a href=""> <i class="fas fa fa-sign-out-alt" aria-hidden="true"></i> Sair</a></li>
						</ul>
					</div>
				</div>