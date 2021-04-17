$(function(){
   $("#produto").on("keyup", function(){	  
       var q  = $(this).val();


	   $.ajax({
		url: base_url + "produto/buscar/" + q,
		type: "POST",
		dataType: "json",
		data:{},
		success: function (data){
			$("#produto").after('<div class="listaProdutos"></div>');	

			html = "";
			var i;
			 for (i = 0; i < data.length; i++) {		  
			   html +='<div class="si"><a href="javascript:;" onclick="selecionarProduto(this)"'
			   + 'data-id="' + data[i].id +
			   '"data-nome="' + data[i].descricao +
				'" data-valor="' + data[i].preco_venda + '">' +
			   data[i].descricao + " - R$ " + data[i].preco_venda + '</a></div>';
			   
			 }
			 $(".listaProdutos").html(html);
			 $(".listaProdutos").show();
		}
	 });	
   }) ; 
});

function selecionarProduto(obj){ 
	var id = $(obj).attr("data-id");
	var nome = $(obj).attr("data-nome");
	var valor = $(obj).attr("data-valor");
	$(".listaProdutos").hide();
	$("#produto").val(nome);
	$("#valor").val(valor);
	$("#qtde").val(1);
	$("#qtde").focus();
	$("#id_produto").val(id);
}
