
"use strict";

window.addEventListener("load", function() {
	
	var btn = document.querySelector("div.msg .closed"); // кнопка закрытия
	var msg = document.querySelector("div.msg"); // окно сообщения
	
	
	btn.addEventListener("click", function() {
		
		msg.style.display = "none"; // скрываем сообщение
		
	});
});