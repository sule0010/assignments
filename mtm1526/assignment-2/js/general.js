// JavaScript Document
var addBtn = document.getElementById('add-btn');

var userInput = document.getElementById('userInput');

var bind = function(elem, ev, func) {
	if(window.addEventListener){
		elem.addEventListener(ev, func, false);
	}
	else{
		elem.attachEvent('on' + ev, func);
	}
};

bind(addBtn, 'click', function() {
	list = document.createElement('li');
	document.getElementById('container').appendChild(list);
	list.innerHTML = userInput.value;
	//removeCurrent();
	//list.className = 'current';
	//alert('I was clicked!');
});


bind(document.body, 'click', function(ev) {
	if(ev.target.tagName.toLowerCase() == 'li'){
		//removeCurrent();
		list = ev.target;
		list.className = 'current';
	};
});