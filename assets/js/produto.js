$(function () {
    $("#lucro").on("change", function () {
        var q = $(this).val();
        var q1 = $("#preco_custo").val();
        var lucro = (q1 / 100) * q;
        var r1 = (+q1) + (+lucro);
        var resultdo = r1.toFixed(2);
        $("#preco_venda").val(resultdo);
    });
});
$(function () {
    $("#desconto").on("change", function () {
        var q = $(this).val();
        var q1 = $("#valor_bruto").val();
        var r = (q1 - q);
        var resultado = r.toFixed(2);
        $("#valor_liquido").val(resultado);
        $("#valor_informado").focus();
    });
});
$(function () {
    $("#valor_informado").on("change", function () {
        var q = $(this).val();
        var q1 = $("#valor_liquido").val();
        var r = (q - q1);
        var resultado = r.toFixed(2);
        $("#troco").val(resultado);

    });
});
