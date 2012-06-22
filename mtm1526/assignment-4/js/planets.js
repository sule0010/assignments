// JavaScript Document
$(document).ready(function(){
	
	$.get('earth.html', function(data){
		$('div').prepend(data);
	});
	$('#earth').on('click', function(){
		$('#fillme').load('earth.html');
		$('nav li').removeClass('current');
		$('#earth').addClass('current');
	});
	$('#mars').on('click', function(){
		$('#fillme').load('mars.html');
		$('nav li').removeClass('current');
		$('#mars').addClass('current');
	});
	$('#jupiter').on('click', function(){
		$('#fillme').load('jupiter.html');
		$('nav li').removeClass('current');
		$('#jupiter').addClass('current');
	});
	$('#venus').on('click', function(){
		$('#fillme').load('venus.html');
		$('nav li').removeClass('current');
		$('#venus').addClass('current');
	});
	
});