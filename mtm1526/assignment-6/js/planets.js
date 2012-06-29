// JavaScript Document
$(document).ready(function(){
	$('#earth').on('click', function(e){
		e.preventDefault();
		$('#fillme').load('includes/earth.php');
		$('nav li').removeClass('current');
		$('#earth').addClass('current');
	});
	$('#mars').on('click', function(e){
		e.preventDefault();
		
		$('#fillme').load('includes/mars.php');
		$('nav li').removeClass('current');
		$('#mars').addClass('current');
	});
	$('#jupiter').on('click', function(e){
		e.preventDefault();
		
		$('#fillme').load('includes/jupiter.php');
		$('nav li').removeClass('current');
		$('#jupiter').addClass('current');
	});
	$('#venus').on('click', function(e){
		e.preventDefault();
		
		$('#fillme').load('includes/venus.php');
		$('nav li').removeClass('current');
		$('#venus').addClass('current');
	});
	
});