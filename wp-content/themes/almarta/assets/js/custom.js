jQuery(document).ready(function($) {
	$("#gallery img").on("click", function(e){
		e.preventDefault();
		var img = $(this).attr("src");
		$("#lightbox").css("display", "block");
		$("#lightbox .modal-content").attr("src", img);
	})

	$("#lightbox .close").on("click", function(){
		$("#lightbox").css("display", "none");
	})
});