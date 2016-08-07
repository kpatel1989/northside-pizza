$(function(){
	window.modalDialog = function(options){
		$(".modal-body").html = options.body;
		$('#myModal').modal(options);
	};
});
