function priceViz() {
    if ($('input[name=priceSel]:checked', '#addItem').val() == 'os') {
        $('.small-large').hide();
        $('#one-size').show();
    } else {
        $('#one-size').hide();
        $('.small-large').show();
    }
}

function delConfirm() {
    return confirm('Are you sure you want to delete this item? The cannot operation cannot be undone.');
}

function updateCartItem(obj, item_id) {
    $.get("cartAction.php", {
        action: "updateCartItem",
        item_id: item_id,
        qty: obj.value
    }, function(data) {
        if (data == 'ok') {
            location.reload();
        } else {
            alert('Cart update failed, please try again.');
        }
    });
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
