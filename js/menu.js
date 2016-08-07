$(document).ready(function(){
	$(".menu").click(function(e){
		var alias = $(e.currentTarget).data('alias');
		$.ajax("/menu-items.php?alias="+alias,{
			success : function(data){
				$("#menu-items-container").html(data);
			}
		})
	});
	$(".add-to-cart").click(function(e){
		var alias = $(e.currentTarget).data('alias'); 
		var id = $(e.currentTarget).data('id');
		
	});
});