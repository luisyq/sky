$(document).ready(function(){
	$('#menu span').click(function(){
		$('#lista').toggleClass('ocultar');
	});
});
$(document).ready(function(){
	$('#usuario').hover(function(){
		$(this).addClass('hover');
		},function(){
		$(this).removeClass('hover');
	});
});
$(document).ready(function(){
	$('#menu span').trigger('click');
})