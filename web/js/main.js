$(document).ready(function(){

	$('.list-inline li').click(function(){
		var foo = $(this);
		if(foo.hasClass('selected')){
			$(this).removeClass('selected');
		}
		else
		{
			$(this).addClass('selected');
			// On doit rajouter la valeur ciblée au champs hidden
		}
	});

});
