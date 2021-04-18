$(function(){
    $("#lucro").on("change", function(){
        var q  = $(this).val();   
        var q1  = $("#preco_custo").val();   
        var lucro = (q1 / 100) * q;
        let resultdo = (+q1) + (+lucro);
        $("#preco_venda").val(resultdo); 
        
    }) ;
    });