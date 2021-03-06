// JavaScript Document	
$(document).ready(function (){
	
	$('form').on('submit', function (ev) {
		ev.preventDefault();
		
		var colorSelect = $('#colorSelect').val();
		
		switch($('#properties').val()) {
			case 'border-color' :
			$('#circle').css('border-color', colorSelect);
			break;
			
			case 'background-color' :
			$('#circle').css('background-color', colorSelect);
			break;
			
			case 'color' :
			$('#circle').css('color', colorSelect);
			break;
		};
	});
	
	$('#hide-show').on('click', function (){
		$(circle).fadeToggle(300);
	});
});