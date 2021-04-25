$(function() {	
	//Menu mobile
	
	$('.mobmenu').click (function(){
	$('.menu-lateral').slideToggle();
	$(this).toggleClass('active');
		return false;
	});	
	
	$('.filtro').click (function(){
			$('.mostraFiltro').slideToggle();
			$(this).toggleClass('active');
				return false;
	});
 });