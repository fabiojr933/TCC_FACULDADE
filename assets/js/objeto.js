//OBJETO PADRAO

$(function(){
	$("#objeto").on("keyup", function(){	  
		var q  = $(this).val();
		
 
		$.ajax({
		 url: base_url + "OrdemServico/buscarObjeto/" + q,
		 type: "POST",
		 dataType: "json",
		 data:{},
		 success: function (data){		
			
			 $("#objeto").after('<div class="listaObjeto"></div>');	
 
			 html = "";
			 var i;
			  for (i = 0; i < data.length; i++) {		  
				html +='<div class="si"><a href="javascript:;" onclick="selecionarObjeto(this)"'
				+ 'data-id="' + data[i].id +
				'"data-nome="' + data[i].descricao +
				 '"data-placa="' + data[i].placa + '">' +
				data[i].descricao  + '</a></div>';
				
			  }
			  $(".listaObjeto").html(html);
			  $(".listaObjeto").show();
             
		 }
	  });	
	}) ; 
 });

 function selecionarObjeto(obj){ 
	var id = $(obj).attr("data-id");
	var nome = $(obj).attr("data-nome");
	var placa = $(obj).attr("data-placa");
	$(".listaObjeto").hide();
	$("#objeto").val(nome);	
    $("#placa").val(placa);	
	$("#id_objeto2").val(id);
}