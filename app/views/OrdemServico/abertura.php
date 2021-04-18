<script src="<?php echo URL_BASE ?>assets/js/abertura.js"></script>
<script src="<?php echo URL_BASE ?>assets/js/objeto.js"></script>
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
                            <span class="titulo px-0"><i class="fab fa-wpforms"></i> Abertura da Ordem de Serviço</span>
                  

                            <div class="conteudo pt-5 mt-3">
                                <div class="titulo mb-2"><i class="fas fa fa-plus-circle" aria-hidden="true"></i> Dados</span></div>
                                <div class="base-caixa formulario">
                                    <form action="<?php echo URL_BASE . "OrdemServico/salvar" ?>" method="POST">
                                        <div class="rows">
                                            
                                        <div class="col-2">
												<span class="text-label">PRIMA</span>												
												<select class="form-campo" name="prisma">	
                                            <?php foreach($listaPrisma as $prisma) {  ?>                                            
                                                <option value="<?php echo isset($prisma->id) ? $prisma->id : null ?>"><?php echo isset($prisma->prisma) ? $prisma->prisma : null ?></option>		
											<?php } ?>													
												</select>
											</div>
                                            <div class="col-10">
                                                <span class="text-label">Cliente</span>
                                                <input type="hidden" name="id_cliente" id="id_cliente"/>
                                                <input type="text" name="cliente" id="cliente"  value="" placeholder="Digite do cliente" class="form-campo">
                                            </div>
                                            <div class="col-5">
                                                <span class="text-label">Objeto</span>
                                                <input type="hidden" name="id_objeto2" id="id_objeto2"/>
                                                <input type="text" name="objeto" id="objeto"  value="" placeholder="Digite o objeto" class="form-campo">
                                            </div>
                                            <div class="col-4">
                                                <span class="text-label">Placa</span>
                                                <input type="text" name="placa" id="placa"  value="" placeholder="Digite o objeto" class="form-campo">
                                            </div>
                                            <div class="col-3">
                                                <span class="text-label">Km</span>
                                                <input type="text" name="km" value="" placeholder="Digite o Km" class="form-campo">
                                            </div>
                                            <div class="col-4">
												<span class="text-label">Condição Pagamento</span>												
												<select class="form-campo" name="pagamento">												
													<option value="1" >vista</option>	
													<option value="2" >prazo</option>												
												</select>
											</div>	
                                            <div class="col-4">
                                                <span class="text-label">Telefone</span>
                                                <input type="text" name="telefone" placeholder="Digite seu telefone" class="form-campo">
                                            </div>
                                            <div class="col-4">
												<span class="text-label" >Vendedor</span>												
												<select class="form-campo" name="vendedor">	
                                            <?php foreach($listaVendedor as $vendedor) {  ?>											
													<option value="<?php echo isset($vendedor->id) ? $vendedor->id : null ?>"><?php echo isset($vendedor->nome) ?$vendedor->nome : null ?></option>				
                                            <?php } ?>								
												</select>
											</div>	
                                            <div class="col-4">
												<span class="text-label">Mecanico</span>												
												<select class="form-campo" name="mecanico">	
                                            <?php foreach($listaMecanico as $mecanico) {  ?>                                               
													<option value="<?php echo isset($mecanico->id) ? $mecanico->id : null ?>" ><?php echo isset($mecanico->nome) ? $mecanico->nome : null ?></option>	
                                            <?php } ?>                                                    
												</select>
											</div>	
                                            <div class="col-4">
												<span class="text-label">Data Previsão</span>
												<input type="date" name="data_previsao" placeholder="Digite a data da previsão" class="form-campo">
											</div>
                                            <div class="col-4">
                                                <span class="text-label">Pertence deixado</span>
                                                <input type="text" name="pertence_deixado" value="" placeholder="Digite os pertences deixados" class="form-campo">
                                            </div>
                                            <div class="col-12">
                                                <span class="text-label">Defeitos Apresentados</span>
                                                <input type="text" name="defeito_apresentado" value="" placeholder="Digite is defeitos apresentados" class="form-campo">
                                            </div>

                                            <div class="col-12 mt-4 pb-4">
                                                <input type="hidden" name="id_objeto" id="id_objeto" value="" />
                                                <input type="hidden" name="id_pedido" id="id_pedido" value="" />
                                                <input type="submit" value="ABRIR ORDEM SERVIÇO" class="btn d-table m-auto">
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>

                            </div>
                    </div>

                        </div>
                    </div>
                </div>
                <footer>
                    <p>Sistemas de ordem de serviço</p>
                </footer>
            </section>
        </div>
    </div>
</div>
</div>