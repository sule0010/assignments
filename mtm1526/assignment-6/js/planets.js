// JavaScript Document
$(document).ready(function(){
	
	$.get('earth.php', function(data){
		$('div').prepend(data);
	});
	$('#earth').on('click', function(){
		$('#fillme').load('earth.php');
		$('nav li').removeClass('current');
		$('#earth').addClass('current');
	});
	$('#mars').on('click', function(){
		$('#fillme').load('mars.php');
		$('nav li').removeClass('current');
		$('#mars').addClass('current');
	});
	$('#jupiter').on('click', function(){
		$('#fillme').load('jupiter.php');
		$('nav li').removeClass('current');
		$('#jupiter').addClass('current');
	});
	$('#venus').on('click', function(){
		$('#fillme').load('venus.php');
		$('nav li').removeClass('current');
		$('#venus').addClass('current');
	});
	
});