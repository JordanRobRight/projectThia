function priceViz() {
	if ($('input[name=priceSel]:checked', '#addItem').val() == 'os') {
		$('.small-large').hide();
		$('#one-size').show();
	} else {
		$('#one-size').hide();
		$('.small-large').show();
	}
}

$(document).ready(function(){
	priceViz();
	$('input[name=priceSel]').click(function() {
		priceViz();
	});

});
