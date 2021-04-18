$(function(){
   $("#cliente").on("keyup", function(){	  
       var q  = $(this).val();
	   

	   $.ajax({
		url: base_url + "cliente/buscar/" + q,
		type: "POST",
		dataType: "json",
		data:{},
		success: function (data){			
			$("#cliente").after('<div class="listaCliente"></div>');	

			html = "";
			var i;
			 for (i = 0; i < data.length; i++) {		  
			   html +='<div class="si"><a href="javascript:;" onclick="selecionarCliente(this)"'
			   + 'data-id="' + data[i].id +
			   '"data-nome="' + data[i].nome +
				'" data-end="' + data[i].endereco + '">' +
			   data[i].nome + " - Endereço: " + data[i].endereco + '</a></div>';
			   
			 }
			 $(".listaCliente").html(html);
			 $(".listaCliente").show();
		}
	 });	
   }) ; 
});

function selecionarCliente(obj){ 
	var id = $(obj).attr("data-id");
	var nome = $(obj).attr("data-nome");
	var valor = $(obj).attr("data-end");
	$(".listaCliente").hide();
	$("#cliente").val(nome);	
	$("#id_cliente").val(id);
	$("#objeto").focus();
	$("#id_pedido").val(id);
}



