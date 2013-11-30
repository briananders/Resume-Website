$(document).ready(function(){
	$(".scb").click(function(){
		document.getElementById("mainstyle").href = "css/" + $(this).attr("value") + ".css";
	});
});