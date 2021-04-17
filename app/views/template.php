<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Sistema de pedidos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/js/datatables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/js/datatables/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE ?>assets/js/datatables/css/DataTables_boot.css">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/grade.css">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/auxiliar.css">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/style.css">

    <script>
       var base_url = "<?php echo URL_BASE ?>";
    </script>

    <script src="<?php echo URL_BASE ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo URL_BASE ?>assets/js/js.js"></script>

   

</head>
</head>

<body>

    <?php include "cabecalho.php" ?>
    <div class="conteudo">
        <div class="rows">
            <?php include "menu.php" ?>
            <?php $this->load($view, $viewData); ?>
        </div>
    </div>






   
    <script src="<?php echo URL_BASE ?>assets/js/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo URL_BASE ?>assets/js/datatables/js/dataTables.responsive.min.js"></script>   
    <script src="<?php echo URL_BASE ?>assets/js/componentes/js_grafico.js"></script>
    <script src="https://kit.fontawesome.com/9480317a2f.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

 
    <script src="<?php echo URL_BASE ?>assets/js/jquery-ui.js"></script>
  
    <script src="<?php echo URL_BASE ?>assets/js/chart.js/Chart.min.js"></script>
</body>

</html>