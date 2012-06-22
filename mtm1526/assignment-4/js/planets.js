// JavaScript Document
$(document).ready(function(){

	var marker;
	
	$.get('earth.html', function(data){
		$('div').prepend(data);
	});
	$('#earth').on('click', function(e){
		marker = e.target;
		marker.className = 'current';
		$('#fillme').load('earth.html');
	});
	$('#mars').on('click', function(e){
		marker = e.target;
		marker.className = 'current';
		$('#fillme').load('mars.html');
	});
	$('#jupiter').on('click', function(e){
		marker = e.target;
		marker.className = 'current';
		$('#fillme').load('jupiter.html');
	});
	$('#venus').on('click', function(e){
		marker = e.target;
		marker.className = 'current';
		$('#fillme').load('venus.html');
	});
	
});