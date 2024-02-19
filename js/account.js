inner = document.getElementById("inner"); 
form = document.getElementById("form"); 

edit_btn = document.getElementById("edit_btn"); 
chng_btn = document.getElementById("chng_btn"); 

edit_btn.addEventListener("click", function() {
	inner.style.display = "none";
	form.style.display = "flex";
});

chng_btn.addEventListener("click", function() {
	inner.style.display = "flex";
	form.style.display = "none";
});