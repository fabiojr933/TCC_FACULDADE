<div class="col-9 home">
    <div class="caixa">
        <div class="conteudo pt-3">
            <div class="titulo mb-3"><i class="far fa-list-alt"></i> Gráfico de vendas</span></div>
            <div class="base-caixa formulario mb-4">
                <div class="rows py-4">
                    <div class="col-6 m-auto">
                        <canvas id="myChart" width="300" height="220" class="img-fluido"></canvas>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
    var tipo = <?php echo json_encode($tipo) ?>;
    var valores = <?php echo json_encode(array_values($valores)) ?>;
    var dias = <?php echo json_encode(array_values($dias)) ?>;
</script>
<script src="<?php echo URL_BASE ?>assets/js/grafico.js"></script>