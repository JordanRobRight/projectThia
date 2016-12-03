function priceViz() {
    if ($('input[name=priceSel]:checked', '#addItem').val() == 'os') {
        $('.small-large').hide();
        $('#one-size').show();
    } else {
        $('#one-size').hide();
        $('.small-large').show();
    }
}

/*jQuery Document ready */
$(document).ready(function() {
    priceViz();
    $('input[name=priceSel]').click(function() {
        priceViz();
    });

    $('#reset').click(function() {
        $('.resettable').attr('value', ' ');
        $('.resettable').text('');
        $('.ddreset').attr('selected', 'false');
    })

});
