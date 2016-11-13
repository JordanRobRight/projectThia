$(document).ready(function(){
	$('.small-large').hide();

  $("input[name$='priceSel']").click(function() {
    if ($("input[name$='priceSel']:checked").val() == 'os') {
      $('.small-large').hide();
      $('#one-size').show();
    } else {
      $('#one-size').hide();
      $('.small-large').show();
    }
  });
});
