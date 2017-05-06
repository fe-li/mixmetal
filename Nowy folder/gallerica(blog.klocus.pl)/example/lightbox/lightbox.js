$(document).ready(function(){
	$('body').append('<div id="lightbox"><div id="center"><img id="image" src="#" /><img id="close" src="lightbox/close.png" alt="close" /></div></div>');	
	$(".thumbnail").click(function(){
		var address = $(this).attr("href");
		$("#lightbox").fadeIn("slow");
		$("#lightbox #center #image").attr("src",address);
		return false;
	});
	$("#lightbox #center #close, #lightbox").click(function(){
		$("#lightbox").fadeOut("fast");
	});
	$("#lightbox #center").click(function(){
		return false;
	});
});