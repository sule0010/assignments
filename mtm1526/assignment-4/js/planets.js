// JavaScript Document
$(document).ready(function(){
	$.get('earth.html', function(data){
		$('div').prepend(data);
	});
	$('#earth').on('click', function(){
		$('#fillme').load('earth.html');
	});
	$('#mars').on('click', function(){
		$('#fillme').load('mars.html');
	});
	$('#jupiter').on('click', function(){
		$('#fillme').load('jupiter.html');
	});
	$('#venus').on('click', function(){
		$('#fillme').load('venus.html');
	});
	
});