var letter = '';
while (!letter){
	letter = prompt('Type a letter.');
}
console.log(letter);

if (letter){
	for (var i = 0; i < 10; i++){
			for(var e = 0; e < i+1; e++)
				document.write(letter);
			document.write('<br>');
	}
}
