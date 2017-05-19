function showTable(id, element) {
	$(".table").hide();
	$(id).show();
	$(".active").removeClass('active');
	$(element).addClass('active');
}